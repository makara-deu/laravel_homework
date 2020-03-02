<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone', 'address', 'user_id',// for edit 
    ];
   public function user(){
       $this->belongsTo(User::class);
   }
}
