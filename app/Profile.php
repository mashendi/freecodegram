<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = ['title', 'description', 'url'];

    public function profileImage()
    {
        $imagePath = $this->image ? $this->image : "profile/zccM9KM7mbEPx4OMO4qvDdFR7I5HDg9JKDFNrxF6.png";
        return "/storage/" . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }
}
