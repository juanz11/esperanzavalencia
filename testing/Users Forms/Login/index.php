<?php
    $msg = '';
   
    $newURL = "https://esperanzavalencia.com/testing/Users%20Forms/Tutor%20form/form.html";

    if (isset($_POST['login']) && !empty($_POST['email']) 
       && !empty($_POST['password'])) {
        
       if ($_POST['email'] == 'admin@test.com' && 
          $_POST['password'] == '1234') {
          $_SESSION['valid'] = true;
          $_SESSION['timeout'] = time();
          $_SESSION['email'] = 'admin@test.com';
                    
          header("Location: https://esperanzavalencia.com/testing/Users%20Forms/Tutor%20form/index.html");
          die();
          
          
       }else {
          $msg = 'Wrong username or password';
          echo $msg;
       }
    }
?>