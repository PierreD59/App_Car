<div class="home">

    <div class="container my-3">
    
        <h1 class="text-center mb-5">Bienvenue sur AppCar, l'application de location de voiture</h1>
        <hr>
        <div class="row p-0 m-0">
            <?php $query = $database->query('SELECT `model`, `label`, `rate_per_hour`, `illustration_image_url` FROM `vehicles`');
                while (($dataVehicle = $query->fetch())) { ?>
            <div class="card m-3 p-0" style="width: 18rem;">
                <a href="?page=detail">
                
                    <img src="<?= $dataVehicle['illustration_image_url'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $dataVehicle['model']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $dataVehicle['label']; ?></h6>
                        <p class="card-text text-end "><?= $dataVehicle['rate_per_hour']; ?>€/heure</p>
                    </div>

                </a>
            </div>
            <?php } ?>
        </div>

    </div>

</div>