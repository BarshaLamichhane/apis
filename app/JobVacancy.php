<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    protected $fillable = [
        'job_category', 'job_post', 'no_of_vacancy', 'company_logo'
    ];
}
