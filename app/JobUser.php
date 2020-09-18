<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobUser extends Model
{
   protected $fillable = [
            
            'job_id', 'applicant_id',
      ];
}
