<?php

declare(strict_types=1);

namespace Ercanertan\TwolUI\Components\Blade\Forms\Inputs;

use Ercanertan\TwolUI\Components\BladeComponent;
use Illuminate\Contracts\View\View;

class Textarea extends BladeComponent
{
    /** @var string */
    public $name;

    /** @var string */
    public $id;

    /** @var int */
    public $rows;

    public function __construct(string $name, string $id = null, $rows = 3)
    {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->rows = $rows;
    }

    public function render(): View
    {
        return view('twol-ui::components.forms.inputs.textarea');
    }
}
