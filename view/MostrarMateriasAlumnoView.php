<div class="contanainer-mostrar-materia">

  <div>Id materia</div>
  <div>Nota materia</div>

  <?php  while($row = mysqli_fetch_assoc($result_materias)) { 
    //echo implode("----",$row);?>  
            <div><?php echo $row['id_materia']; ?></div>
            <div><?php echo $row['nota_materia']; ?></div>
  <?php } ?>
</div>
<!--
<form action="index.php" method="get">
    Nombre: <input type="text" name="nombre"><br>
    id: <input type="text" name="id"><br>
    <input type="submit" value="Enviar" >
</form>
//isset($_GET["nombre"]) ? print $_GET["nombre"] : ""; 
//isset($_GET["email"]) ? print $_GET["email"] : ""; 
  -->
