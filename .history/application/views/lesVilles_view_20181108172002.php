<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='jQuery/jquery-3.1.1.js'></script>
    <script src='js/myFunctions.js'></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Les regions</title>
    <script>
    $(document).ready(function()
    {
        $("#ajoutPoints").click
        (function (){
                ajouterPoints();
         });
        
    });
    </script>
</head>
<body>
    <div class="container-fluid">
    <h1>Les villes</h1>
        <div class="container">
            <?php foreach ($lesVilles as $uneVille) {?>
                <input type="checkbox" name="idVille" value="<?php echo $uneVille->idVille ?>" alt="5"><?php echo $uneVille->nomVille ?>&nbsp;&nbsp;<?php echo $uneVille->scoreVille ?><br><br>
            <?php }?>
        </div>
        <input type="button" id="ajoutPoints" value="+ 5 points" id="ajouter"><br><br>
        <input type="hidden" id="region" value="<?php echo $idRegion[0] ?>" id="ajouter">
    </div>
    
</body>
</html>