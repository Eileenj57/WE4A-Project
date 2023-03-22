<!DOCTYPE html>

<html lang = "fr">
<form  action="" method="post" enctype="multipart/form-data">

    <div class="image-container">
        <label for="avatar_pet">
            <img class="image-modification" src="data:image/jpeg;base64,<?php echo base64_encode($avatar); ?>" alt="Bouton parcourir">
            <div class="overlay"></div>
        </label>
    </div>

    <input id="avatar_pet" class = "invisibleFile" type="file" name = "avatar_pet">
    <div>
        <input name = "id" class = "answer" placeholder="Identifiant de l'animal*">
    </div>
    <div>
        <input name = "nom" class = "answer" placeholder="Nom de l'animal">
    </div>
    <div>
        <input type ="number" name = "age" class = "answer" placeholder="Age">
    </div>
    <div>
        <input type ="text" name = "species" class = "answer" placeholder="Espèce">
    </div>
    <div>
        <input name = "bio" class = "answer" placeholder="Bio">
    </div>
    <div>
        <label for="gender"></label>
        <label>
            <input type="radio" name="gender" value="masculin" required>
            Masculin
        </label>
        <label>
            <input type="radio" name="gender" value="feminin">
            Féminin
        </label>
    </div>
    <br>
    <div class="formbutton">
        <button class = "form-button" type="submit" name = "add-pet">Ajouter l'animal</button>
    </div>

    <span>* L'identifiant de l'animal correspond au nom que vous utiliserez pour l'identifier dans un message</span>
</form>
</html>