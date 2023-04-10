<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class user extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'typeuser_id',
        'name',
        'email',
        'password',
        'state_id',
        'township_id',
        'address',
        ];
    
        public function township()
        {
            return $this->belongsTo(township::class, 'state_id', 'id');
        }
}
