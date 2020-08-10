<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    protected $table= "job_posts";

    protected $fillable = [
        'jobprovider_id','post','salary','experience', 'no_of_vacant_position', 'qualification','heading'
    ];

    
        public function users()
        {
           // return $this->hasMany(User::class);
            return $this->belongsTo(User::class, 'jobprovider_id');
        }
}
