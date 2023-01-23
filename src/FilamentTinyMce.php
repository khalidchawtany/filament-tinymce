<?php

namespace Parfaitementweb\FilamentTinyMce;

use Filament\Forms\Components\Field;
use Filament\Forms\Components\Concerns;
use Filament\Forms\Components\Contracts;

class FilamentTinyMce extends Field implements Contracts\CanBeLengthConstrained, Contracts\HasFileAttachments
{
    use Concerns\CanBeLengthConstrained;
    use Concerns\HasFileAttachments;

    protected string $view = 'filament-tinymce::filament-tinymce';

    protected function setUp(): void
    {
        parent::setUp();
    }
}

