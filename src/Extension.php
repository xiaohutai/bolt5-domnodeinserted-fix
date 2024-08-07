<?php

namespace DomNodeInsertedFix;

use Bolt\Extension\BaseExtension;

class Extension extends BaseExtension
{
    public function getName(): string
    {
        return 'DomNodeInsertedFix Extension';
    }

    public function initialize(): void
    {
        $this->addWidget(new Widget());
    }
}