<?php

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * Original code based on the CommonMark JS reference parser (http://bitly.com/commonmark-js)
 *  - (c) John MacFarlane
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Block\Renderer;

use League\CommonMark\Block\Element\AbstractBlock;
use League\CommonMark\Block\Element\HtmlBlock;
use League\CommonMark\HtmlRenderer;

class HtmlBlockRenderer implements BlockRendererInterface
{
    /**
     * @param HtmlBlock $block
     * @param HtmlRenderer $htmlRenderer
     * @param bool $inTightList
     *
     * @return string
     */
    public function render(AbstractBlock $block, HtmlRenderer $htmlRenderer, $inTightList = false)
    {
        return $block->getStringContent();
    }
}
