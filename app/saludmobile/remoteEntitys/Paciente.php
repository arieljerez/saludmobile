<?php

namespace App\saludmobile\remoteEntitys;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['nombre','apellido','historia_clinica','fecha_nacimiento','documento', 'email','sexo'];

    function getNombreCompletoAttribute()
    {
      return $this->nombre . ' ' . $this->apellido;
    }
}
