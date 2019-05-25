<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReceiptGallery extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['expenditure_id', 'filename'];

    public function expenditure(){
        return $this->belongsTo(Expenditure::class);
    }
}
