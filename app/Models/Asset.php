<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function withdrawal(): HasOne
    {
        return $this->hasOne(Withdrawal::class);
    }
}
