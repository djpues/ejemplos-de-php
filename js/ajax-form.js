$(document).ready(
    function (){
        console.log("cargada");
        $("#formu").validate({
            errorLabelContainer:$("#error"),
            rules:{
                "formu[USERNAME]": "required",
                "formu[PASSWORD]":"required",
                "formu[EMAIL]":"required"
            },
            messages: {
                "formu[USERNAME]": "Se debe rellenar el nombre",
                "formu[PASSWORD]":"La contraseña es obligatoria",
                "formu[EMAIL]":"El email es obligatorio"

            }

        });
        $("#formu").submit(
            function(event){
                event.preventDefault();
                console.log("coitus interruptus!");
                if($("#formu").valid()){
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
                }else{
                    //$("#error").html("<h2>Revise el Formulario</h2>");
                }
            }
        );
    }
);