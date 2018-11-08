function seConnecter() 

{
    
    $.ajax(
    {
        
        type:"post",
        url:"Main/connexion",
        data:"nom="+$('#nom').val(),
        success:function(data)
        {
            $("#lesRegions").empty();
            $("#lesRegions").append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );

}

function afficherLesVilles($idRegion){
    $.ajax(
        {
            
            type:"post",
            url:"Main/afficherVilles",
            data:"idRegion="+$idRegion,
            success:function(data)
            {
                $("#lesVilles").empty();
                $("#lesVilles").append(data);
            },
            error:function()
            {
                alert('Erreur SQL');
            }
        }
        );
}

function ajouterPoints($points){
    
    alert($('#region').val());
    alert($("img[name='idVille']").val());
    alert($points);
//    $.ajax(
//        {
//            
//            type:"post",
 //           url:"Main/ajouterLesPoints",
//            data:"points="+$points+"&region="+$('#region').val()+"&ville="+$('#idVille').val(),
 //           success:function(data)
 //           {
 //               alert("Les points ont bien été ajoutés !")
 //           },
 //           error:function()
//            {
//                alert('Erreur SQL');
 //           }
 //       }
 //       );
}


