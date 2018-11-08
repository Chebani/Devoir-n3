function seConnecter() 

{
    
    $.ajax(
    {
        
        type:"post",
        url:"main/connexion",
        data:"nom="+$('#nom').val(),
        success:function(data)
        {
            alert ("Les metiers ont bien été inserés !");
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );

}


