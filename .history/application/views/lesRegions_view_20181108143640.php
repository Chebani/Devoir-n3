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
        $("#connexion").click
        (function (){
            seConnecter();
         });
        
    });
    </script>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <h1>Devoir n°3</h1><br><br>
            <h2>Votre nom :</h2><br><br>
            <input type="text" id="nom"><br><br>
            <input type="button" value="Connexion" id="connexion">
        </div>
    </div>
    
</body>
</html>