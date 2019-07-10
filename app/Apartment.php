<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class Apartment extends Model
{
	use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['img','location','area','rooms','floor','price','furnished','bathrooms','communication','admin_id'];


    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }
}
