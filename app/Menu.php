<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name','parent_id','created_at','created_by','modifier_at','modifier_by'
    ];

    public $timestamps = false;

    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}
