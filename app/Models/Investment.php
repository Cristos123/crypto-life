<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;
use App\Models\Asset;
use App\Models\Duration;
use App\Traits\FormatDate;
use App\Traits\OrderByDate;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class Investment extends Model
{
    use HasFactory, OrderByDate, FormatDate;

    protected $guarded = ['id'];

    /**
     * Get all of the duration for the Investment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function duration(): BelongsTo
    {
        return $this->belongsTo(Duration::class);
    }
    /**
     * Get all of the asset for the Investment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function asset(): BelongsTo
    {
        return $this->belongsTo(Asset::class);
    }

    /**
     * Get all of the category for the Investment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }

    public function scopeActive(Builder $query)
    {
        return $query->where('status', 'pending');
    }


    // Helpers
    public function updateCompleted()
    {
        $days = $this->duration->duration;

        $lastUpdate = Carbon::parse($this->updated_at)->startOfDay();
        $expectedLastDay = Carbon::parse($this->created_at)->addDays($days)->startOfDay();

        return $lastUpdate->gte($expectedLastDay);
    }

    public function dailyInvestmentCalculated()
    {
        $lastUpdate = Carbon::parse($this->updated_at)->startOfDay();
        $today = Carbon::today()->startOfDay();

        return $today->isSameDay($lastUpdate);
    }

    public function accrueDays()
    {
        return Carbon::today()->diffInDays(Carbon::parse($this->created_at));
    }
}
