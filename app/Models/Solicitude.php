<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Solicitude
 *
 * @property $idSolitd
 * @property $titulo
 * @property $detailSoli
 * @property $status
 * @property $user
 * @property $dependencia
 * @property $created_at
 * @property $updated_at
 *
 * @property Dependencia $dependencia
 * @property Status $status
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Solicitude extends Model
{

    static $rules = [
		'idSolitd' => 'required',
		'titulo' => 'required',
		'detailSoli' => 'required',
		'status' => 'required',
		'user' => 'required',
		'dependencia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idSolitd','titulo','detailSoli','status','user','dependencia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\Belongsto
     */
    public function dependencia()
    {
         return $this->belongsTo(Dependencia::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\Belongsto
     */
    public function status()
    {
        // return $this->hasOne('App\Models\Statuses', 'idStatus', 'statusName');
        return $this->belongsTo(Statuses::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
        // return $this->hasOne('App\Models\User', 'id', 'user');
    }


}
