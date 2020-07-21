<?php


    require 'views/header.php';

        echo "<div class='container'><br><br>";
            require 'views/' . $name . '.php';
        echo "<br><br></div>";    

    require 'views/footer.php';

?>