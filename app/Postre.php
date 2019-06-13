<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postre extends Model
{
   protected $table="tbl_postres";
   protected $primaryKey="id_postre";
   protected $fillable=["descripcion","precio"];
}
