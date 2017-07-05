<?php

namespace App\container\gesap\src;

use Illuminate\Database\Eloquent\Model;

class Anteproyecto extends Model
{
    protected $connection = 'gesap';

    protected $table = 'TBL_Anteproyecto';

    protected $primaryKey = 'PK_NPRY_idMinr008';

    protected $fillable = ['NPRY_Titulo','NPRY_Keywords','NPRY_Duracion','NPRY_FechaR','NPRY_FechaL','NPRY_Estado','FK_TBL_Radicacion_id'];
    
    
    
}
