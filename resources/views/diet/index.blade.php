@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<div class="page-wrapper">
            <!-- Parte de arriba -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Dietas</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dietas</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!--  ya movi el bpoton :3-->
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href="/diet/create"
                                class="btn btn-success d-none d-md-inline-block text-white" target="_blank">Agregar
                                </a>
                        </div>
                    </div>
                </div>
            </div>

    <div class="container-fluid">
        <h1>hola desde index</h1>
    </div>

@include('layouts.footer')