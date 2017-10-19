<?php
require_once "header.php";

require_once "models/DatabaseLayer.php";

require_once "headerp.php";

if (!empty($_POST))
{

$cate=$_POST['ncategoria'];

$db = DatabaseLayer::getConnection("MySqlProvider"); 

$db->execute("insert into categorias(descripcionCategoria) values (?)",array($cate));

echo "<script type='text/javascript'>
  alert('Categoría Creada');
</script>"; 


} 


?>

<div class="form-group">

<form name="frmCategoria" action="addCategoria.php" method="post">

<p></p>
  
 <fieldset class="container">
   <h2>Agregar Categoria</h2>
 <br />

<div class="form-group">
  
	<label class="control-label col-sm-2">Nombre de la categoría</label>

	<div class="col-sm-10">
	<input type="text" name="ncategoria" class="form-control" required>
	</div>

</div>
<p></p>
 <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
  
  <input type="submit" name="enviar" value="Guardar categoría" class="btn btn-outline-primary">

  </div>

</div>



 </fieldset>
</form>

</div>

<?php
require_once "footer.php";
 ?>
