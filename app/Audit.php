<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $fillable = ['description', 'auditor_id', 'enterprise_id'];
    public function criterias() {
        return $this->belongsToMany(Criteria::class, 'audit_criteria');
    }

    public function auditor()
    {
        return $this->belongsTo(Auditor::class);
    }

    public function enterprise() {
        return $this->belongsTo(Enterprise::class);
    }
}
