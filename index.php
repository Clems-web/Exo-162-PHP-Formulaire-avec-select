<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <form method="get" action="user.php">
        <div>
            <label for="name">Prénom</label>
            <input type="text" name="user-name" id="name">
        </div>
        <div>
            <label for="firstname">Nom</label>
            <input type="text" name="user-firstname" id="firstname">
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>
    <form method="post" action="user.php">
        <div>
            <label for="name">Prénom</label>
            <input type="text" name="user-name" id="name">
        </div>
        <div>
            <label for="firstname">Nom</label>
            <input type="text" name="user-firstname" id="firstname">
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>
    <?php
    if (isset($_POST["user-gender"]) && isset($_POST["user-name"]) && isset($_POST["user-firstname"]) && isset($_FILES["user-file"])) {
        echo $_POST["user-gender"] . " " . $_POST["user-name"] . " " . $_POST["user-firstname"] . " " . $_FILES["user-file"]["name"] . " " . $_FILES["user-file"]["type"];
    }else{?>
        <form method="post" action="index.php" enctype="multipart/form-data">
            <div>
                <label for="gender">Civilité</label>
                <select name="user-gender" id="gender">
                    <option value="Mr.">Mr.</option>
                    <option value="Mme.">Mme.</option>
                </select>
            </div>
            <div>
                <label for="name">Prénom</label>
                <input type="text" name="user-name" id="name">
            </div>
            <div>
                <label for="firstname">Nom</label>
                <input type="text" name="user-firstname" id="firstname">
            </div>
            <div>
                <label for="id-fichier">Choisisez un type de fichier</label>
                <input type="file" name="user-file" id="id-fichier">
            </div>
            <div>
                <input type="submit" value="Envoyer">
            </div>
        </form>
    <?php } ?>
</body>
</html>