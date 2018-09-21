var ajaxxx  = new XMLHttpRequest();
var activation = document.getElementById('subit');
var tabbble= document.getElementById('Tabble');

activation.addEventListener('click', function (e)
{
    ajaxxx.onreadystatechange = function()
    {
        document.getElementById('resultat').innerHTML="Chargement";
        if (this.readyState == 4)
        {
            document.getElementById('resultat').innerHTML=this.responseText;
        }
    };
    ajaxxx.open('GET','pages/operation.php?table='+tabbble.selectedIndex,true);
    ajaxxx.send();
    e.preventDefault();
},false);
