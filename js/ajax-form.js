$(document).ready(
    function (){
        console.log("cargada");
        $("#formu").submit(
            function(event){
                event.preventDefault();
                console.log("coitus interruptus!");
                var objeto={};
                objeto['action']="add";
                objeto['USERNAME']=$("#username").val();
                objeto['EMAIL']=$("#email").val();
                objeto['PASSWORD']=$("#password").val();
                objeto['Active']=0;
                objeto['ENCRYPTMETHOD']="none";
                console.log(objeto);
                $.getJSON( "ajax2.php",objeto,function (data) {

                    var item="<li id='" + data.USERID + "'>"+data.USERID+": " + data.USERNAME+ "</li>";
                    console.log(data);

                    $("#resultados").html(item);
                });
            }
        );
    }
);