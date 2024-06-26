<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if(login_check($mysqli) == true)
{ 
    $logged='in';
} else {
    $logged = 'out';
}

?>
<!DOCTYPE html>
<html lang="pt-br">    
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <title>Secure Login: Log In</title>        
        <link rel="stylesheet" href="styles/main.css" />        
        <script type="text/JavaScript" src="js/sha512.js"></script>         
        <script type="text/JavaScript" src="js/forms.js"></script>     
    </head>    
    <body>
</body>

<?php          
if (isset($_GET['error'])) 
    {            
    echo '<p class="error">Erro ao fazer o login!</p>';        
    }
    ?>
        <form action="includes/process_login.php" method="post" name="login_form">                                  
            <label for="email">Email:</label><br>
            <input type="text" name="email">
            <br>
            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password">
            <br>
            <input type="button" value="Login" onclick="formhash(this.form, this.form.password);">              
        </form>       
        <p>If you don't have a login, please <a href="register.php">register</a></p>        
        <p>If you are done, please <a href="includes/logout.php">log out</a>.</p>        
        <p>You are currently logged <?php echo $logged ?>.</p>    
    </body>
</html>