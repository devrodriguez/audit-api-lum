<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditor extends Model
{
    protected $fillable = ['name', 'last_name', 'email', 'role_id'];
    
    public function role() {
        return $this->belongsTo(Role::class);
    }
}
