<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'loan_type_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function loanType(){
        return $this->hasOne(LoanType::class);
    }
}
