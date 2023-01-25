<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;


    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function location(){
        return $this->belongsTo(Location::class);
    }
    public function locationRegion(){
        return $this->belongsTo(LocationRegion::class);
    }
    public function queryCategory(){
        return $this->belongsTo(QueryCategory::class);
    }



}
