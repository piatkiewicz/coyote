import axios from "axios";
import { Microblog, Paginator, Tag } from "@/types/models";
import Vue from 'vue';

type ParentChild = { parent: Microblog, comment: Microblog };

interface VoteResponse {
  users: string[];
  count: number;
}

const state: Paginator = {
  current_page: 0,
  data: [],
  from: 0,
  last_page: 0,
  path: "",
  per_page: 0,
  to: 0,
  total: 0
};

const getters = {
  microblogs: (state, getters, rootState) => {
    const sorted = Object.values(state.data).sort((a, b) => (b as Microblog).id! - (a as Microblog).id!);

    if (!rootState.user.is_sponsor) {
      sorted.sort((a, b) => +(b as Microblog).is_sponsored! - +(a as Microblog).is_sponsored!);
    }

    return sorted;
  },

  exists: state => (id: number) => id in state.data,
  currentPage: state => state.current_page,
  totalPages: state => state.last_page
}

const mutations = {
  init(state, pagination: Paginator) {
    state = Object.assign(state, pagination);
  },

  add(state, microblog: Microblog) {
    Vue.set(state.data, microblog.id!, microblog);
  },

  update(state, microblog: Microblog) {
    let { text, html, assets } = microblog; // update only text and html version

    Vue.set(state.data, microblog.id!, {...state.data[microblog.id!], ...{ text, html, assets }})
  },

  delete(state, microblog: Microblog) {
    Vue.delete(state.data, microblog.id!);
  },

  addComment(state, { parent, comment }: ParentChild) {
    if (Array.isArray(parent.comments)) {
      Vue.set(parent, "comments", {});
    }

    Vue.set(parent.comments, comment.id!, comment);

    parent.comments_count! += 1;
  },

  updateComment(state, { parent, comment }) {
    let { text, html } = comment; // update only text and html version

    Vue.set(parent.comments, comment.id!, {...parent.comments[comment.id], ...{text, html}});
  },

  deleteComment(state, microblog: Microblog) {
    Vue.delete(state.data[microblog.parent_id!].comments, microblog.id!);

    state.data[microblog.parent_id!].comments_count -= 1;
  },

  subscribe(state, microblog: Microblog) {
    microblog.is_subscribed = true;
  },

  unsubscribe(state, microblog: Microblog) {
    microblog.is_subscribed = false;
  },

  vote(state, microblog: Microblog) {
    if (microblog.is_voted) {
      microblog.is_voted = false;
      microblog.votes -= 1;
    }
    else {
      microblog.is_voted = true;
      microblog.votes += 1;
    }
  },

  edit(state, microblog: Microblog) {
    // we must use set() because is_editing can be undefined
    Vue.set(microblog, 'is_editing', !microblog.is_editing);
  },

  setComments(state, { microblog, comments }) {
    microblog.comments = comments;
    microblog.comments_count = Object.keys(comments).length;
  },

  setVoters(state, { microblog, voters }: { microblog: Microblog, voters: VoteResponse }) {
    Vue.set(microblog, 'voters', voters.users);
    Vue.set(microblog, 'votes', voters.count);
  },

  toggleTag(state, { microblog, tag }: { microblog: Microblog, tag: Tag }) {
    const index = microblog.tags!.findIndex(item => item.name === tag.name);

    index > -1 ? microblog.tags!.splice(index, 1) : microblog.tags!.push(tag);
  }
};

const actions = {
  subscribe({ commit }, microblog: Microblog) {
    commit(microblog.is_subscribed ? 'unsubscribe' : 'subscribe', microblog);

    axios.post(`/Mikroblogi/Subscribe/${microblog.id}`);
  },

  vote({ commit }, microblog: Microblog) {
    commit('vote', microblog);

    return axios.post(`/Mikroblogi/Vote/${microblog.id}`)
      .then(result => commit('setVoters', { microblog, voters: result.data }))
      .catch(() => commit('vote', microblog));
  },

  delete({ commit }, microblog: Microblog) {
    return axios.delete(`/Mikroblogi/Delete/${microblog.id}`).then(() => commit('delete', microblog));
  },

  deleteComment({ commit }, microblog: Microblog) {
    return axios.delete(`/Mikroblogi/Comment/Delete/${microblog.id}`).then(() => commit('deleteComment', microblog));
  },

  save({ commit, getters }, microblog: Microblog) {
    return axios.post(`/Mikroblogi/Edit/${microblog.id || ''}`, microblog).then(result => {
      commit(getters.exists(result.data.id) ? 'update' : 'add', result.data);

      return result;
    });
  },

  saveComment({ state, commit, getters }, comment: Microblog) {
    return axios.post(`/Mikroblogi/Comment/${comment.id || ''}`, comment).then(result => {
      const parent = state.data[comment.parent_id!];

      if (parent.comments[comment.id!]) {
        commit('updateComment', { parent, comment: result.data.data });
      }
      else {
        commit('addComment', { parent, comment: result.data.data});
        commit(result.data.is_subscribed ? 'subscribe' : 'unsubscribe', parent);
      }

      return result;
    });
  },

  loadComments({ commit }, microblog: Microblog) {
    return axios.get(`/Mikroblogi/Comment/Show/${microblog.id}`).then(result => {
      commit('setComments', { microblog, comments: result.data });
    })
  },

  loadVoters({ commit }, microblog: Microblog) {
    return axios.get(`/Mikroblogi/Voters/${microblog.id}`).then(result => {
      commit('setVoters', { microblog, voters: result.data });
    });
  }
};

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
};
