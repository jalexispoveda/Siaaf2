@extends('material.layouts.dashboard')

@section('page-title', 'Registro de solicitud:')

@section('content')
<div class="container">
    <a href="{{ url('/usuario/crearUsuario') }}" class="btn btn-primary">Registrar nuevo usuario</a>
    <table class="table table-striped table-bordered">
        <caption><b>Usuarios</b></caption>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Accion</th>
        </tr>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id_usuario }}</td>
            <td>{{ $usuario->nombres }}</td>
            <td>{{ $usuario->primerapellido }}</td>
            <td>{{ $usuario->correo }}</td>
            <td>
                @if($usuario->id_rol==1)
                <span class="label label-danger">Administrador</span>
                @elseif($usuario->id_rol==2)
                <span class="label label-primary">Apoyo academico</span>
                @elseif($usuario->id_rol==3)
                <span class="label label-success">Docente</span>
                @elseif($usuario->id_rol==4)
                <span class="label label-warning">Secretaria</span>
                @endif
            </td>
            <td>
                <a href="" class="btn btn-warning">
                    <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                </a>
                <a href="{{ route('usuario.eliminarUsuario', $usuario->id_usuario) }}" class="btn btn-danger" onclick="return confirm('¿Desea eliminar a este usuario?')">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $usuarios->render() !!}
</div>
@endsection
@push('styles')
<link href="{{ asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('plugins')
<script src="{{ asset('assets/global/plugins/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}" type="text/javascript"></scripts>
    <script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-validation/js/localization/messages_es.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>
@endpush