<?php

namespace App\Models;

use App\Traits\OrderByDate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory, OrderByDate;

    protected $guarded = ['id'];
}
