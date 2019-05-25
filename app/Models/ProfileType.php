<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}