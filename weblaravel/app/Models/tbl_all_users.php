<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_all_users extends Model
{
    use HasFactory;
    protected $filltable = [
        'users_id',
        'users_name',
        'users_desc',
       'users_status',
    ];
    
}