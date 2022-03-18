<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Duration extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'duration'];

    /**
     * Get the investment that owns the Duration
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function investment(): hasMany
    {
        return $this->hasMany(Investment::class);
    }
}
