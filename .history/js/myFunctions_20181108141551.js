function seConnecter($idMetier) 

{
    
    $.ajax(
    {
        
        type:"post",
        url:"techdays/insererLeMetier",
        data:"idMetier="+$idMetier+"&idConference="+$('#idConference').val(),
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


