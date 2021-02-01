<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\trail;

class Collection extends Model
{
    use HasFactory;
    protected $table ='collections';
    protected $primaryKey ='id';
    protected $fillable =['name','subTitle','iconImage'];

    public function trails(){
        return $this->belongsToMany('App\Models\trail','collection_trail','collection_id','trail_id');
    }
}
