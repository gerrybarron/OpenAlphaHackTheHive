<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavingType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'type'];

    public function saving(){
        return $this->belongsTo(Saving::class);
    }
}
