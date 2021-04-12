<?php 

if (isset($_POST['submit'])) {
    if (isset($_POST['modelVehicle']) && !empty($_POST['modelVehicle'])) {
        $model = htmlspecialchars(($_POST['modelVehicle']));

        if (isset($_POST['labelVehicle']) && !empty($_POST['labelVehicle'])) {
            $label = htmlspecialchars($_POST['labelVehicle']);

            if (isset($_POST['rate_per_hour']) && !empty($_POST['rate_per_hour'])) {
                $price = htmlspecialchars($_POST['rate_per_hour']);

                if (isset($_POST['imgVehicle']) && !empty($_POST['imgVehicle'])) {
                    $imgVehicle = htmlspecialchars($_POST['imgVehicle']);
                        if (isset($_POST['AltImgVehicle']) && !empty($_POST['AltImgVehicle'])) {
                        $AltImgVehicle = htmlspecialchars($_POST['AltImgVehicle']);

                        $addVehicle = $database->prepare("INSERT INTO `vehicles`(`model`, `label`, `rate_per_hour`, `illustration_image_url`, `AltOfURL`) VALUES (:model, :label, :rate_per_hour, :illustration_image_url, :AltOfURL)");
                        $toto = $addVehicle->execute([
                            "model" => $model,
                            "label" => $label,
                            "rate_per_hour" => $price,
                            "illustration_image_url" => $imgVehicle,
                            "AltOfURL" => $AltImgVehicle,
                        ]);
                    } else {
                        echo "Il faut un Alt pour chaque image, veuillez entrer une description";
                    }
                } else {
                    echo "Veuillez ajouter une photo";
                }
            } else {
                echo "Entrez un prix";
            }
        } else {
            echo "Entrez une marque de voiture";
        }
    } else {
        echo "Entrez un modèle de voiture";
    }
}




include dirname(__FILE__) . "/../views/admin.content.php";