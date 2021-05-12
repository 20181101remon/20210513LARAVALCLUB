<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // Table Name
    protected $table="club_info";

    // Primary key 
    public  $primaryKey="id";

    // TimeStemp
    public $timestemps=true;


}
