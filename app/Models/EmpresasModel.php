<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Askedio\SoftCascade\Traits\SoftCascadeTrait;
class EmpresasModel extends Model
{
    use HasFactory,SoftDeletes,SoftCascadeTrait;

    protected $table='empresas';

    protected $primaryKey='id_empresa';

    protected $guarded=[]; //PARA DESHABILITAR LA SEGURIDAD DE LARAVEL Y HACER EFECTIVA LA FUNCION "VALIDATED "  EN EL CONTROLADOR

	protected $dates = ['deleted_at'];
 
 	protected $softCascade = ['contactosrel'];
    
    public function contactosrel()
    {
        return $this->hasMany(ContactosModel::class, 'id_empresa');
    }


}
