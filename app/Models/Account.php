<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'amount', 'account_type_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function accountType() {
        return $this->hasOne(AccountType::class);
    }
}
