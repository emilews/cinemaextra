<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<?php $pages = ["Globe bank", "History", "Leadership", "Contact Us"]; //Declaramos un array con las paginas?>
<?php $headers = ["ID", "Position", "Visible", "Name","","",""]; //Declaramos los headers?> 

<div id="content">
    <h1>Pages</h1>
    
    <table style="width=100%;">
        <thead>
            <tr style="background-color=blue;">
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
                <td><a href="<?php echo 'index.php?id=1'; ?>">View</a></td>
                <td><a href="//">Edit</a></td>
                <td><a href="//">Delete</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>2</td>
                <td>true</td>
                <td><?php echo $pages[1]; ?></td>
                <td><a href="<?php echo 'index.php?id=2'; ?>">View</a></td>
                <td><a href="//">Edit</a></td>
                <td><a href="//">Delete</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>3</td>
                <td>true</td>
                <td><?php echo $pages[2]; ?></td>
                <td><a href="<?php echo 'index.php?id=3'; ?>">View</a></td>
                <td><a href="//">Edit</a></td>
                <td><a href="//">Delete</a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>4</td>
                <td>true</td>
                <td><?php echo $pages[3]; ?></td>
                <td><a href="<?php echo 'index.php?id=4'; ?>">View</a></td>
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

