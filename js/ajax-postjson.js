$(document).ready(
    function (){
        console.log("cargada");
        $("#formu").validate({
            errorLabelContainer:$("#error"),
            rules:{
                "formu[USERNAME]": {
                    required:true,
                    minlength:8
                },
                "formu[PASSWORD]":{
                    "required":true,
                    minlength:8
                },
                "formu[EMAIL]":{
                    required:true,
                    email: true
                }
            },
            messages: {
                "formu[USERNAME]":{
                    required:"Se debe rellenar el nombre",
                    minlength:jQuery.validator.format("Se requiere un mínimo {0} caracteres para el nombre!")
                } ,
                "formu[PASSWORD]":{
                    required:"Se debe rellenar la contraseña",
                    minlength:jQuery.validator.format("Se requiere un mínimo {0} caracteres para la contraseña!")
                } ,
                "formu[EMAIL]":{
                    required:"El email es obligatorio",
                    email: "El email tiene que ser válido"
                }

            }

        });
        $("#formu").submit(
            function(event){
                event.preventDefault();
                console.log("coitus interruptus!");
                if($("#formu").valid()){
                    var objeto={};
                    objeto['action']="post";
                    objeto['USERNAME']=$("#username").val();
                    objeto['EMAIL']=$("#email").val();
                    objeto['PASSWORD']=$("#password").val();
                    objeto['Active']=0;
                    objeto['ENCRYPTMETHOD']="none";
                    console.log(objeto);
                    $.post( "ajax2.php",objeto,function (data) {

                        var item="<li id='" + data.USERID + "'>"+data.USERID+": " + data.USERNAME+ "</li>";
                        //console.log(data);

                        $("#resultados").html(item);
                    });
                }else{
                    //$("#error").html("<h2>Revise el Formulario</h2>");
                }
            }
        );
    }
);