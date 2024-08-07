<?php

namespace DomNodeInsertedFix;

use Bolt\Widget\BaseWidget;
use Bolt\Widget\Injector\RequestZone;
use Bolt\Widget\Injector\Target;
use Bolt\Widget\TwigAwareInterface;

class Widget extends BaseWidget implements TwigAwareInterface
{
    protected $name = 'DomNodeInsertedFix';
    protected $target = Target::END_OF_HEAD;
    protected $priority = 300;
    protected $template = '@domnodeinsertedfix/domnodeinsertedfix-widget.html.twig';
    protected $zone = RequestZone::BACKEND;
    protected $cacheDuration = 0;

    public function run(array $params = []): ?string
    {
        // Hack to invoke private `addTwigLoader` method.
        parent::run([]);

        // Rendering through `run` adds an unwanted wrapper div.
        return $this->getTwig()->render($this->template);
    }

}