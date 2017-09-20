<html>
<head>
    <title>Mysqli en PHP7</title>
</head>

<body>
<pre>
    -- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-09-2017 a las 09:21:09
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `USERID` int(11) NOT NULL,
  `USERNAME` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `ENCRYPTMETHOD` varchar(255) DEFAULT NULL,
  `Active` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`USERID`, `USERNAME`, `PASSWORD`, `EMAIL`, `ENCRYPTMETHOD`, `Active`) VALUES
(1, 'pepesan', NULL, 'pepesan@gmail.com', NULL, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`USERID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

</pre>

<?php

$host='localhost';
$user='root';
$pass='';
$dbname='test';
$db = new mysqli($host,$user , $pass, $dbname);

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}else{
    echo "Conectado a la BBDD";
}

/*
$sql = <<<SQL

CREATE TABLE Usuarios (
    USERID INT NOT NULL AUTO_INCREMENT,
  USERNAME VARCHAR(80) NOT NULL,
  display_name VARCHAR(50) NOT NULL,
  password CHAR(41) NOT NULL,
  PRIMARY KEY (user_id),
  UNIQUE INDEX (email)
) ENGINE=INNODB;
 
 

SQL;


 * CREATE TABLE UsersExtra (
    user_id INT NOT NULL,
  first_name VARCHAR(25) NOT NULL,
  last_name VARCHAR(25) NOT NULL,
  address VARCHAR(80) NOT NULL,
  city VARCHAR(30) NOT NULL,
  province CHAR(2) NOT NULL,
  postcode CHAR(7) NOT NULL,
  interests TEXT NULL,
  bio TEXT NULL,
  signature TEXT NULL,
  skills TEXT NULL,
  PRIMARY KEY (user_id),
  FULLTEXT KEY (interests, skills)
) ENGINE=MyISAM;



if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

while($row = $result->fetch_assoc()){
    print_r($row);
    echo '<br />';
}
 */
$sql = <<<SQL
    SELECT *
    FROM `usuarios`
    WHERE `Active` = 0 
SQL;
echo "<br/>\n";
if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

while($row = $result->fetch_assoc()){
    echo 'usuario: '.$row['USERNAME'] . '<br />';
}
echo 'Total results: ' . $result->num_rows."<br/>";
$result->free();
$statement = $db->prepare("SELECT `USERID` FROM `Usuarios` WHERE `USERNAME` = ?");
$name = 'pepesan';
$statement->bind_param('s', $name);
$statement->execute();
$statement->bind_result($returned_id);
while($statement->fetch()){
    echo "USERID: ".$returned_id . '<br />';
}
$statement->free_result();



$db->autocommit(FALSE);
$db->commit();
//$db->rollback();
$db->autocommit(TRUE);
$sql = <<<SQL
INSERT INTO `usuarios` 
  (`USERID`, `USERNAME`, `PASSWORD`, `EMAIL`, 
  `ENCRYPTMETHOD`, `Active`) VALUES 
  (NULL, 'juan', 'juan', 'juan@gmail.com', 'md5', '1');
SQL;
if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

printf("Affected rows (INSERT): %d<br/>\n", mysqli_affected_rows($db));
$userid=$db->insert_id;
echo "Último ID: ".$db->insert_id."<br/>";

$update = <<<UPDATE
UPDATE `usuarios` SET `Active` = '0' WHERE `usuarios`.`USERID` = $userid;
UPDATE;

print $update."<br/>\n";
if(!$result = $db->query($update)){
    die('There was an error running the query [' . $db->error . ']');
}

printf("Affected rows (UPDATE): %d<br/>\n", mysqli_affected_rows($db));

$sql = <<<SQL
DELETE FROM `usuarios` WHERE `usuarios`.`USERID` = $userid;
SQL;
print $sql."<br/>";

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

printf("Affected rows (DELETE): %d<br/>\n", mysqli_affected_rows($db));

$sql = <<<SQL
    SELECT *
    FROM `usuarios`;
SQL;
echo "<br/>\n";
if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

while($row = $result->fetch_assoc()){
    foreach($row as $indice => $valor) {
        print "$indice => $valor<br/> ";
    }
}
echo 'Total results: ' . $result->num_rows."<br/>";

echo "<h3>Metadatos</h3>";
var_dump($result->fetch_fields());

$db->close();
?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>