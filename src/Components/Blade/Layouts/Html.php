<?php

declare(strict_types=1);

namespace Ercanertan\TwolUI\Components\Blade\Layouts;

use Ercanertan\TwolUI\Components\BladeComponent;
use Illuminate\Contracts\View\View;

class Html extends BladeComponent
{
    /** @var string */
    protected $title;

    public function __construct(string $title = '')
    {
        $this->title = $title;
    }

    public function render(): View
    {
        return view('twol-ui::components.layouts.html');
    }

    public function title(): string
    {
        return $this->title ?: (string) config('app.name', 'Laravel');
    }
}
