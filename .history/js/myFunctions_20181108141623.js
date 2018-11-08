function seConnecter() 

{
    
    $.ajax(
    {
        
        type:"post",
        url:"techdays/insererLeMetier",
        data:"idMetier="+$('#nom').val(),
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


