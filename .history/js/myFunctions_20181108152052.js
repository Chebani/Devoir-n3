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
    alert($idRegion);
}


