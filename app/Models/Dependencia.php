<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Dependencia
 *
 * @property $IdDp
 * @property $nameDp
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dependencia extends Model
{
    use HasFactory;
    static $rules = [
		// 'IdDp' => 'required',
		'nameDp' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
     protected $fillable = ['IdDp','nameDp'];

     protected $primaryKey = 'IdDp';

     protected $table = 'dependencias';
    public function solicitudes() {
        return $this->hasMany(Solicitude::class, 'idSolitd','titulo');
    }
}
