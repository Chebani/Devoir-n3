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
            <select name="" id="">
            <?php foreach ($lesRegions as $unRegion) {?>
                <option value="<?php echo $unRegion->idRegion ?>"><?php echo $unRegion->nomRegion ?>&nbsp;&nbsp;<?php echo $unRegion->scoreRegion ?></option>
            <?php }?>
            </select>
        </div>
    </div>
    
</body>
</html>