<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Mail;
use App\Mail\ContactMail;
class ContactModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        "fullname","email","phone","subject","message"
    ];

    protected $table="contacts";

        public static function boot() {

  

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "enter admin email here"; // Replace with the actual admin email address

            Mail::to($adminEmail)->send(new ContactMail($item));

        });

    }
}
