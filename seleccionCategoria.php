<?php
require_once "header.php";
require_once "models/DatabaseLayer.php";



?>

<div class="form-group">

<form name="frmCategoria" action="votacion.php" method="post">

 <fieldset class="container">
   <legend class="card rounded-0"><h3>Categorias de concursos</h3></legend>

   <p></p>
<p></p>
<p></p>

<div>

<label><h5>Categorías de Concursos</h5></label>

<select name="categorias" class="custom-select" required>

<option value="">Seleccione la categoría del concurso</option>

<?php

$db = DatabaseLayer::getConnection("MySqlProvider");

$registros = $db->execute("select * from categorias");

if (count($registros)!=0) {

	for ($i=0; $i <count($registros); $i++) {

		echo "<option value='".$registros[$i]['codCategoria']."'>".$registros[$i]["descripcionCategoria"]."</option>";


		}
}


?>



</select>



</div>
<p></p>
<div>

  <input type="submit" name="enviar" value="Cargar proyectos" class="btn btn-outline-primary">

</div>



 </fieldset>
</form>

</div>




<?php
require_once "footer.php";
 ?>
