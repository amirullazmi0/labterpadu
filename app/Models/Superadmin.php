<?php

namespace App\Models;

use App\Models\Lab;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// use Illuminate\Foundation\Auth\Admin as Authenticatable;

class Superadmin extends Model
{
    use HasFactory;

    protected $table = 'superadmins';

    protected $guarded = ['id'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
}
