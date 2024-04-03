<?php
namespace Neon\View\Html;

readonly class Attendance implements Item
{
    public function __construct(
        private string $totalUsers,
        private string $onlineUsers,
        private string $totalUsersTitle,
        private string $onlineUsersTitle,
    )
    {
    }

    public function html(Render $h): array
    {
        $title = 'text-[#a2b7a0] text-xs';
        $number = 'text-[#f2f2f2] text-2xl leading-5 font-semibold mt-1';
        $separator = 'border-r border-white border-opacity-20';

        return [
            $h->tag('div', [
                'class' => 'flex align-center bg-black rounded-lg py-[30px] mb-8',
                'id'    => 'attendance',
            ], [
                $h->tag('div', "z-[3] px-6 w-1/2 $separator", [
                    $h->tag('div', ['class' => $title, 'id' => 'totalTitle'], [$this->totalUsersTitle]),
                    $h->tag('div', ['class' => $number, 'id' => 'totalAmount'], [$this->totalUsers]),
                ]),

                $h->tag('div', 'z-[3] px-6 w-1/2', [
                    $h->tag('div', 'flex items-center', [
                        $this->diode($h),
                        $h->tag('div', ['class' => "$title ml-1", 'id' => 'onlineTitle'], [$this->onlineUsersTitle]),
                    ]),
                    $h->tag('div', ['class' => $number, 'id' => 'onlineAmount'], [$this->onlineUsers]),
                ]),

                $this->bottomCenterHighlight($h),
            ]),
        ];
    }

    private function diode(Render $h): string
    {
        return $h->tag('div', 'size-2 bg-[#80ff00] rounded', []);
    }

    private function bottomCenterHighlight(Render $h): Tag
    {
        return $h->tag('div', [
            'class'       => 'top-6 z-[2]',
            'style'       => \implode('', [
                'width:580px;',
                'height:580px;',
                'border-radius:580px;',
                'background:rgba(0, 165, 56, 0.3);',
                'filter:blur(50px);',
                'position:absolute;',
                'left:50%;',
                'transform:translateX(-50%)',
            ]),
            'parentClass' => 'relative overflow-hidden',
        ], []);
    }
}
