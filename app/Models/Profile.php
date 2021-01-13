<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : 'profile/J9m9Vwy4880fKLwnM4tRV9toMHG62CJwVFYwsuB0.png';

        return 'http://localhost/freeCodeGram/public/storage/' . $imagePath;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
