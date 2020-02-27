@extends('layout')

@section('content')

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Główne</div>
                    <a class="nav-link" href="{{ route('cars.index') }}"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Panel główny</a
                    >
                    <a class="nav-link" href="{{ route('cars.create') }}"
                        ><div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                        Dodaj pojazd</a
                    >
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                        ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Layouts
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    ></a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.html">Static Navigation</a><a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a></nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                        ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    ></a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                >Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.html">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                >Error
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
                            </div>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html"
                        ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts</a
                    ><a class="nav-link" href="tables.html"
                        ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables</a
                    >
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Zalogowano jako:</div>
                {{ Auth::user()->name }}
            </div>
        </nav>
    </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Panel</li>
                            <li class="breadcrumb-item active">Edytuj</li>
                        </ol>
                        
                       
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-plus mr-2"></i>Edytuj samochód</div>
                            <div class="card-body">
                                {!! Form::model($car, ['route' => ['cars.update', $car], 'method' => 'PUT']) !!}

                                @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="btn btn-danger">{{ $error }}</div>
                                        @endforeach
                                @endif

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('mark', "Marka:") !!}
                                            {!! Form::text('mark', $car->mark, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                               
                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('model', "Model:") !!}
                                            {!! Form::text('model', $car->model, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            {!! Form::label('engine', "Silnik:") !!}
                                            {!! Form::text('engine', $car->engine, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            {!! Form::label('power', "Moc:") !!}
                                            {!! Form::text('power', $car->power, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            {!! Form::label('equipment', "Cena:") !!}
                                            {!! Form::text('equipment', $car->equipment, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    {!! Form::label('content', "Opis:") !!}
                                    {!! Form::textarea('content', $car->content, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::submit('Zaaktualizuj informacje', ['class'=>'btn btn-lg btn-success']) !!}
                                    
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; RentCar 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>

@endsection