<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = 
    [
        'name','created_at','created_by','modifier_at','modifier_by'
    ];

    public $timestamps = false;

    public function Menus(){
        return $this->belongsToMany(Menu::class);
    }

    public function Users(){
        return $this->belongsToMany(User::class);
    }

    public function Permissions(){
        return $this->belongsToMany(Permission::class);
    }
}
