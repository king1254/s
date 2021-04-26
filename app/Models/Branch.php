<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = "branchs";
    protected $fillable = [
        'branch_name', 'branch_address', 'phone_number', 'email', 'setup_date', 'builders_name', 'status'			
    ];
}
