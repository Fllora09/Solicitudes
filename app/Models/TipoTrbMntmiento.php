<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTrbMntmiento extends Model
{
    use HasFactory;

    use HasFactory;
    /**
    * Attributes that should be mass-assignable.
    *
    * @var array
    */
   protected $fillable = ['idTrbMiento','mantenimientoName'];

   protected $primaryKey = 'idTrbMiento';
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tipo_trb_mntmiento';
}
