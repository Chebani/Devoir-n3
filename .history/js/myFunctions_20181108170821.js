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

function ajouterPoints($points){
    
    alert($('#region').val());
    alert($points);  
    alert($("input[name='idVille']").val());

}


