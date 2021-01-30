<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;
    protected $table = 'location';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'countie_id'];
    public function location()
    {
        return $this->hasOne('App\Models\countie');
    }
    public function countie()
    {
        return $this->belongsTo('App\Models\countie');
    }
}
