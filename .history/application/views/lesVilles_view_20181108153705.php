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
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <?php foreach ($lesVilles as $uneVilles) {?>
                <input type="checkbox" onclick="afficherLesVilles($(this).val())" value="<?php echo $uneVille->idVille ?>"><?php echo $uneVille->nomVille ?>&nbsp;&nbsp;<?php echo $uneVille->scoreVille ?><br><br>
            <?php }?>
        </div>
    </div>
    
</body>
</html>