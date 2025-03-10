<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $table = 'jobs_listings';
    protected $fillable = ['title', 'description' , 'salary', 'tags', 'job_type', 'remote', 'requirements', 'address', 'city', 'state', 'zipcode', 'contact_email',
    'contact_phone', 'company_name', 'company_description', 'company_logo', 'company_website', 'user_id'];


        // Relation To User
        public function user(){
            return $this->belongsTo(User::class);
        }

}

