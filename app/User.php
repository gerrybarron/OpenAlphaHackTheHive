<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Profile;
use App\Models\AccessType;
use App\Models\Expenditure;
use App\Models\Account;
use App\Models\Insurance;
use App\Models\Saving;
use App\Models\Withdrawal;
use App\Models\Loan;
use App\Models\Investment;
use App\Models\Fund;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 
        'email', 
        'password', 
        'status', 
        'access_type_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function accessType(){
        return $this->hasOne(AccessType::class);
    }

    public function fund(){
        return $this->hasOne(Fund::class);
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function accounts(){
        return $this->hasMany(Account::class);
    }

    public function expenditures(){
        return $this->hasMany(Expenditure::class);
    }

    public function insurances(){
        return $this->hasMany(Insurance::class);
    }

    public function savings(){
        return $this->hasMany(Saving::class);        
    }

    public function withdrawals(){
        return $this->hasMany(Withdrawal::class);
    }

    public function loans(){
        return $this->hasMany(Loan::class);
    }

    public function investments(){
        return $this->hasMany(Investment::class);
    }
}
