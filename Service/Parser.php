<?php
namespace Dothiv\Bundle\ParsedownBundle\Service;

use FOS\CommentBundle\Markup\ParserInterface;
use \Parsedown;

class Parser implements ParserInterface
{
    /** @var Parsedown $parser */
    private $parser;

    protected function getParser()
    {
        if (null === $this->parser) {
            $this->parser = new Parsedown();
        }

        return $this->parser;
    }

    public function parse($raw)
    {
        return $this->getParser()->text($raw);
    }
}