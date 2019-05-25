<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'profile_type_id',
        'firstname',
        'lastname',
        'middlename',
        'country',
        'state',
        'city',
        'street',
        'zipcode',
        'image',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function profileType(){
        return $this->hasOne(ProfileType::class);
    }
}
