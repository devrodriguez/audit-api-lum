<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    protected $fillable = ['name', 'nit', 'address', 'phone', 'web_url'];

    public function audits() {
        return $this->hasMany(Audit::class);
    }
}
