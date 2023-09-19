<?php

// setcookie("yahya" , "test" , time()+3600, '/') ;

// if (count ($_COOKIE) > 0) {
//     echo "cookies are enabled";
// }
// else {
//     echo "cookies are disabled";
// }
// setcookie("school", "yahya", time() + 86400, "/", "localhost", TRUE, TRUE);

?>
<!-- <html>

<body>
    <h1>COOKIES</h1>
    <form action="" method="post">
        <button name="btnset">set cookie</button>
        <br>
        <button name="btnget">get cookie</button>
    </form>
</body>

</html> -->
<?php
        // if (isset($_POST['btnset'])) {
        //     setcookie('user' , 'yahya');
        // }if (isset($_POST['btnget'])) {
        //     $_COOKIE ('user');
        // }
        /////////////////////////////////////////////////////////////////////
        $MAINCOLOR = "#FFF" ;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $MAINCOLOR = $_POST ['color']  ;
            setcookie ("Background" , $MAINCOLOR , time()+3600 , '/') ;
        }
        if (isset($_COOKIE ['Background'])) {
            $body = $_COOKIE ['Background'] ;
        }else {
            echo  $MAINCOLOR ;
        }
        // echo "<pre>";
        // print_r($_COOKIE);
        // echo "</pre>";
        ///////////////////////////////////////////////////////////////////////////////
        // session_start() ;
        // $_SESSION ['userName'] = ' Yahya ' ;
        // echo "<br>";
        // $_SESSION ['Food'] = 'Abbel' ;
        // echo "<br>";
        // echo ' <a href = "Page2.php " >  This Is Page2 </a> ';
        ///////////////////////////////////////////////////////////////////////////////
        // echo "<pre>";
        // $_SESSION["Favcolor"] = "yellow";
        // print_r($_SESSION);
?>

<html>

    <body style="background-color: <?php echo $body ; ?>">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="color" name="color">
            <input type="submit" value="choose">
        </form>
    </body>

</html>