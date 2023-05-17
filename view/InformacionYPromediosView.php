<div class="contanainer-mostrar-materia">

  <div>Nota promedio =>

  <?php  
  $contador_materias =0;
  $nota_total=0;
  while($row = mysqli_fetch_assoc($result_materias)) {  
  $contador_materias+=1;
  $nota_total+=$row['nota_materia'];

  } 
  echo $nota_total/$contador_materias;
  ?>
  </div>

</div>