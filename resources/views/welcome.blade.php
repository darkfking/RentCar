<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <title>RentCar</title>
        <style>
            body {
                background-color: #262626;
            }
        </style>
    </head>
    <body>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="index.html">RentCar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                       
            
                        @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}">Panel</a>
                        @else
                            <a href="{{ route('login') }}">Zaloguj</a>
                        @endauth
                @endif
                    </div>
                </div>
            </nav>
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Wypożycz najlepsze samochody w okolicy</h1>
                    <p class="lead text-muted mb-0">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte...</p>
                </div>
            </section>
            <div class="container">
                @foreach ($cars as $car)
                <div class="row">
                            <div class="col">
                                <div class="card mt-5">
                                    <img class="card-img-top" src="{{asset('audi.jpg')}}" alt="Card image cap" >
                                    <div class="card-body">
                                    <h4 class="card-title"><a href="product.html" title="View Product">{{$car->mark}} {{$car->model}}<p class="float-right">{{$car->engine}}</p></a></h4>
                                    <p class="card-text">{{$car->content}}</p>
                                        <div class="row">
                                            
                                            <div class="col-9">
                                                <a href="#" class="btn btn-success btn-block">Zarezerwuj</a>
                                            </div>
                                            <div class="col-3">
                                            <p>
                                                <a class="btn btn-primary btn-block" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                  Zobacz ofertę
                                                </a>
    
                                              </p>
                                            </div>
                                              

                                              <div class="collapse" id="collapseExample">
                                                  <div class="container">
                                                      
                                                        <div class="card card-body ">
                                                            
                                                            <?php $cena = $car->equipment; 
                                                            $cena = (int)$cena;
                                                            $cena1 = ($cena * 3) - 30;
                                                            $cena2 = ($cena * 7) - 100;
                                                            ?>

                                                            Przy wynajmie na 1 dzień cena wynosi: {{$cena}} zł <br>
                                                            Przy wynajmie na 3 dni cena za dobę wynosi:  {{$cena1}} zł <br>
                                                            Przy wynajmie na 7 dni cena za dobę wynosi: {{$cena2}} zł
                                                        </div>
                                                      
                                                  </div>
                                              </div>
                                              
                                        </div>
                                    </div>
                                </div>
                            </div>  
                             
                </div>
                @endforeach
            
            
            <!-- Footer -->
            <footer class="text-dark mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-lg-4 col-xl-3">
                            <h5>About</h5>
                            <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                            <p class="mb-0">
                                Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
                            </p>
                        </div>
            
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                            <h5>Informations</h5>
                            <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                            <ul class="list-unstyled">
                                <li><a href="">Link 1</a></li>
                                <li><a href="">Link 2</a></li>
                                <li><a href="">Link 3</a></li>
                                <li><a href="">Link 4</a></li>
                            </ul>
                        </div>
            
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                            <h5>Others links</h5>
                            <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                            <ul class="list-unstyled">
                                <li><a href="">Link 1</a></li>
                                <li><a href="">Link 2</a></li>
                                <li><a href="">Link 3</a></li>
                                <li><a href="">Link 4</a></li>
                            </ul>
                        </div>
            
                        <div class="col-md-4 col-lg-3 col-xl-3">
                            <h5>Contact</h5>
                            <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-home mr-2"></i> My company</li>
                                <li><i class="fa fa-envelope mr-2"></i> email@example.com</li>
                                <li><i class="fa fa-phone mr-2"></i> + 33 12 14 15 16</li>
                                <li><i class="fa fa-print mr-2"></i> + 33 12 14 15 16</li>
                            </ul>
                        </div>
                        <div class="col-12 copyright mt-3">
                            <p class="float-left">
                                <a href="#">Wróć na góre</a>
                            </p>
                            <p class="text-right text-muted">created with <i class="fa fa-heart"></i> by <a href=""><i>Gołąb</i></a> | <span>v. 1.0</span></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      </body>
</html>
