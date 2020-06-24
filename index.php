<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Devinbox</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom-style.css">
    <script src="js/jquery.min.js"></script>
</head>
<body class="background-beige">
<?php include "navbar.php"; ?>
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-lg-4 mt-4 card h-100 background-beige">
            <div class="card-body background-beige">
                <form class="form-inline">
                    <i class="fas fa-search" aria-hidden="true"></i>
                    <input class="form-control form-control-sm  w-100" type="text" placeholder="Search"
                           aria-label="Recherche">
                </form>
                <div class="list-group mt-3 background-beige">
                    <h2>Categorie</h2>
                    <a href="#" class="list-group-item list-group-item-action">Musique</a>
                    <a href="#" class="list-group-item list-group-item-action">Voiture</a>
                    <a href="#" class="list-group-item list-group-item-action">Sport</a>
                    <a href="#" class="list-group-item list-group-item-action">Mobilier</a>
                    <a href="#" class="list-group-item list-group-item-action">Vetement</a>
                    <a href="#" class="list-group-item list-group-item-action">Numerique</a>
                    <a href="#" class="list-group-item list-group-item-action">Autres</a>
                </div>
            </div>
        </div>
        <div class="col-lg-8 mt-4">
            <div class="row">
                <div class="card ml-1 mt-2 ml-auto col-lg-5" style="width: 18rem;">
                    <img class="card-img-top" src="img/acoustic.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">CORT</h5>
                        <p class="card-text">DREADNOUGHT JUNIOR guitare acoustique folk</p>
                        <div class="text-primary"><span>219.00 euro</span></div>
                        <a href="#" class="btn btn-success btn-md">Achete</a>
                    </div>
                </div>
                <div class="card ml-1 mt-2 ml-auto col-lg-5" style="width: 18rem;">
                    <img class="card-img-top" src="img/boogie.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">MESA</h5>
                        <p class="card-text"> Pan coupe Puissance admissible: 60 Watt Impedance: 8 Ohm 1 haut-parleur
                            12" Celestion Vintage 30 Entree</p>
                        <div class="text-primary"><span>350.00 euro</span></div>
                        <a href="#" class="btn btn-success btn-md">Achete</a>
                    </div>
                </div>
                <div class="card ml-1 mt-2 ml-auto col-lg-5" style="width: 18rem;">
                    <img class="card-img-top" src="img/sax.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cello</h5>
                        <p class="card-text">DREADNOUGHT JUNIOR guitare acoustique folk</p>
                        <div class="text-primary"><span>235.00 euro</span></div>
                        <a href="#" class="btn btn-success btn-md">Achete</a>
                    </div>
                </div>
                <div class="card ml-1 mt-2 ml-auto col-lg-5" style="width: 18rem;">
                    <img class="card-img-top" src="img/micro.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Micro</h5>
                        <p class="card-text">DREADNOUGHT JUNIOR guitare acoustique folk</p>
                        <div class="text-primary"><span>150.00 euro</span></div>
                        <a href="#" class="btn btn-success btn-md">Achete</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include "footer.php"; ?>
</body>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
</html>