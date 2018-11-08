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
            $("#lesVilles").empty();
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

function ajouterPoints(){
    
    $.ajax(
        {
            
            type:"post",
            url:"Main/ajouterLesPoints",
           data:"region="+$('#region').val(),
           success:function(data)
          {
               alert("Les points ont bien été ajoutés !")
          },
          error:function()
           {
               alert('Erreur SQL');
           }
       }
     );

}


