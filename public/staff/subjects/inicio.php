<?php require_once('../../../private/initialize.php'); ?>



<?php $page_title = 'CinemaExtra!'; ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>
<br>
<br>
<br>
<br>
<br>
<div id="content">
  <?php
    if($_SESSION['user']=='guest'||$_SESSION['user']==''){
      echo '<div class="box login-box"><h5>Unetenos ahora a Movie Nights!</h5><br><h5 class="box login-button"><a href="'. strval(url_for('./staff/subjects/login_new.php')) .'">Inicia Sesion!</a></h5></div>';
    }
  ?>
<body>
<div align="center"><h1>¡En nuestra cartelera!</h1></div>
<div id="carrusel">
    <a href="#" class="left-arrow"><img src="<?php echo url_for('/images/left.png'); ?>"width="150" height="90"></a>
    <a href="#" class="right-arrow"><img src="<?php echo url_for('/images/right.png'); ?>"width="140" height="80"></a>
    <div class="carrusel">
        <div class="product" id="product_0">
		
            <img src="<?php echo url_for('/images/us.jpg'); ?>"width="200" height="305">
           
        </div>
        <div class="product" id="product_1" >
		
            <img src="<?php echo url_for('/images/llorona.jpg'); ?>"width="200" height="305">
            
        </div>
        <div class="product" id="product_2">
           <img src="<?php echo url_for('/images/dumbo.jpg'); ?>"width="200" height="305">
           
        </div>
        <div class="product" id="product_3">
            <img src="<?php echo url_for('/images/sis.jpg'); ?>"width="200" height="305">
            
        </div>
        <div class="product" id="product_4">
            <img src="<?php echo url_for('/images/frida.jpg'); ?>"width="200" height="305">
            
        </div>
        <div class="product" id="product_5">
            <img src="<?php echo url_for('/images/parquemagico.jpg'); ?>"width="200" height="305">
           
        </div>
		<div class="product" id="product_6">
            <img src="<?php echo url_for('/images/Avengers_Endgame_poster.jpg'); ?>"width="200" height="305">
            
        </div>
		<div class="product" id="product_7">
            <img src="<?php echo url_for('/images/unamor.jpg'); ?>"width="200" height="305">
            
        </div>
		<div class="product" id="product_8">
            <img src="<?php echo url_for('/images/amnesia.jpg'); ?>"width="200" height="305">
            
        </div>
		<div class="product" id="product_9">
            <img src="<?php echo url_for('/images/sueños.png'); ?>"width="200" height="305">
            
        </div>
		<div class="product" id="product_10">
            <img src="<?php echo url_for('/images/mongol.jpg'); ?>"width="200" height="305">
            
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script>
var current = 0;
var imagenes = new Array();
 
$(document).ready(function() {
    var numImages = 11;
    if (numImages <= 3) {
        $('.right-arrow').css('display', 'none');
        $('.left-arrow').css('display', 'none');
    }
 
    $('.left-arrow').on('click',function() {
        if (current > 0) {
            current = current - 1;
        } else {
            current = numImages - 3;
        }
 
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
 
        return false;
    });
 
    $('.left-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });
 
    $('.right-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });
 
    $('.right-arrow').on('click', function() {
        if (numImages > current + 3) {
            current = current+1;
        } else {
            current = 0;
        }
 
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
 
        return false;
    }); 
 });
</script>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
</body>

