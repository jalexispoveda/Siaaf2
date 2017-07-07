@extends('material.layouts.dashboard')

@section('page-title', 'Solicitudes sin revisar:')

@section('content')
<div class="col-md-12">
    <div class="portlet portlet-sortable light bordered portlet-form">
        <div class="portlet-title">
            <div class="caption font-green">
                <i class=" icon-book-open font-green"></i>
                <span class="caption-subject bold uppercase"> Solicitudes</span>
            </div>
            <div class="actions">
                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"></a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="clearfix"> </div><br><br><br>
            <div class="row">
                <div class="col-md-12">

                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="example-table-ajax">
                        <thead>
                        <th>Nucleo</th>
                        <th>Guia</th>
                        <th>Acción</th>
                        </thead>
                        @foreach($solicitudes as $solicitud)
                        <tbody>
                        @if($solicitud->SOL_estado==0)
                        <td>{{$solicitud->SOL_nucleo_tematico}}</td>
                        <td>{{$solicitud->SOL_guia_practica}}</td>
                        <td>{!! link_to_route('espacios.academicos.espacad.edit',$title='Aceptar', $parameters=$solicitud->PK_SOL_id_solicitud,
                            $atributes=  ['class' => 'btn blue']) !!}
                            {!! link_to_route('espacios.academicos.est.edit',$title='Rechazar', $parameters=$solicitud->PK_SOL_id_solicitud,
                            $atributes=  ['class' => 'btn red']) !!}
                        </td>
                        </tbody>
                        @endif
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection