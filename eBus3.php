<!DOCTYPE html>
<html>
    <body>
    <!-- //Starting the session to get the session variable from the last page-->
    <?php

    session_start();
    $totalValue = $_POST['txtTotal'];
    $fullNameValue = $_POST['txtName'];
     echo "The name is: ".$fullNameValue.".";
     echo "<br></br>";
    echo "The total value is ".$totalValue.".";
    ?>
    

    </body>
</html>



