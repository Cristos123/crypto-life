<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KYC extends Model
{
    use HasFactory;
    protected $fillable = [
        'identification',
        'photo',
        'fullname',
        'ssn',
        'date_of_birth',
        'type',
        'user_id',
        'status',
    ];
    /**
     * Get the user that owns the KYC
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
