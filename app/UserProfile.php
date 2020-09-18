<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
            
            'profile_pic', 'resume','skills',
      ];
}
