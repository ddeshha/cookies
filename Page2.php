<?php
    session_start();
    echo ' Hello ' . $_SESSION ['userName'] . ' How Are You ' ;
echo "<br>";
    echo 'Your favoriet Food Is' . $_SESSION [ 'Food' ];
echo "<br>";
    echo ' <a href = "Page3.php " >  This Is Page3 </a> ';
?>