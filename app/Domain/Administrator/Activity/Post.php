<?php
namespace Coyote\Domain\Administrator\Activity;

use Carbon\Carbon;
use Coyote\Domain\Administrator\View\PostPreview;
use Coyote\Domain\Html;

class Post
{
    private PostPreview $preview;

    public function __construct(
        public string  $text,
        public string  $forumName,
        public string  $forumUrl,
        public string  $topicTitle,
        public string  $postUrl,
        private Carbon $createdAt,
        public bool    $deleted,
        public bool    $isThread,
    )
    {
        $this->preview = new PostPreview($text);
    }

    public function html(): Html
    {
        return $this->preview->html();
    }

    public function previewHtml(): ?Html
    {
        return $this->preview->previewHtml();
    }

    public function isLong(): bool
    {
        return $this->preview->hasPreview();
    }

    public function dateString(): string
    {
        return $this->createdAt->format('Y-m-d H:i:s');
    }
}
