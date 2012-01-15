<html>
    
    <head>
        
    </head>
    
    <body>
        <?php
        
        $mypassword=htmlspecialchars($_POST['mypassword']); // Gets the string
        
        if($mypassword=="12345"){
        echo '
            <h1> Write New Story </h1>
        
            <form name="input" action="WebStoryTemplate.php" method="get">
                <input value="Write New Story" type="submit">
            </form>
        
            <h1> View Students </h1>
        
            <form name="input" action="" method="get">
                <input value="View Students" type="submit">
            </form>';
        }
        else{
            include 'Login.php';
        }
        
        ?>
    </body>
    
</html>