<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminRule extends Model
{
    // Specify the table associated with the model
    protected $table = 'admin_rules';

    // Specify which attributes can be mass-assigned
    protected $fillable = ['admin_id', 'rule_id'];

    // Enable timestamps
    public $timestamps = true;

    // Define relationships
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function rule()
    {
        return $this->belongsTo(RulesAndPermissions::class, 'rule_id');
    }
}
