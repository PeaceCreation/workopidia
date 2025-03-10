<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $table = 'jobs_listings';
    protected $fillable = ['title', 'description'];
}
