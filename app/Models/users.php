<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    public function getUserImageAttribute(){
        return "https://www.gravatar.com/avatar/".md5($this->email).".jpg?s=260";
    }
}
