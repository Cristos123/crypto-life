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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function asset(): BelongsTo
    {
        return $this->belongsTo(Asset::class);
    }
}
