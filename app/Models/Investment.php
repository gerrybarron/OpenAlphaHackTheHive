<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'investment_type_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function investmentType(){
        return $this->hasOne(InvestmentType::class);
    }
}
