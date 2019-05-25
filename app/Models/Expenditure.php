<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'amount', 'description'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function receiptGalleries(){
        return $this->hasMany(ReceiptGallery::class);
    }
}
