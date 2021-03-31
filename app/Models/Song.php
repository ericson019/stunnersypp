<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $guarded = [];

    /*
    * Relationships
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /*
    * Scope Queries
    */
    public function scopeIsActive($query)
    {
        return $query->where('is_deleted',0);
    }

    public function scopeCreatedByUser($query)
    {
        return $query->when(auth()->id() !== 1, function($query){
            $query->where('user_id', auth()->id());
        });

    }


}
