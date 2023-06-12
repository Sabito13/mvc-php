<div class="contanainer-mostrar-materia-promedio">

  <?php  
  $contador_materias =0;
  $nota_total=0;
  $contador_materias_mas_siete =0;
  while($row = mysqli_fetch_assoc($result_materias)) {  
  $contador_materias+=1;
  $nota_total+=$row['nota_materia'];


  if($row['nota_materia'] >= 7){
    $contador_materias_mas_siete+=1;
  }
  } 
  ?>
  
  <div class="materia-promedio">Nota promedio => <?php echo $nota_total/$contador_materias;?></div>
  <div class="materia-mayor">Materias con nota mayor o igual a 7 => <?php echo $contador_materias_mas_siete;?></div>


</div>
