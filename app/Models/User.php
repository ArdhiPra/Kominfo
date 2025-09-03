<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'tbl_user';

    protected $fillable = [
        'username',
        'password',
        'role',
    ];

    // pakai username, bukan email
    public function getAuthIdentifierName()
    {
        return 'username';
    }
}
