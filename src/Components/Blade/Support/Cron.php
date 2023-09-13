<?php

declare(strict_types=1);

namespace Ercanertan\TwolUI\Components\Blade\Support;

use Ercanertan\TwolUI\Components\BladeComponent;
use Illuminate\Contracts\View\View;
use Lorisleiva\CronTranslator\CronTranslator;

class Cron extends BladeComponent
{
    /** @var string */
    public $schedule;

    /** @var bool */
    public $human = false;

    public function __construct(string $schedule, bool $human = false)
    {
        $this->schedule = $schedule;
        $this->human = $human;
    }

    public function render(): View
    {
        return view('twol-ui::components.support.cron');
    }

    public function translate(): string
    {
        return CronTranslator::translate($this->schedule);
    }
}
