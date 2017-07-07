@extends('material.layouts.dashboard')

@section('page-title', 'Solicitudes sin revisar:')

@section('content')
<div class="col-md-12">
    <div class="row ui-sortable" id="sortable_portlets">
        <div class="col-md-12">
            <div class="portlet portlet-sortable light bordered portlet-form" style="display: block;">
                <div class="portlet-title ui-sortable-handle">
                    <div class="caption font-green">
                        <i class=" icon-frame font-green"></i>
                        <span class="caption-subject bold uppercase"> Solicitudes </span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" id="link_upload" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" id="link_wrench" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" id="link_trash" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="clearfix"> </div><br><br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="example-table-ajax_wrapper" class="dataTables_wrapper"><div class="row"><div class="col-md-12"><div class="dt-buttons"><a class="dt-button buttons-print btn btn-circle btn-icon-only btn-default tooltips t-print" tabindex="0" aria-controls="example-table-ajax" href="#"><span><i class="fa fa-print"></i></span></a><a class="dt-button buttons-copy buttons-html5 btn btn-circle btn-icon-only btn-default tooltips t-copy" tabindex="0" aria-controls="example-table-ajax" href="#"><span><i class="fa fa-files-o"></i></span></a><a class="dt-button buttons-pdf buttons-html5 btn btn-circle btn-icon-only btn-default tooltips t-pdf" tabindex="0" aria-controls="example-table-ajax" href="#"><span><i class="fa fa-file-pdf-o"></i></span></a><a class="dt-button buttons-excel buttons-html5 btn btn-circle btn-icon-only btn-default tooltips t-excel" tabindex="0" aria-controls="example-table-ajax" href="#"><span><i class="fa fa-file-excel-o"></i></span></a><a class="dt-button buttons-csv buttons-html5 btn btn-circle btn-icon-only btn-default tooltips t-csv" tabindex="0" aria-controls="example-table-ajax" href="#"><span><i class="fa fa-file-text-o"></i></span></a><a class="dt-button buttons-collection buttons-colvis btn btn-circle btn-icon-only btn-default tooltips t-colvis" tabindex="0" aria-controls="example-table-ajax" href="#"><span><i class="fa fa-bars"></i></span></a><a class="dt-button btn btn-circle btn-icon-only btn-default tooltips t-refresh" tabindex="0" aria-controls="example-table-ajax" href="#"><span><i class="fa fa-refresh"></i></span></a></div></div></div><div class="row"><div class="col-md-6 col-sm-12"><div class="dataTables_length" id="example-table-ajax_length"><label>Mostrar <select name="example-table-ajax_length" aria-controls="example-table-ajax" class="form-control input-sm input-xsmall input-inline"><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">Todo</option></select> registros</label></div></div><div class="col-md-6 col-sm-12"><div id="example-table-ajax_filter" class="dataTables_filter"><label>Buscar:<input type="search" class="form-control input-sm input-small input-inline" placeholder="" aria-controls="example-table-ajax"></label></div></div><div id="example-table-ajax_processing" class="dataTables_processing" style="display: none;"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i> <span class="sr-only">Procesando...</span></div></div><div class="table-scrollable"><table class="table table-striped table-bordered table-hover dt-responsive dataTable dtr-inline" width="100%" id="example-table-ajax" role="grid" aria-describedby="example-table-ajax_info" style="width: 100%;">
                                        <thead>
                                        <tr role="row"><th style="width: 10px;" class="sorting" tabindex="0" aria-controls="example-table-ajax" rowspan="1" colspan="1" data-column-index="0" aria-label="#: Activar para ordenar la columna de manera ascendente">#</th><th class="sorting_asc" tabindex="0" aria-controls="example-table-ajax" rowspan="1" colspan="1" data-column-index="2" style="width: 182px;" aria-label="Nombre: Activar para ordenar la columna de manera descendente" aria-sort="ascending">Nucleo Tematico</th><th class="sorting" tabindex="0" aria-controls="example-table-ajax" rowspan="1" colspan="1" data-column-index="3" style="width: 193px;" aria-label="Email: Activar para ordenar la columna de manera ascendente">Grupo</th><th class="sorting" tabindex="0" aria-controls="example-table-ajax" rowspan="1" colspan="1" data-column-index="3" style="width: 53px;" aria-label="Email: Activar para ordenar la columna de manera ascendente"># Estudiantes</th><th style="width: 90px;" class="text-right sorting_disabled" rowspan="1" colspan="1" data-column-index="4" aria-label="Acciones">Acciones</th></tr>
                                        </thead>

                                        <tfoot>
                                        </tfoot>
                                        @foreach($solicitudes as $solicitud)
                                        <tbody>
                                        @if($solicitud->SOL_estado==0)
                                        <tr role="row" class="odd">
                                            <td tabindex="0"></td>
                                            <td class="sorting_1">{{$solicitud->SOL_nucleo_tematico}}</td>
                                            <td>{{$solicitud->SOL_grupo}}</td>
                                            <td>{{$solicitud->SOL_cant_estudiantes}}</td>
                                            <td class=" text-right">
                                                {!! link_to_route('espacios.academicos.espacad.edit',$title='Aceptar', $parameters=$solicitud->PK_SOL_id_solicitud,
                            $atributes=  ['class' => 'btn blue']) !!}
                                                {!! link_to_route('espacios.academicos.est.edit',$title='Rechazar', $parameters=$solicitud->PK_SOL_id_solicitud,
                                                $atributes=  ['class' => 'btn red']) !!}
                                            </td>
                                        </tr>
                                        </tbody>
                                            @endif
                                        @endforeach
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-7 col-sm-12">
                                        <div class="dataTables_paginate paging_bootstrap_number" id="example-table-ajax_paginate">
                                            <ul class="pagination" style="visibility: visible;">
                                                <li class="prev disabled"><a href="#" title="Anterior"><i class="fa fa-angle-left"></i></a></li>
                                                <li class="active"><a href="#">1</a></li>
                                                <li class="next disabled"><a href="#" title="Siguiente"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- empty sortable porlet required for each columns! -->
            <div class="portlet portlet-sortable-empty"> </div>        </div>
    </div>

</div>
@endsection