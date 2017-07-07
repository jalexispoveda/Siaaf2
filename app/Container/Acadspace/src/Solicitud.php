<?php

namespace App\Container\Acadspace\src;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $connection = 'acadspace';

    protected $table = 'TBL_solicitud';

    protected $primaryKey = 'PK_SOL_id_solicitud';

    protected $fillable = [
        'SOL_guia_practica','SOL_software',
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
