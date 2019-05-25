<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'insurance_type_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function insuranceType(){
        return $this->hasOne(InsuranceType::class);
    }
}
