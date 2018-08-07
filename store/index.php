<?php
    session_start();
    
    // Reset the search fields when navigating back to the home page
    unset($_SESSION['search-box']);
    unset($_SESSION['order-by']);
    unset($_SESSION['search-by']);
    unset($_SESSION['priceFrom']);
    unset($_SESSION['priceTo']);
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Teeny Shop of Horrors </title>
        <!-- Custom CSS -->
        <link href="css/styles.css" rel="stylesheet"/>
        <!-- Bootrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Nosifer" rel="stylesheet">
        <!-- Ajax library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap library -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    </head>
    <body>
      
        <?php
          include 'navbar.php';
          
          $plantImages = ['nightshade-lg.jpg', 'poisonoak-lg.png', 'venus-lg.jpg'];
        ?>
        
        <br><br>
        
            
            <div id="plantCarousel" class="carousel slide carousel-fade" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#plantCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#plantCarousel" data-slide-to="1"></li>
                <li data-target="#plantCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <?php
                    for ($i = 0; $i < count($plantImages); $i++) {
                        echo "<div class='carousel-item";
                        echo ($i == 0) ? " active" : "";
                        echo "'>";
                        echo "<img src='../img/".$plantImages[$i]."'>";
                        echo "</div>";
                    }
                ?>
              </div>
              <a class="carousel-control-prev" href="#plantCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#plantCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

        
        <br><br>
        



 <script language="javascript" type="text/javascript" src="inc/functions.js"></script>
    </body>
    <?php
        include '../php/footer.php';  //includes the footer
    ?>        
    <script language="javascript" type="text/javascript" src="inc/functions.js"></script>
    </body>
    <?php
        include '../php/footer.php';  //includes the footer
    ?>
</html>
