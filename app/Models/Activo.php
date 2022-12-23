<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'activos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo', 'descrip', 'precio', 'fechaadq', 'foto', 'grupo_id', 'estado_id', 'oficina_id'];

    public function grupo(){
        return $this->belongsTo(Grupo::class);
    }

    public function estado(){
        return $this->belongsTo(Estado::class);
    }

    public function oficina(){
        return $this->belongsTo(Oficina::class);
    }

    
}
