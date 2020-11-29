<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Schedule message with php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    /**
     * *@var string $dayofweek
     * @ index.php
     * *@author Majd
    */
    $dayofweek = date("w");
    switch($dayofweek) {
    case 1:
        echo"<span>It is Monday!</span>";
        break;
    case 2:
        echo"<span>It is Tuesday!</span>";
        break;
    case 3:
        echo"<span>It is Wednesday!</span>";
        break;
    case 4:
        echo"<span>It is Thursday!<span>";
        break;
    case 5:
        echo"<span>It is Friday!</span>";
        break;
    case 6:
        echo"<span>It is Saturday!</span>";
        break;
    case 0:
        echo"<span>It is Sunday!</span>";
        break;
            
    }
    ?>
</body>
</html>