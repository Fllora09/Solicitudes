<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AsignarSolicitude
 *
 * @property $idSolitd
 * @property $id
 * @property $created_at
 * @property $updated_at
 *
 * @property Solicitude $solicitude
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AsignarSolicitude extends Model
{
    
    static $rules = [
		'idSolitd' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idSolitd'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function solicitude()
    {
        return $this->hasOne('App\Models\Solicitude', 'idSolitd', 'idSolitd');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id');
    }
    

}
