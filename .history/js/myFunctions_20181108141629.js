function seConnecter() 

{
    
    $.ajax(
    {
        
        type:"post",
        url:"techdays/insererLeMetier",
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


