<?php

namespace App\Container\Acadspace\src;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $connection = 'acadspace';

    protected $table = 'prueba';

    protected $primaryKey = 'cedula';

    protected $fillable = [

        'cedula','req_gui','req_soft','nomb_soft','vers_soft',
    ];


    public function Asistents(){
        return $this->hasMany(Asistent::class);
    }
    public function StatusOfDocuments(){
        return $this->hasMany(StatusOfDocument::class);
    }
    public function Inductions(){
        return $this->hasMany(Induction::class);
    }
    public function Permissions(){
        return $this->hasMany(Permission::class);
    }
    //
}
