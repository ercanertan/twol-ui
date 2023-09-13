<?php

declare(strict_types=1);

namespace Ercanertan\TwolUI\Components\Blade\Editors;

use Ercanertan\TwolUI\Components\BladeComponent;
use Illuminate\Contracts\View\View;

class Trix extends BladeComponent
{
    /** @var string */
    public $name;

    /** @var string */
    public $id;

    /** @var string */
    public $styling;

    protected static $assets = ['trix'];

    public function __construct(string $name, string $id = null, string $styling = 'trix-content')
    {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->styling = $styling;
    }

    public function render(): View
    {
        return view('twol-ui::components.editors.trix');
    }
}
