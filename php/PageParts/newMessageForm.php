<?php
$filename = basename($_SERVER['SCRIPT_FILENAME']);
$info = getUserInformation();
$avatar = $info['avatar'];
include("adressSearch.php");


?>

<!DOCTYPE html>

<html lang ="fr">
<head>
    <meta charset = "utf-8">
    <script src="https://maps.googleapis.com/maps/api/js?key=KEY&libraries=places"></script>

    <link rel = "stylesheet" href = "./css/stylesheet.css">
    <link rel = "stylesheet" href = "./css/newMessage.css">

</head>

<body>

<div class = "new-message">

    <form action="" method="post" enctype="multipart/form-data">
        <a href="profile.php?username=<?php echo $_COOKIE['username']; ?>">
            <img class = "avatar-new-message"  src="data:image/jpeg;base64,<?php echo base64_encode($avatar); ?> " />
        </a>
        <label>
            <textarea name = "content" class = "message-content" placeholder="Message" rows="2" maxlength="240" required></textarea>
        </label>
        <span class = "Border" style="width: 80%;"></span>
        <div class = "ButtonPosition">
            <button class = "Tweeter" type = "submit" name = "submit">Envoyer</button>
        </div>

        <div class = "icons">
            <label for ="image">
                <img src="./images/image.png" class = "icon" alt = "Image">
            </label>

            <input type="file" id = "image" name = "image" class = "invisibleFile">

            <label>
                <img onclick="showMap()" src="./images/localisation.png" class ="icon" alt = "Localisation">
            </label>

            <label>
                <img onclick="openWindow('display-pet')" src="./images/pet.png" class ="icon" alt = "Animaux">
            </label>
        </form>


        <!-- Fenêtre flottante pour la localisation -->
        <div id="map-container" class="localisation-window">
            <div class="localisation-content">
                <h2 class = "window-title">Localisation</h2><div id="map"></div>
                <input type="text" class = "answer" id="search" placeholder="Rechercher une adresse" name = "localisation">
                <a href = '' class = "form-button" onclick="closeWindow('map-container')">OK</a>
            </div>
        </div>


        <div id="display-pet">
            <div class="pets-content">
                <span class="close" onclick="closeWindow('display-pet')">&times;</span>
                <h2 class = "window-title">Sélectionner animaux</h2>

                <?php
                $result = displayPets();
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="image-container">
                        <label for="<?php echo $row['id']?>">
                            <img class="pet-image" src="data:image/jpeg;base64,<?php echo base64_encode($row['avatar']); ?>" alt="Bouton parcourir">
                        </label>
                        <label class = "pet-name"><?php echo $row['nom']?></label>  <input class ="checkbox" type="checkbox" id="<?php echo $row['id']?>" name="animaux[]" value="<?php echo $row['id']?>">
                    </div>
                   <?php
                }?>
            </div>
        </div>

    </div>
</div>

</body>
</html>
