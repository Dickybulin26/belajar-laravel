<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabeluser extends Model
{
    use HasFactory;
    protected $table = 'tbl_user';
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'username', 'password', 'role'
    ];

    protected $casts = [
        'id_user' => 'integer',
        'username' => 'string',
        'password' => 'string',
        'role' => 'string'
    ];

    public function scopeAdmin($query)
    {
        return $query->where('role', 'admin');
    }

    public function scopeOperator($query)
    {
        return $query->where('role', 'operator');
    }

}
