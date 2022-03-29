<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait OrderByDate
{
    public function scopeDesc(Builder $query, string $column = null): Builder
    {
        $filteredColumn = !is_null($column) ? $column : 'created_at';
        return $query->orderBy($filteredColumn, 'desc');
    }

    public function scopeAsc(Builder $query, string $column = null): Builder
    {
        $filteredColumn = !is_null($column) ? $column : 'created_at';
        return $query->orderBy($filteredColumn, 'asc');
    }
}
