<?php

require_once 'validadors.php';

$nom = isset($_REQUEST['nom']) ? $_REQUEST['nom'] : null;
$cognom = isset($_REQUEST['cognom']) ? $_REQUEST['cognom'] : null;
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
$tlf = isset($_REQUEST['tlf']) ? $_REQUEST['tlf'] : null;
$sexe = isset($_REQUEST['sexe']) ? $_REQUEST['sexe'] : null;
$idioma = isset($_REQUEST['idiom']) ? $_REQUEST['idiom'] : null;
$carrer = isset($_REQUEST['carrer']) ? $_REQUEST['carrer'] : null;
$num = isset($_REQUEST['num']) ? $_REQUEST['num'] : null;
$city = isset($_REQUEST['city']) ? $_REQUEST['city'] : null;
$prov = isset($_REQUEST['prov']) ? $_REQUEST['prov'] : null;
$post = isset($_REQUEST['post']) ? $_REQUEST['post'] : null;
$pais = isset($_REQUEST['pais']) ? $_REQUEST['pais'] : null;
$area = isset($_REQUEST['info']) ? $_REQUEST['info'] : null;

$errores = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (validarNoBuit($tlf)) {
        $errores["tlf"] = 'El camp telefon no pot estar buit.';
    }
    if (validarNoBuit($carrer)) {
        $errores["carrer"] = 'El camp carrer no pot estar buit.';
    }
    if (validarNoBuit($num)) {
        $errores["num"] = 'El camp numero no pot estar buit.';
    }
    if (validarNoBuit($prov)) {
        $errores["prov"] = 'El camp provincia no pot estar buit.';
    }
    if (validarNoBuit($post)) {
        $errores["post"] = 'El camp codi postal no pot estar buit.';
    }
    if (validarNoBuit($sexe)) {
        $errores["sexe"] = 'No has selecionat cap opcio.';
    }
    if (validarLlargada($nom)) {
        $errores["nom"] = 'El camp nombre a de tenir almeny 3 .';
    }
    if (validarLlargada($cognom)) {
        $errores["cognom"] = 'El camp cognom a de tenir almeny 3 .';
    }
    if (validarNoNum($nom)) {
        $errores["nom"] = 'El camp nombre no pot contenir cap numero.';
    }
    if (validarNoNum($cognom)) {
        $errores["cognom"] = 'El camp cognom no pot contenir cap numero.';
    }
    if (validarNoNum($carrer)) {
        $errores["carrer"] = 'El camp carrer no pot contenir cap numero.';
    }
    if (validarNoNum($city)) {
        $errores["city"] = 'El camp ciutat no pot contenir cap numero.';
    }
    if (validarNoLetra($post)) {
        $errores["post"] = 'El camp codi postal no pot contenir cap lletra.';
    }
    if (validarLlargada($city)) {
        $errores["city"] = 'El camp ciutat ha de contenir mes de 5 caracters';
    }
    if (validarEmail($email)) {
        $errores["email"] = 'El camp email es incorrecte.';
    }
    if (validarProvincia($prov)) {
        $errores["prov"] = 'El camp provincia es erroni.';
    }
}
 
?>
<html>
<head>
   <meta charset="utf-8">
   <title>Practica 5 - Validació de formularis</title>
   <link href="prueba.css"
      rel="stylesheet" type="text/css">
</head>

<body>
   <h1>Validació de formularis</h1>
              
