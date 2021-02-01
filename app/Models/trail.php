<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Collection;

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
    public function collections()
    {
        return $this->belongsToMany(Collection::class,'collection_trail','trail_id','collection_id');
    }
}
