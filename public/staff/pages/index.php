<!-- <?php require_once('../../../private/initialize.php'); ?>

<?php
  $subjects = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'],
  ];
?>

<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="subjects listing">
    <h1>Subjects</h1>

    <div class="actions">
      <a class="action" href="">Create New Subject</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php foreach($subjects as $subject) { ?>
        <tr>
          <td><?php echo $subject['id']; ?></td>
          <td><?php echo $subject['position']; ?></td>
          <td><?php echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
    	    <td><?php echo $subject['menu_name']; ?></td>
          <td><a class="action" href="<?php echo url_for('staff/subjects/show.php?id='); ?>">View</a></td>
          <td><a class="action" href="">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?> -->



<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<?php $pages = ["Globe bank", "History", "Leadership", "Contact Us"]; //Declaramos un array con las paginas?>
<?php $headers = ["ID", "Position", "Visible", "Name","","",""]; //Declaramos los headers?> 

<style>
    #tabla{
        width:900px;
        text-align:center;
    }
    #tabla-thead{
        background-color:blue;
        color:#ffffff;
    }
</style>

<div id="content">
    <h1>Pages</h1>
    
    <table id="tabla">
        <thead id="tabla-thead">
            <tr>
                <?php 
                    for ($i=0; $i <= count($headers) - 1; $i++) { 
                        echo '<th>'.$headers[$i].'</th>';
                    }
                ?> 
            </tr>         
        </thead>
        <tbody>
            <tr>
                <td name="id-1">1</td>
                <td>1</td>
                <td>true</td>
                <td><?php echo $pages[0]; ?></td>
                <td><a href="<?php echo '../pages/show.php?id=1';?>">View</a></td>
                <td><a href="//">Edit</a></td>
                <td><a href="//">Delete</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>2</td>
                <td>true</td>
                <td><?php echo $pages[1]; ?></td>
                <td><a href='<?php echo '../pages/show.php?id=2';?>'>View</a></td>
                <td><a href="//">Edit</a></td>
                <td><a href="//">Delete</a></td>
            </tr>
            <!-- <a href="../public/operaciones/suma.php?numero='.($i + 1).'">Suma</a></td>'  -->
            <tr>
                <td>3</td>
                <td>3</td>
                <td>true</td>
                <td><?php echo $pages[2]; ?></td>
                <td><a href="<?php echo '../pages/show.php?id=3';?>">View</a></td>
                <td><a href="//">Edit</a></td>
                <td><a href="//">Delete</a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>4</td>
                <td>true</td>
                <td><?php echo $pages[3]; ?></td>
                <td><a href="<?php echo '../pages/show.php?id=4';?>">View</a></td>
                <td><a href="//">Edit</a></td>
                <td><a href="//">Delete</a></td>
            </tr>


            <!-- <?php
                for ($i=0; $i <= count($pages) - 1; $i++) { 
                    echo '<tr><td>'.$pages[$i].'</td></tr>';
                }
            ?> -->
        </tbody>
    </table>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

