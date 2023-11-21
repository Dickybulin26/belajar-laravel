<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory;
    protected $table = 'logs';
    protected $primaryKey = 'id_logs';
    protected $fillable = ['logs'];
    protected $date = 'tanggal';
}
