<?php

namespace App\saludmobile;

use Illuminate\Database\Eloquent\Model;

class RegistroPaciente extends Model
{
      protected $fillable = ['nombre',
                            'apellido',
                            'documento',
                            'fecha_nacimiento',
                            'sexo',
                            'cobertura',
                            'plan',
                            'afiliado',
                            'email',
                            'telefono_1',
                            'telefono_2'];
}
