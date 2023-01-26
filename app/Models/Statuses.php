<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuses extends Model
{
    use HasFactory;
     /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idStatus','statusName'];

    protected $primaryKey = 'idStatus';

    public function solicitudes() {
        return $this->hasMany('App\Models\Solicitude');
    }

}