<form action="GET.php" method="POST">
    <div class="row">
        <div class="col-25">
            <label for="fname">Nom:</label>
        </div>
        <div class="col-75">
            <?php if ($errores && isset($errores["nom"])) { ?>
            <p style="color:red;"><?php echo $errores["nom"]; ?></p>
            <?php } ?>
            <input type="text" name="nom" placeholder="nom" value="<?php echo $nom ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="fname">Cognom:</label>
        </div>
        <div class="col-75">
            <?php if ($errores && isset($errores["cognom"])) { ?>
                <p style="color:red;"><?php echo $errores["cognom"]; ?></p>
            <?php } ?>
            <input type="text" name="cognom" placeholder="cognom" value="<?php echo $cognom ?>"><br><br>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="fname">Email:</label>
        </div>
        <div class="col-75">
            <?php if ($errores && isset($errores["email"])) { ?>
                <p style="color:red;"><?php echo $errores["email"]; ?></p>
            <?php } ?>
            <input type="text" name="email" placeholder="Email" value="<?php echo $email ?>"><br><br>
        </div>
    </div>    
    <div class="row">
        <div class="col-25">
            <label for="fname">Telefon:</label>
        </div>
        <div class="col-75">
            <?php if ($errores && isset($errores["tlf"])) { ?>
                <p style="color:red;"><?php echo $errores["tlf"]; ?></p>
            <?php } ?>
            <input type="tel" name="tlf" placeholder="#########" pattern="[0-9]{9}" value="<?php echo $tlf ?>"><br><br>
        </div>
    </div>
        
    Sexe:<br>
    <?php if ($errores && isset($errores["sexe"])) { ?>
        <p style="color:red;"><?php echo $errores["sexe"]; ?></p>
    <?php } ?>
    <input type="radio" value="Femeni" name="sexe" value="<?php $sexe ?>">Femeni<br>
    <input type="radio" value="Masculi" name="sexe" value="<?php $sexe ?>">Masculi<br>
    <input type="radio" value="No contesta" name="sexe" value="<?php $sexe ?>">No contesta<br><br>

    Idioma:
    <?php if ($errores && isset($errores["idiom"])) { ?>
        <p style="color:red;"><?php echo $errores["idiom"]; ?></p>
    <?php } ?>
    <select name="idioma">
        <option>Escull</option>
        <option value="español" name="idiom">Español</option>
        <option value="Ingles" name="idiom">Ingles</option>
        <option value="Catalan" name="idiom">Catalan</option>
    </select><br><br>

    <div class="row">
        <div class="col-25">
            <label for="fname">Adreça:</label>
        </div>
        <div class="col-75">
            <?php if ($errores && isset($errores["carrer"])) { ?>
                <p style="color:red;"><?php echo $errores["carrer"]; ?></p>
            <?php } ?>
            <input type="text" name="carrer" placeholder="Carrer" value="<?php echo $carrer ?>">
            <?php if ($errores && isset($errores["num"])) { ?>
                <p style="color:red;"><?php echo $errores["num"]; ?></p>
            <?php } ?>
            <input type="text" name="num" placeholder="Numero" value="<?php echo $num ?>"><br>

            <?php if ($errores && isset($errores["city"])) { ?>
                <p style="color:red;"><?php echo $errores["city"]; ?></p>
            <?php } ?>
            <input type="text" name="city" placeholder="Ciutat" value="<?php echo $city ?>">

            <?php if ($errores && isset($errores["prov"])) { ?>
                <p style="color:red;"><?php echo $errores["prov"]; ?></p>
            <?php } ?>
            <input type="text" name="prov" placeholder="Provincia" value="<?php echo $prov ?>"><br>

            <?php if ($errores && isset($errores["post"])) { ?>
                <p style="color:red;"><?php echo $errores["post"]; ?></p>
            <?php } ?>
            <input type="text" name="post" placeholder="Codi postal" value="<?php echo $post ?>"><br><br>
        </div>
    </div> 

    <?php if ($errores && isset($errores["pais"])) { ?>
        <p style="color:red;"><?php echo $errores["pais"]; ?></p>
    <?php } ?>
    Pais:
    <select name="pais">
        <option value="españa" name="pais">España</option>
        <option value="catalunya" name="pais">Catalunya</option>
        <option value="francia" name="pais">Francia</option>
        <option value="andorra" name="pais">Andorra</option>
        <option value="italia" name="pais">Italia</option>
        <option value="australia" name="pais">australia</option>
        <option value="españa" name="pais">España</option>
        <option value="españa" name="pais">España</option>
    </select><br><br>
    

    Informació de Més:<br>
    <textarea placeholder="Misatge..." name="info" value="<?php echo $info ?>"></textarea><br><br>
    <input type="submit" value="submit"><br><br>
</form>

</body>

</html>
