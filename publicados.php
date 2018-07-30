<!doctype html>
<html lang="en">
<head>
    <title>Satisfacción VMC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/main.css">
    <style>
        body{
            color: rgb(113,126,145);
            font-family: 'Open Sans', sans-serif;
            font-weight: 300;
            background-color: #f2f2f2;
        }
        .title{
            font-size: 36px;
            line-height: 36px;            
        }
        .calification{
            font-size: 90px;
            letter-spacing: 5px;
            line-height: 116px;
        }
        .navSatisfaction{
            height: 110px;
            width: 100%;

        }
        .nav-item-satisfaction{
            background-color: #eefbfa !important;            
        }
        .nav-item-satisfaction:nth-child(2),
        .nav-item-satisfaction:nth-child(3),
        .nav-item-satisfaction:nth-child(4){
            border-left: 1px solid #c9f2ef;
        }
        .activate{
            background-color: #2ad4c6 !important;
            border: 0 !important;
            position: relative;
            color: #ffffff;
        }
        .activate:after{
            content: "";
            position: absolute;
            bottom: -10px;
            width: 0; 
            height: 0; 
            border-top: 10px solid #2ad4c6;
            border-right: 10px solid transparent;
            border-left: 10px solid transparent; 
        }
        .icon{
            font-size: 20px;
            font-weight: bold;
        }
        .navTitle{
            font-size: 14px;
            line-height: 18px;
        }
        .number{
            font-size: 37px;
            line-height: 22px;
            font-weight: bold;
        }
        .badge-satisfaction{
            background-color: #29d3c5;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            color: #ffffff;
            font-size: 9px;
            line-height: -2px;
            font-weight: bold;
            position: absolute;
            top: -8px;
            left: 16px;
        }
        .activate .badge-satisfaction{
            background-color: #ffffff;
            color: #29d3c5;
        }
        .btn-Satisfaction{
            width: 45%;
            height: 55px;
            border-radius: 0;
            color: #ffffff;
        }
        .card-Satisfaction{
            border-top: 3px solid #29d3c5;
        }
        .card-img-satisfaction{
            height: 170px;
            background-position: center;
            background-size: cover;
            position: relative;
        }
        .card-img-satisfaction:before{
            content: '';
            background-color: rgba(59,59,86,0.5);
            height: 100%;
            display: block;
        }
        .car-img-satisfaction-content{
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        .card-satisfaction{
            font-size: 14px;
            line-height: 24px;
        }
        .card-user-resume{
            height: 106px;
            font-size: 13px;
            background-color: #ffffff;
        }
        .nick-card-satisfaction{
            font-size: 18px;
            color: rgb(42,212,198);
        }
    </style>
</head>
    <body>
        <div class="container-fluid p-5">
            <div class="container-fluid mt-5 d-flex align-items-start flex-column" style="background-color: #ffffff; border-top: 6px solid #29d3c5; height: 355px">
                <div class="row mt-5 mb-auto w-100 px-5">
                    <div class="col-sm-3 d-flex flex-column justify-content-center title" style="height:150px;">
                        <span>Satisfacción</span>
                        <span class="font-weight-bold">VMC</span>
                    </div>
                    <div class="col-sm-4 d-flex flex-column justify-content-center align-items-center">
                        <span class="calification">4.4</span>
                        <span>Muy Bueno</span>
                        <div class="d-flex justify-content-center">
                            <div class="mr-2">
                                <ul class="list-inline m-0 text-right">
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                </ul>
                            </div>
                            <div>725</div>
                        </div>
                    </div>
                    <div class="col-sm-5 d-flex flex-column justify-content-center align-items-center p-0">
                        <div class="row w-100">
                            <div class="col-sm-5">
                                <ul class="list-inline m-0 text-right">
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                </ul>
                            </div>
                            <div class="col-sm-5 progress p-0 mt-1 progress-bar-satisfaction" >
                                <div class="progress-bar bg-turquoise" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="col-sm-2">
                                428
                            </div>
                        </div>
                        <div class="row w-100">
                            <div class="col-sm-5">
                                <ul class="list-inline m-0 text-right">
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                </ul>
                            </div>
                            <div class="col-sm-5 progress p-0 mt-1 progress-bar-satisfaction" >
                                <div class="progress-bar bg-turquoise-soft" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="col-sm-2">
                                180
                            </div>
                        </div>
                        <div class="row w-100">
                            <div class="col-sm-5">
                                <ul class="list-inline m-0 text-right">
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                </ul>
                            </div>
                            <div class="col-sm-5 progress p-0 mt-1 progress-bar-satisfaction" >
                                <div class="progress-bar bg-turquoise-strong" role="progressbar" style="width: 25%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="col-sm-2">
                                107
                            </div>
                        </div>
                        <div class="row w-100">
                            <div class="col-sm-5">
                                <ul class="list-inline m-0 text-right">
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                </ul>
                            </div>
                            <div class="col-sm-5 progress p-0 mt-1 progress-bar-satisfaction" >
                                <div class="progress-bar bg-orange" role="progressbar" style="width: 15%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="col-sm-2">
                                4
                            </div>
                        </div>
                        <div class="row w-100">
                            <div class="col-sm-5">
                                <ul class="list-inline m-0 text-right">
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                </ul>
                            </div>
                            <div class="col-sm-5 progress p-0 mt-1 progress-bar-satisfaction" >
                                <div class="progress-bar bg-rosewood" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="col-sm-2">
                                8
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <div class="row">
                        <ul class="nav nav-pills nav-fill navSatisfaction">
                            <li class="nav-item nav-item-satisfaction d-flex flex-column justify-content-center align-items-center activate">
                                <div class="icon icon-favoritesstar">                                    
                                </div>
                                <div class="navTitle mb-1">Publicados</div>
                                <div class="number">34</div>                        
                            </li>
                            <li class="nav-item nav-item-satisfaction d-flex flex-column justify-content-center align-items-center">
                                <div class="icon icon-circleCheck position-relative">
                                    <span class="badge badge-satisfaction">69</span>                                   
                                </div>
                                <div class="navTitle mb-1">Aprobados</div>
                                <div class="number">691</div>
                            </li>
                            <li class="nav-item nav-item-satisfaction d-flex flex-column justify-content-center align-items-center">
                                <div class="icon icon-email position-relative">
                                    <span class="badge badge-satisfaction">25</span>
                                </div>
                                <div class="navTitle mb-1">Sugerencias</div>
                                <div class="number">15</div>
                            </li>
                            <li class="nav-item nav-item-satisfaction d-flex flex-column justify-content-center align-items-center">
                                <div class="icon icon-circleCheck"></div>
                                <div class="navTitle mb-1">Archivados</div>
                                <div class="number">69</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-5">
                <div class="row px-0">
                    <?php for($i=0; $i<=20; $i++){?>
                    <div class="col-lg-3 mb-5">
                        <div class="card card-Satisfaction">
                            <div class="card-img-top card-img-satisfaction" style="background-image: url('src/img/P2000172.jpg')">
                                <div class="text-white car-img-satisfaction-content">
                                    <div class="row px-3 h-100">
                                        <div class="col-9 d-flex flex-column justify-content-center">
                                            <div class="fs-21">
                                                <ul class="list-inline m-0 text-orange">
                                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                                    <li class="list-inline-item m-0 icon-favoritesstar"></li>
                                                </ul>
                                            </div>
                                            <div class="text-uppercase font-weight-bold fs-18">
                                                TOYOTA HILUX 2010
                                            </div>
                                            <div class="text-uppercase font-weight-bold fs-15">
                                                APQ242
                                            </div>
                                            <div class="fs-15">
                                                PACÍFICO - US$ 16,584
                                            </div>
                                        </div>
                                        <div class="col-3 d-flex flex-column align-items-end justify-content-end fs-15 position-relative pl-4">
                                            <div class="position-absolute icon-top bg-turquoise d-flex justify-content-center align-items-center" style="top: 0; left: 25px">
                                                <span class="font-weight-bold icon-favoritesstar"></span>
                                            </div>
                                            <div class="icon-favoritesstar font-weight-bold mb-3 w-100 text-turquoise">
                                                <span class="text-white">40</span> 
                                            </div>                                           
                                            <div class="icon-favoritesstar font-weight-bold mb-3 w-100 text-turquoise">                                                 
                                                <span class="text-white">12</span> 
                                            </div>
                                            <div class="icon-favoritesstar font-weight-bold mb-3 w-100 text-turquoise">                                                 
                                                <span class="text-white">24 D</span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text card-satisfaction">Fue muy interesante y emopcionante, creo que la plataforma virtual que manejan es excelente, ahora espero culminar satisfactoriamente el proceso de pago cuanto antes. Felixitaciones y seguiremos usando esta plataforma para otras compras.</p>
                            </div>
                            <div class="card-footer d-flex card-user-resume">
                                <div class="d-flex flex-fill flex-column justify-content-center align-items-center">
                                    <span class="icon icon-favoritesstar mb-1" style="font-size: 35px"></span>
                                    <span class="nick-card-satisfaction font-weight-bold">ELEPAR</span>
                                    <span class="" style="line-height: 7px">Regular</span>
                                </div>
                                <div class="d-flex flex-fill flex-column justify-content-center align-items-center border-left">
                                    <div class="row w-100">
                                        <div class="col">Eleodoro Paredes <span class="font-weight-bold">| 6325602</span></div>
                                    </div>
                                    <div class="row w-100">
                                        <div class="col text-left">
                                            <span class="icon-circleCheck font-weight-bold"></span>
                                            8
                                        </div>
                                        <div class="col text-center">
                                            <span class="icon-circleCheck font-weight-bold"></span>
                                            1
                                        </div>
                                        <div class="col text-right">
                                            <span class="icon-circleCheck font-weight-bold"></span>
                                            1
                                        </div>
                                    </div>
                                    <div class="row w-100">
                                        <div class="col text-left">
                                            <span class="icon-circleCheck font-weight-bold"></span>
                                            750
                                        </div>
                                        <div class="col text-right">
                                            <span class="icon-circleCheck font-weight-bold"></span>
                                            170
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <div class="row">
                                    <div class="col">
                                        <a name="" id="" class="btn btn-warning btn-Satisfaction w-100 d-flex justify-content-center align-items-center" href="#" role="button">
                                            <span class="icon icon-favoritesstar"></span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a name="" id="" class="btn btn-danger btn-Satisfaction w-100 d-flex justify-content-center align-items-center" href="#" role="button">
                                            <span class="icon icon-favoritesstar"></span>
                                        </a>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                            
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>