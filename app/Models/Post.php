<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //แสดงบทความตามรหัสผู้เขียน
    public function scopeUserID($query){
        return $query->where('user_id',1) ; 
    }

    //แสดงจำนวนผู้เข้าชมมากกว่า 500 
    public function scopeVisitor($query){
        return $query->where('visitors','>=',500) ; 
    }


}
