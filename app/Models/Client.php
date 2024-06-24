<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\City;

class Client extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
    'clientName',
    'phone',
    'email',
    'website',
    'city_id',
    'active',
    'image',
    'Address',
    ];
       #tthis line to make relation many to many
       public function city(){
        return $this->belongsTo(City::class);
    }
    # another solving to make active=yes or no in the table of clients

    //public function getActiveStatus()
   // {
  //      return $this->active ? 'Yes':'No';
   // }
}
