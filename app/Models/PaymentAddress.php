<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymentAddress extends Model
{
    use HasFactory;
    protected $fillable = ['address', 'default'];
    /**
     * Get all of the duration for the Investment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function asset(): BelongsTo
    {
        return $this->belongsTo(Asset::class);
    }
}
