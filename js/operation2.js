/*
var ajaxxx  = new XMLHttpRequest();

var activation = document.getElementById('valider');

activation.addEventListener('click', function (e)
{
    ajaxxx.onreadystatechange = function()
    {
        document.getElementById('reponse').innerHTML="Chargement.....";
        if (this.readyState === 4)
        {
            document.getElementById('reponse').innerHTML=this.responseText;
        }
    };
    ajaxxx.open('GET','pages/operation2.php',true);
    ajaxxx.send();
    e.preventDefault();
},false);
*/