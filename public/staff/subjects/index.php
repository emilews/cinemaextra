<?php require_once('../../../private/initialize.php'); ?>

<?php
  $subject_set = find_all_subjects();
  
?>

<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<div id="content">
  <div class="subjects listing">
    <h1 style="text-align: center">Cartelera</h1>
    <?php 
      if($_SESSION['user_type']=='admin'){
        echo '<div style="text-align: center" class="actions"><a  class="action" href="'. strval(url_for('/staff/subjects/new.php')). '">Agregar Pelicula</a></div>';
      }
    ?>
    


    <div class="listcontent">
      <div class="buttoncontainer" id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')"> Todos</button>
        <button class="btn" onclick="filterSelection('Accion')"> Accion</button>
      <button class="btn" onclick="filterSelection('Animada')"> Animada</button>
        <button class="btn" onclick="filterSelection('Comedia')"> Comedia</button>
        <button class="btn" onclick="filterSelection('Drama')"> Drama</button>
      <button class="btn" onclick="filterSelection('Thriller')"> Thriller</button>
      
      </div>
    </div>
    <div >
      <table cellspacing = "0" cellspacing = "0">
          <?php while($subject = mysqli_fetch_assoc($subject_set)) { ?>
            <tr><td>
            <div class="column <?php echo h($subject['genero'])?>">
              <table class="list">
                <tr>
                  <th>Imagen</th>
                  <th>Contenido</th>
                </tr>
          
                <tr>
                <td class="tdimg"><img src="<?php echo url_for("/images/".$subject['imagen']); ?>"width="200" height="300"></td> 
            
                  <td>
                    <?php echo $subject['director']; ?></br>
                    <?php echo $subject['nombre_pelicula']; ?></br>
                    <?php echo $subject['duracion']; ?></br>
                    <?php echo $subject['horarios']; ?></br>
                    <?php echo $subject['genero']; ?></br>
                    <?php echo $subject['descripcion']; ?></br>
                    <a class="action" href="<?php echo url_for('/staff/subjects/show.php?id=' . u($subject['id_pelicula'])); ?>">Click para mas información</a></br>
                    <?php
                      if($_SESSION['user_type']=='admin'){
                        echo '<a class="action" href="'. strval(url_for('/staff/subjects/edit.php?id=' . u($subject['id_pelicula']))).'">Edit</a></br>';
                        echo '<a class="action" href="'. strval(url_for('/staff/subjects/delete.php?id=' . u($subject['id_pelicula']))).'">Delete</a></br>';
                      }
                    ?>
                    
                  </td>
                </tr>
              </table>
            </tr></td>
          </div>
        <?php } ?>
      </table>
      <?php
      mysqli_free_result($subject_set);
      ?>
    
    
    </div>
    </div>
  	

</div>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
