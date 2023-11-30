<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usercontact extends Model
{
    use HasFactory;
    protected $table = 'user_contact';

    public function contactFormQuery(){
        return $this->hasMany(Investor::class, 'user_id', 'id');
    }
}
