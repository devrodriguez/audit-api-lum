<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finding extends Model
{
    protected $fillable = ['title', 'description', 'criteria_id'];
}
