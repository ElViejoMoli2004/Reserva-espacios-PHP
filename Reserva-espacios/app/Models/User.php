<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        '', '', '', '', '', '', '', '', '',
    ];

    protected $hidden = [
        '', '',
    ];

    protected $table = '';

    public $timestamps = false;
}