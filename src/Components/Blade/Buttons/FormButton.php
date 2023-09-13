<?php

declare(strict_types=1);

namespace Ercanertan\TwolUI\Components\Blade\Buttons;

use Ercanertan\TwolUI\Components\BladeComponent;
use Illuminate\Contracts\View\View;

class FormButton extends BladeComponent
{
    /** @var string|null */
    public $action;

    /** @var string */
    public $method;

    public function __construct(string $action = null, string $method = 'POST')
    {
        $this->action = $action;
        $this->method = strtoupper($method);
    }

    public function render(): View
    {
        return view('twol-ui::components.buttons.form-button');
    }
}
