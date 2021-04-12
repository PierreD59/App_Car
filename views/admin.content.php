<div class="home">

    <div class="container my-3">
    
        <h1 class="text-center mb-5">Page Administration</h1>
        <hr>

            <form action="?page=admin" method="POST">

                <div class="mb-3">
                    <label for="modelVehicle" class="form-label">Modèle de Voiture</label>
                    <input type="text" class="form-control" id="modelVehicle" name="modelVehicle" placeholder="Nom du modèle de voiture">
                </div>
                <div class="mb-3">
                    <label for="labelVehicle" class="form-label">Marque de Voiture</label>
                    <input type="text" class="form-control" id="labelVehicle" name="labelVehicle" placeholder="Nom de la marque de la voiture">
                </div>
                <div class="mb-3">
                    <label for="rate_per_hour" class="form-label">Tarif par heure</label>
                    <input type="text" class="form-control" id="rate_per_hour" name="rate_per_hour" placeholder="Tarif de la location par heure">
                </div>
                <div class="mb-3">
                    <label for="imgVehicle" class="form-label">Url de la Voiture</label>
                    <input type="text" class="form-control" id="imgVehicle" name="imgVehicle" placeholder="https://photo.voiture.com">
                </div>
                <div class="mb-3">
                    <label for="AltImgVehicle" class="form-label">Alt de l'image</label>
                    <input type="text" class="form-control" id="AltImgVehicle" name="AltImgVehicle" placeholder="Cette photo est une photo de la marque de la voiture">
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Ajouter une voiture">       

            </form>
    </div>

</div>