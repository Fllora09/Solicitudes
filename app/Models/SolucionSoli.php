<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolucionSoli extends Model
{
    use HasFactory;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idSolu','soluSolitd'];

    protected $primaryKey = 'idSolu';

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'solucionsolis';
}
