<?php

namespace App\Traits;

use Carbon\Carbon;

trait FormatDate
{
    public function date($date): string
    {
        return Carbon::parse($date)->diffForHumans();
    }

    public function created_at(): string
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function updated_at(): string
    {
        return Carbon::parse($this->updated_at)->diffForHumans();
    }
}
