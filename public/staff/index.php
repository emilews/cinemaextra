<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
    <div id="main-menu">
        <h2>Main Menu</h2>
        <ul>
            <li>
                <a href="subjects/index.php">Subjects</a>
            </li>
        </ul>
    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

<!-- Esto de abajo es de la practica 4 -->

<a href="index.php">Menu</a>

<a href="<?php echo 'index.php'; ?>"></a>