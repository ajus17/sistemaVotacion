<?php
require_once "header.php";

require_once "models/DatabaseLayer.php";

$category=$_REQUEST['categorias'];

$db = DatabaseLayer::getConnection("MySqlProvider");

$registros = $db->execute("select * from proyectos where categorias_codCategoria= ?",array($category));




?>






<?php
require_once "footer.php";
 ?>
