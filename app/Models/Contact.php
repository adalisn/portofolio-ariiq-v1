<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\SendEmail;


class Contact extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "fiezayyan@gmail.com";
            Mail::to($adminEmail)->send(new SendEmail($item));
        });
    }
}