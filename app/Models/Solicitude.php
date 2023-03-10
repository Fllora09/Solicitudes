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

    protected $table = 'solicitudes';
    protected $primaryKey = 'idSolitd';
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dependencias()
    {
         return $this->belongsTo(Dependencia::class, 'IdDp');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statuses()
    {
        // return $this->hasOne('App\Models\Statuses', 'idStatus', 'statusName');
        return $this->belongsTo(Statuses::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo(User::class, 'id', 'user' );
        // return $this->hasOne('App\Models\User', 'id', 'user');
    }

    public function assignedToUser() {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
