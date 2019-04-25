<?php
// ./composer.phar  require respect/validation

require_once "vendor/autoload.php";

use Respect\Validation\Validator as v;
use Respect\Validation\NestedValidationException as ex;

class Conexion{
    private $db;
    public function __construct($host='localhost',
                                $user='root',
                                $pass='',
                                $dbname='test'){
        $this->db = new mysqli($host,$user , $pass, $dbname);
        if($this->db->connect_errno > 0){
            $this->db=null;
        }else{
            //echo "Conectado a la BBDD<br/>";
        }
    }
    public function consulta($sql){
        if(!$result = $this->db->query($sql)){
            die('There was an error running the query [' . $this->db->error . ']');
        }
        $resultado=array();
        while($row = $result->fetch_assoc()){
            $resultado[]=$row;
        }
        return $resultado;
    }
    public function consultaPorID($id){
        $sql="Select * from usuarios where USERID=".$id;
        if(!$result = $this->db->query($sql)){
            die('There was an error running the query [' . $this->db->error . ']');
        }
        $resultado=array();
        while($row = $result->fetch_assoc()){
            $resultado[]=$row;
        }
        return $resultado;
    }
    public function deletePorID($id){
        $sql="Select * from usuarios where USERID=".$id;
        if(!$result = $this->db->query($sql)){
            die('There was an error running the query [' . $this->db->error . ']');
        }
        $resultado=array();
        while($row = $result->fetch_assoc()){
            $resultado[]=$row;
        }
        $sql="DELETE from usuarios where usuarios.USERID=".$id;
        if(!$result = $this->db->query($sql)){
            die('There was an error running the query [' . $this->db->error . ']');
        }
        /*$resultado=array();
        while($row = $result->fetch_assoc()){
            $resultado[]=$row;
        }
        */
        return $resultado;
    }
    public function modifyOne($id,$active){
        $update = "UPDATE `usuarios` SET `Active` = ".$active." WHERE `usuarios`.`USERID` = ".$id;

        //print $update."<br/>\n";
        if(!$result = $this->db->query($update)){
            die('There was an error running the query [' . $this->db->error . ']');
        }
    }
    public function insertOne($user){
        $sql="INSERT INTO `usuarios` 
        (`USERID`, `USERNAME`, `PASSWORD`, `EMAIL`,
            `ENCRYPTMETHOD`, `Active`) VALUES
        (1, '".$user['USERNAME']."', '".$user['PASSWORD']."', '".$user['EMAIL']."', '".$user['ENCRYPTMETHOD']."', '".$user['Active']."');";

        //print $sql;
        if(!$result = $this->db->query($sql)){
            die('There was an error running the query [' . $this->db->error . ']');
        }

        //printf("Affected rows (INSERT): %d<br/>\n", mysqli_affected_rows($this->db));
        $userid=$this->db->insert_id;
        //echo "Último ID: ".$this->db->insert_id."<br/>";
        $user['USERID']=$userid;
        unset($user['action']);
        return $user;
    }
    public function insert($user){
        $sql="INSERT INTO `usuarios` 
        (`USERID`, `USERNAME`, `PASSWORD`, `EMAIL`,
            `ENCRYPTMETHOD`, `Active`) VALUES
        (NULL, '".$user['USERNAME']."', '".$user['PASSWORD']."', '".$user['EMAIL']."', '".$user['ENCRYPTMETHOD']."', '".$user['Active']."');";

        //print $sql;
        if(!$result = $this->db->query($sql)){
            die('There was an error running the query [' . $this->db->error . ']');
        }

        //printf("Affected rows (INSERT): %d<br/>\n", mysqli_affected_rows($this->db));
        $userid=$this->db->insert_id;
        //echo "Último ID: ".$this->db->insert_id."<br/>";
        $user['USERID']=$userid;
        unset($user['action']);
        return $user;
    }
    public function destroy(){
        $this->db->close();
    }
}

$conexion=new Conexion();
if(isset($_REQUEST['action'])
    &&$_REQUEST['action']!=null
    &&$_REQUEST['action']!=""){
    $action=$_REQUEST['action'];
}else{
    $action="list";
}
switch ($action){
    case "list":
        $resultados=$conexion->consulta("Select * from usuarios");
        break;
    case "selectById":
        if(isset($_GET['id'])
            &&$_GET['id']!=null
            &&$_GET['id']!=""){
            $id=$_GET['id'];
        }else{
            $id=0;
        }
        $resultados=$conexion->consultaPorID($id);
        break;
    case "delete":
        if(isset($_GET['id'])
            &&$_GET['id']!=null
            &&$_GET['id']!=""){
            $id=$_GET['id'];
        }else{
            $id=0;
        }
        $resultados=$conexion->deletePorID($id);
        break;
    case "modify":
        if(isset($_GET['id'])
            &&$_GET['id']!=null
            &&$_GET['id']!=""
            &&isset($_GET['Active'])
            &&$_GET['Active']!=null
            &&$_GET['Active']!=""){
            $id=$_GET['id'];
            $active=$_GET['Active'];
        }else{
            $id=0;
            $active=0;
        }
        $resultados=$conexion->consultaPorID($id);
        $conexion->modifyOne($id,$active);
        break;
    case "addOne":

        if(isset($_GET['USERNAME'])
            &&$_GET['USERNAME']!=null
            &&$_GET['USERNAME']!=""){
            $user=$_GET;
            unset($_GET['action']);
        }else{
            $user="";
        }
        $resultados=$conexion->insertOne($user);
        break;
    case "add":
        if(isset($_GET['USERNAME'])
            &&$_GET['USERNAME']!=null
            &&$_GET['USERNAME']!=""){
            $user=$_GET;
            unset($_GET['action']);
        }else{
            $user="";
        }
        $resultados=[];
        /*
         * Validación mejorada
         *  http://localhost/ejemplos/ajax2.php?action=add&USERNAME=pepesan27&PASSWORD=sansdfga&EMAIL=p@p.com&Active=1&ENCRYPTMETHOD=none
         */
        if(isset($_GET['USERNAME'])&& isset($_GET['PASSWORD'])
            && isset($_GET['EMAIL'])&& isset($_GET['ENCRYPTMETHOD'])
            && isset($_GET['Active'])){
            try {

                $usernameValidation=v::alnum()->length(8,null)->notEmpty();
                $passwordValidation=v::alnum()->length(8,null)->notEmpty();
                $emailValidation=v::notEmpty()->Email();
                $encryptMethodValidation=v::notEmpty();
                $activeValidation=v::numeric();
                $usernameValidation->assert($_GET['USERNAME']);
                $passwordValidation->assert($_GET['PASSWORD']);
                $emailValidation->assert($_GET['EMAIL']);
                $encryptMethodValidation->assert($_GET['ENCRYPTMETHOD']);
                $activeValidation->assert($_GET['Active']);
                $resultados=$conexion->insert($user);
            } catch(NestedValidationException $exception) {
                $resultados['error']=true;
                $resultados['mensajes']=$exception->getFullMessage();
            } catch(Exception $e){
                $resultados['error']=true;
                $resultados['mensajes']=$e->getMessages();
            }
        }else{
            print "error";
            $resultados['error']=true;
            $resultados['mensajes']="Faltan Datos por enviar";
        }



        break;
    case "post":
        print_r($_REQUEST);
        echo "<br/>\n";
        $resultados=[];
        break;
}
print(json_encode($resultados));
echo "<br/>\n";
$conexion->destroy();
?>