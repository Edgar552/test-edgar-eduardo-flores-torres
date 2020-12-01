<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ContactosModel extends Model
{
    use HasFactory,SoftDeletes;

    protected $table='contactos';

    protected $primaryKey='id_contacto';

    protected $dates = ['deleted_at'];

    protected $guarded=[]; //PARA DESHABILITAR LA SEGURIDAD DE LARAVEL Y HACER EFECTIVA LA FUNCION "VALIDATED "  EN EL CONTROLADOR
	

	public function scopeControlEmpresas($query, $IdEmpresa)
	{
		if ($IdEmpresa)
		{	
			return $query->where('id_empresa','=', "$IdEmpresa" );
		}
	}

}
