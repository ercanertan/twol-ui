<?php

declare(strict_types=1);

namespace Ercanertan\TwolUI\Components\Blade\Forms\Inputs;

use Illuminate\Contracts\View\View;

class Checkbox extends Input
{
    /** @var bool */
    public $checked;

    public function __construct(string $name, string $id = null, bool $checked = false, ?string $value = '')
    {
        parent::__construct($name, $id, 'checkbox', $value);

        $this->checked = (bool) old($name, $checked);
    }

    public function render(): View
    {
        return view('twol-ui::components.forms.inputs.checkbox');
    }
}
