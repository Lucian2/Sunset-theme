<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sunset</title>
    <link rel="stylesheet" href="https://use.typekit.net/ivj7rga.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <!-- Font-Awesome -->
    <script src="https://kit.fontawesome.com/9d59649718.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php wp_head(); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" />

</head>
<body <?php body_class(); ?>>
<div class="container-fluid container-1">
        <nav class="navbar  navbar-expand-sm">
        <div class="container">
        <?php

wp_nav_menu(array(
    'theme_location' => 'social-menu',
    'menu_class' => 'navbar-nav marginl'

))

?>
            <!-- <ul class="navbar-nav marginl">
            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"></a></li>
            <li class="nav-item"><a class="nav-link" href="#"></a></li>
            <li class="nav-item"><a class="nav-link" href="#"></a></div>
</ul> -->
<?php

wp_nav_menu(array(
    'theme_location' => 'navbar-menu',
    'menu_class' => 'navbar-nav ml-auto marginr'

))

?>

</div>
    </nav>

    <div id="content" class="text-center">
        <h1 data-aos="fade-up">THE SUNSET</h1>
        <h2 data-aos="fade-down">Free PSD portfolio template</h2>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
      $("#content2").click(function(event){
          $('html, body').animate({scrollTop: '+='+String(screen.height)+'px'}, 500);
      });
    });
    </script>

    <div data-aos="fade-right" class="container-fluid text-center" id="content2">
        <i class="fas fa-mouse" id="scroll" style="font-size: 45px; color: white;"></i>
        <p>SCROLL DOWN</p>
        <span><i class="fas fa-chevron-down" style="font-size:20px;color:white;"></i></span>
    </div>

</div>
