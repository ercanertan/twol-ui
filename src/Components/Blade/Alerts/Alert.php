<?php

declare(strict_types=1);

namespace Ercanertan\TwolUI\Components\Blade\Alerts;

use Ercanertan\TwolUI\Components\BladeComponent;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;

class Alert extends BladeComponent
{
    /** @var string */
    public $type;

    public function __construct(string $type = 'alert')
    {
        $this->type = $type;
    }

    public function render(): View
    {
        return view('twol-ui::components.alerts.alert');
    }

    public function message(): string
    {
        return (string) Arr::first($this->messages());
    }

    public function messages(): array
    {
        return (array) session()->get($this->type);
    }

    public function exists(): bool
    {
        return session()->has($this->type) && ! empty($this->messages());
    }
}
