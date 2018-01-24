<?php

namespace App\saludmobile\remoteEntitys;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['nombre','apellido','historia_clinica','fecha_nacimiento','documento', 'email','sexo','user_id'];

    function getNombreCompletoAttribute()
    {
      return $this->nombre . ' ' . $this->apellido;
    }

    public function coberturas()
    {
      return $this->hasMany( \App\saludmobile\remoteEntitys\Cobertura::Class );
    }
}
