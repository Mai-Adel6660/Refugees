<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jobs extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];


    protected $table='jobs';
    protected $fillable=[
    	'name_job',
    	'seniority',
    	'details',
    	'type',
    	'icon',
    	'sallery',
        'admin_id',
        'category_id'
    ];

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}