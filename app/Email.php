<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    public $table = "sign_up_emails";

    public $fillable = [
        'email'
    ];
}
