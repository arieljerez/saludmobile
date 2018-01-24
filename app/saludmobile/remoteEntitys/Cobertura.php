<?php
namespace app\saludmobile\remoteEntitys;

use Illuminate\Database\Eloquent\Model;

class Cobertura extends Model
{
  protected $table = 'pacientescoberturas';

  protected $fillable = [
                          'Codigo',
                    			'Descripcion',
                    			'PlanCodigo',
                    		  'PlanDescripcion',
                    			'NumeroAfiliado',
                    			'TipoContratacionCodigo',
                    			'TipoContratacionDescripcion'
                        ];
  public function paciente()
  {
    return $this->belongsTo('\App\saludmobile\remoteEntitys\Paciente');
  }

}

?>
