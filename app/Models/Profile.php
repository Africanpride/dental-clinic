<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'telephone',
        'profile_details',
        'profile_image',
        'last_login_ip',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
