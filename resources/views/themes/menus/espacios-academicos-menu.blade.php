{{-- MENÚ DE EJEMPLO --}}

<li class="nav-item {{ active(['espacios.academicos.*'], 'start active open') }}">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-group"></i>
        <span class="title">Espacios Académicos</span>
        <span class="arrow {{ active(['espacios.academicos.*'], 'open') }}"></span>
    </a>

    <ul class="sub-menu">
        

        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-book"></i>
                <span class="title">Formato Academico</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item {{ active(['talento.humano.document.create'], 'start active open') }}">
                    <a href="{{ route('talento.humano.document.create') }}" class="nav-link nav-toggle">
                        <i class="fa fa-book"></i>
                        <span class="title">Registrar</span>
                    </a>
                </li>
                <li class="nav-item {{ active(['talento.humano.document.index'], 'start active open') }}">
                    <a href="{{ route('talento.humano.document.index') }}" class="nav-link nav-toggle">
                        <i class="fa fa-book"></i>
                        <span class="title">Consultar</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-book"></i>
                <span class="title">Solicitudes</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item {{ active(['talento.humano.document.create'], 'start active open') }}">
                    <a href="{{ route('talento.humano.document.create') }}" class="nav-link nav-toggle">
                        <i class="fa fa-book"></i>
                        <span class="title">Registrar</span>
                    </a>
                </li>
                <li class="nav-item {{ active(['talento.humano.document.index'], 'start active open') }}">
                    <a href="{{ route('talento.humano.document.index') }}" class="nav-link nav-toggle">
                        <i class="fa fa-book"></i>
                        <span class="title">Consultar</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-book"></i>
                <span class="title">Horario</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item {{ active(['talento.humano.document.create'], 'start active open') }}">
                    <a href="{{ route('talento.humano.document.create') }}" class="nav-link nav-toggle">
                        <i class="fa fa-book"></i>
                        <span class="title">Registrar</span>
                    </a>
                </li>
                <li class="nav-item {{ active(['talento.humano.document.index'], 'start active open') }}">
                    <a href="{{ route('talento.humano.document.index') }}" class="nav-link nav-toggle">
                        <i class="fa fa-book"></i>
                        <span class="title">Consultar</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-book"></i>
                <span class="title">Reportes</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item {{ active(['talento.humano.document.create'], 'start active open') }}">
                    <a href="{{ route('talento.humano.document.create') }}" class="nav-link nav-toggle">
                        <i class="fa fa-book"></i>
                        <span class="title">Docentes</span>
                    </a>
                </li>
                <li class="nav-item {{ active(['talento.humano.document.index'], 'start active open') }}">
                    <a href="{{ route('talento.humano.document.index') }}" class="nav-link nav-toggle">
                        <i class="fa fa-book"></i>
                        <span class="title">Estudiantes</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>

</li>