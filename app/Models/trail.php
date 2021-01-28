<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trail extends Model
{
    use HasFactory;
    protected $table = 'trails';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'location_id', 'distance', 'coverImage', 'difficulty', 'evaluation', 'altitude'];


    public function location()
    {
        return $this->belongsTo('App\Models\location');
    }
}
