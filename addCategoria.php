<?php
require_once "header.php";

require_once "models/DatabaseLayer.php";

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
   <legend class="card rounded-0"><h3>Agregar categorias de concursos</h3></legend>

<div>
  
<label><h6>Nombre de la categoría:</h6></label>
<input type="text" name="ncategoria" class="form-control" required>

</div>
<p></p>
<div>
  
  <input type="submit" name="enviar" value="Guardar categoría" class="btn btn-outline-primary">

</div>



 </fieldset>
</form>

</div>

<?php
require_once "footer.php";
 ?>
