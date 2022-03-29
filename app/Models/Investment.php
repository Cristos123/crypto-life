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

class Investment extends Model
{
    use HasFactory, OrderByDate, FormatDate;

    protected $fillable = ['name', 'amount', 'rate'];
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
}
