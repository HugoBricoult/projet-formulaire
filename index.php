<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    include('./header.php');
    if(isset($_GET['page'])){
        if($_GET['page'] == 'support'){
            include('./pages/support.php');
        }else{
            include('./pages/404.php');
        }
    }else{
        include('./pages/articles.php');
    }
    include('./footer.php');
    ?>
    <!--Inlude header-->
    <!--Inlude Content (dynamique)-->
    <!--Inlude Footer-->
</body>
</html>