<html>

<head>

    <title>Loops; pointers</title>

</head>

<body>

   
    

    
    <?php 
    $ages =array(4, 8, 15, 16, 23, 42);
    ?>
    
    <?php
    echo "1:" . current($ages) . "<br />";
    next($ages);
    echo "2:" . current($ages) . "<br />";
    reset($ages);
    echo "3:" . current($ages) . "<br />";
    echo "3:";
    
    ?>
    
    <br />
    
    <?php
    //this is a while loop that moves the array pointer
    while ($age = current($ages)) {
        echo $age . "," ;
        next($ages);
    }
    
    
    ?>
    
      
    
    




</body>




</html>
