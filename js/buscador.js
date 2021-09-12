var conc = new XMLHttpRequest();
conc.open('GET','buscador.php');
conc.onload = function(){
    if(conc.status==200){
        var json = JSON.parse(conc.responseText);
        //console.log(conc.responseText);
        var template ='';
        json.map(function(data){
            template +=' <h2>${data.Ciudad}</h2>';
            return template;
        });
        console.log(template);
        document.getElementById('lista').innerHTML= template;
    }else{
        console.log("error"+conc.status)
    }
}
conc.send();