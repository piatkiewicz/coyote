<?php
namespace Neon\View\Html;

readonly class Section implements Item
{
    public function __construct(
        private string $breadcrumbRoot,
        private string $breadcrumbItem,
        private string $sectionTitle,
        private string $subsectionTitle,
        private array  $children,
    )
    {
    }

    public function html(Render $h): array
    {
        return [
            $h->tag('div', 'bg-white rounded-lg py-[26px] p-4 mb-8', [
                $h->tag('nav', [], [
                    $h->tag('ul', 'text-xs font-[Arial]', [
                        $h->tag('li', 'inline', [$this->breadcrumbRoot]),
                        $h->tag('span', 'mx-1 text-[#00A538]', ['/']),
                        $h->tag('li', 'inline', [$this->breadcrumbItem]),
                    ]),
                ]),
                $this->topRightHighlight($h),
                $h->tag('h1', 'font-semibold text-2xl', [$this->sectionTitle]),
            ]),

            $h->tag('h2', 'text-xs text-[#053B00] mb-4 tracking-tight', [$this->subsectionTitle]),

            ...\array_map(
                fn(Event $event) => $event->html($h),
                $this->children),
        ];
    }

    private function topRightHighlight(Render $h): Tag
    {
        return $h->tag('div', [
            'style'       => 'width:580px; height:580px; border-radius:580px; background:rgba(0, 165, 56, 0.60); filter:blur(50px); position:absolute; right:-290px; bottom:50%;',
            'parentClass' => 'relative overflow-hidden',
        ], []);
    }
}
