<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model  
{

    public function album(){
        return $this->belongsTo('App\Models\Album', 'idalbum');
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'galeri';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['urlpict', 'ket', 'idalbum', 'created_at', 'user_id', 'role_id', 'updated_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];


}
