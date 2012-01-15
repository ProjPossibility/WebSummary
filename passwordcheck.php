<html>
    
    <head>
        
    </head>
    
    <body>
        <?php
        
        $mypassword=htmlspecialchars($_POST['mypassword']); // Gets the string
        
        if($mypassword=="12345"){
            echo "hurray!"; //link to Teacher View
        }
        else{
            include 'Login.php';
        }
        
        ?>
    </body>
    
</html>