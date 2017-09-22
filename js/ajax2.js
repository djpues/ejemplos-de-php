$(document).ready(
    function(){
        //console.log("cargada");
        $("#getItem").click(
            function(){
                $("#resultados").html("Cargando...");
                var objeto={
                    "action":"selectById",
                    "id":1
                };
                $.getJSON( "ajax2.php",objeto,function (data) {

                    var item=[];
                    $.each( data, function( key, val ) {
                        item.push( "<li id='" + key + "'>" + val.USERID+" : "+val.USERNAME + "</li>" );
                        console.log(val);
                    });
                    $("#resultados").html(item);
                });
            }
        );
        $("#getAll").click(
            function(){
                $("#resultados").html("Cargando...");
                var objeto={"action":"list"};
                $.getJSON( "ajax2.php",objeto,function (data) {

                    var item=[];
                    $.each( data, function( key, val ) {
                        item.push( "<li id='" + key + "'>" + val.USERID+" : "+val.USERNAME + "</li>" );
                        console.log(val);
                    });
                    $("#resultados").html(item);
                });
            }
        );
        $("#addOne").click(
            function(){
                $("#resultados").html("Cargando...");
                var objeto={"action":"addOne","USERNAME":"pepe","PASSWORD":"san","EMAIL":"p@p.com","ENCRYPTMETHOD":'none',"Active":1};
                $.getJSON( "ajax2.php",objeto,function (data) {

                    var item="<li id='" + data.USERID + "'>"+data.USERID+": " + data.USERNAME+ "</li>";
                    console.log(data);

                    $("#resultados").html(item);
                });
            }
        );
        $("#deleteOne").click(
            function(){
                $("#resultados").html("Cargando...");
                var objeto={"action":"delete","id":1};
                $.getJSON( "ajax2.php",objeto,function (data) {

                    var item=[];
                    $.each( data, function( key, val ) {
                        item.push( "<li id='" + key + "'>" + val.USERID+" : "+val.USERNAME + "</li>" );
                        console.log(val);
                    });
                    $("#resultados").html(item);
                });
            }
        );
        $("#modifyOne").click(
            function(){
                $("#resultados").html("Cargando...");
                var objeto={"action":"modify","id":1,"Active":0};
                $.getJSON( "ajax2.php",objeto,function (data) {

                    var item=[];
                    $.each( data, function( key, val ) {
                        item.push( "<li id='" + key + "'>" + val.USERID+" : "+val.USERNAME + "</li>" );
                        console.log(val);
                    });
                    $("#resultados").html(item);
                });
            }
        );
    }
);