<header>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white shadow-sm">
        <div class="container-fluid">
            <img src="{{{ asset('img/unalm-logo.png') }}}" alt="logo">
            <span id="titulo" class="text-secondary">Universidad Nacional Agraria La Molina</span>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-pills ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link {{setActive('project.index')}}"
                            href="{{route('curso.index')}}">Nuestros Cursos</a></li>
                    <li class="nav-item"><a class="nav-link {{setActive('about')}}" href="{{route('about')}}">¿Quiénes
                            somos?</a></li>
                    <li class="nav-item"><a class="nav-link {{setActive('contact')}}"
                            href="{{route('contacto.create')}}">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</header>
