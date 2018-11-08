function seConnecter() 

{
    
    $.ajax(
    {
        
        type:"post",
        url:"main/connexion",
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


