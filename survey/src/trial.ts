import diffFormat from "./time/diffFormat";

const title = 'Układ treści w komentarzach.';

const reason = 'Hierarchia informacji w obecnym układzie utrudnia szybkie zweryfikowanie kto jest autorem komentarza ' +
  'oraz kiedy komentarz został napisany.';

const solution = 'Proponujemy zmianę, która zakłada uporządkowanie treści według następującej hierarchii: ' +
  '<code>kto?</code>, <code>kiedy?</code>, <code>co?</code>. ' +
  'Dzięki temu szybko uzyskamy informację o autorze komentarza, dacie jego napisania oraz jego treści.';

export const trial = {
  title,
  reason,
  solution,
  dueTime: diffFormat(secondsUntil('2024-08-27 16:00:00')),
  light: {
    imageLegacy: '/img/survey/postCommentStyle/legacy.light.png',
    imageModern: '/img/survey/postCommentStyle/modern.light.png',
  },
  dark: {
    imageLegacy: '/img/survey/postCommentStyle/legacy.dark.png',
    imageModern: '/img/survey/postCommentStyle/modern.dark.png',
  },
};

function secondsUntil(dateFormat: string): number {
  return millisecondsDifference(dateFormat) / 1000;
}

function millisecondsDifference(dateFormat: string): number {
  return new Date(dateFormat).getTime() - new Date().getTime();
}
