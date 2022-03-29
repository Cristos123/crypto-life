<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Asset extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'currency'];

    public function investment(): BelongsTo
    {
        return $this->hasMany(Investment::class);
    }
    /**
     * Get the withdrawal associated with the Asset
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function withdrawal(): HasMany
    {
        return $this->hasMany(Withdrawal::class);
    }

    public function payment_address(): HasMany
    {
        return $this->hasMany(PaymentAddress::class);
    }

    public function default_address(): HasOne
    {
        return $this->hasOne(PaymentAddress::class)->where('default', true);
    }
}
