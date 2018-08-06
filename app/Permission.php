<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'name','created_at','created_by','modifier_at','modifier_by'
    ];

    public $timestamps = false;

    public function Roles(){
        return $this->belongsToMany(Role::class);
    }
}
