<?php

namespace Coyote\Http\Middleware;

use Closure;
use Coyote\Forum;
use Coyote\Repositories\Contracts\PostRepositoryInterface as PostRepository;
use Coyote\Repositories\Contracts\SessionRepositoryInterface as SessionRepository;
use Coyote\Services\UrlBuilder\UrlBuilder;
use Coyote\Topic;
use Illuminate\Http\Request;

class ScrollToPost
{
    /**
     * @var PostRepository
     */
    protected $post;

    /**
     * @var SessionRepository
     */
    protected $session;

    /**
     * @param PostRepository $post
     * @param SessionRepository $session
     */
    public function __construct(PostRepository $post, SessionRepository $session)
    {
        $this->post = $post;
        $this->session = $session;
    }

    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        /* @var \Coyote\Forum */
        $forum = $request->route('forum');
        /* @var \Coyote\Topic $topic */
        $topic = $request->route('topic');

        $userId = $request->user() ? $request->user()->id : null;
        $sessionId = $request->session()->getId();

        $markTime = [
            Topic::class => $topic->markTime($userId, $sessionId),
            Forum::class => $forum->markTime($userId, $sessionId)
        ];

        if (empty($markTime[Forum::class])) {
            $markTime[Forum::class] = $this->session->findFirstVisit($userId, $sessionId);
        }

        $request->attributes->set('mark_time', $markTime);

        if ($request->get('view') !== 'unread') {
            return $next($request);
        }

        // associate topic with forum
        $topic->forum()->associate($forum);
        $url = UrlBuilder::topic($topic);

        if ($markTime[Topic::class] < $topic->last_post_created_at
            && $markTime[Forum::class] < $topic->last_post_created_at) {
            $max = max($markTime[Topic::class], $markTime[Forum::class]);

            if ($max) {
                $postId = $this->post->getFirstUnreadPostId($topic->id, $max);

                if ($postId && $postId !== $topic->first_post_id) {
                    return redirect()->to($url . '?p=' . $postId . '#id' . $postId);
                }
            }
        } else {
            return redirect()->to($url . '?p=' . $topic->last_post_id . '#id' . $topic->last_post_id);
        }

        return $next($request);
    }
}
