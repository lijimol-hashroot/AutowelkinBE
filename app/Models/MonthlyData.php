<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyData extends Model
{
    use HasFactory;
    protected $table = 'monthly_data';
    public $timestamps = false;
    protected $primaryKey = 'monthly_data_id';
}
