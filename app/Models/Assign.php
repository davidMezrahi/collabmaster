<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{
    use HasFactory;

    public function subadmin(){
        return $this->belongsTo(SubAdmin:: class, 'subadmin_id','id');
    }
}
