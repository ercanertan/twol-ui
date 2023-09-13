<?php

declare(strict_types=1);

namespace Ercanertan\TwolUI\Components\Blade\Navigation;

use Ercanertan\TwolUI\Components\BladeComponent;
use Illuminate\Contracts\View\View;

class Dropdown extends BladeComponent
{
    protected static $assets = ['alpine'];

    public function render(): View
    {
        return view('twol-ui::components.navigation.dropdown');
    }
}
