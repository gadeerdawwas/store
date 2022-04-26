<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Store extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    protected $guarded  = [];
	protected $guard = 'store';

}
