<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

 #se especifica el nombre de la tabla

 protected $table ='product';

#se especificala la llave primaria de la tabla
protected $id = 'id';

#utilizar para los campos created_at y update_at
public $timestamps = false;



 
#especificamos la columnas existentes de la tabla
       protected $filiable = [
        'name',
         'descripcion',
        'price',
        'stok'
 ];






}
