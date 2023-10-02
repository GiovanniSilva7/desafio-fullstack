<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingData extends Model
{
    use HasFactory;

    public function backgroundImage(){
        $this->hasOne(FileContent::class);
    }
    protected $fillable = ['title', 'subtitle', 'file_id'];
}
