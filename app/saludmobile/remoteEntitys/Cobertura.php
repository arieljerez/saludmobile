<?php
namespace app\saludmobile\remoteEntitys;

use Illuminate\Database\Eloquent\Model;

class Cobertura extends Model
{
  protected $fillable = [
                          'Codigo',
                    			'Descripcion',
                    			'PlanCodigo',
                    		  'PlanDescripcion',
                    			'NumeroAfiliado',
                    			'TipoContratacionCodigo',
                    			'TipoContratacionDescripcion'
                        ];
}

?>
