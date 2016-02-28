<?php

namespace Coyote\Parser\Scenarios;

use Coyote\Parser\Parser;
use Coyote\Parser\Providers\Censore;
use Coyote\Parser\Providers\Geshi;
use Coyote\Parser\Providers\Link;
use Coyote\Parser\Providers\Markdown;
use Coyote\Parser\Providers\Purifier;
use Coyote\Parser\Providers\Smilies;

class Post extends Scenario
{
    /**
     * Parse post
     *
     * @param string $text
     * @return string
     */
    public function parse($text)
    {
        start_measure('parsing', 'Parsing post...');

        $isInCache = $this->isInCache($text);
        if ($isInCache) {
            $text = $this->getFromCache($text);
        }

        if (!$isInCache || $this->isSmiliesAllowed()) {
            $parser = new Parser();

            if (!$isInCache) {
                $text = $this->cache($text, function () use ($parser) {
                    $parser->attach((new Markdown($this->user))->setBreaksEnabled(true));
                    $parser->attach(new Purifier());
                    $parser->attach(new Link($this->page, $this->request));
                    $parser->attach(new Censore($this->word));
                    $parser->attach(new Geshi());

                    return $parser;
                });
            }

            if ($this->isSmiliesAllowed()) {
                $parser->attach(new Smilies());
                $text = $parser->parse($text);
            }
        }
        stop_measure('parsing');

        return $text;
    }
}
