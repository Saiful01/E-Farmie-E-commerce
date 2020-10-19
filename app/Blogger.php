<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Blogger extends  Authenticatable
{
    protected $primaryKey = 'blogger_id';
    public $timestamps = true;
    protected $guarded = [];
    use Notifiable;

}
