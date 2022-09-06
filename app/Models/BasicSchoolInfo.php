<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicSchoolInfo extends Model
{
    use HasFactory;
    protected $fillable = [ 'school_name', 'school_phone', 'email', 'facebook_link', 'website_link', 'linked_in_link'];
}
