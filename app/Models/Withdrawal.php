<?php

namespace App\Models;

use App\Traits\FormatDate;
use App\Traits\OrderByDate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Withdrawal extends Model
{
    use HasFactory, OrderByDate, FormatDate;

    protected $fillable = [
        'asset_id',
        'amount',
        'balance',
        'withdrawal_address',
        'reference',
    ];
    /**
     * Get the user that owns the Withdrawal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the asset that owns the Withdrawal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function asset(): BelongsTo
    {
        return $this->belongsTo(Asset::class);
    }
}
