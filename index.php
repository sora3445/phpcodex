    <!DOCTYPE HTML>
    <html>
<head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
   

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){

           $('#link06').on('click', function(){
                $.ajax({
                    type: "POST",
                    url: "admin.php",
                    success:function(response){
                        $('#central').html(response)
                    }
                });
                
                return false;


            });


 })
        

    </script>
    <style>

body {
  background: #f7f7f7;
}

.form-box {
  max-width: 500px;
  margin: auto;
  padding: 50px;
  background: #ffffff;
  border: 10px solid #f2f2f2;
}

h1, p {
  text-align: center;
}

input, textarea {
  width: 100%;
}


    </style>
</head>

    <body>
   


    <?php
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $da4ta = htmlspecialchars($data);
    return $data;
    }
    // define variables and set to empty values
    $username = $password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name = test_input($_POST["name"]);
     $password = test_input($_POST["password"]);

$fichero = file_get_contents('login.txt', true);
 
if (preg_match("/$name.*$password/",$fichero ))
{
    $myfile = fopen("login.txt", "a+") or die("Unable to open file!");
   fwrite($myfile, "Username :" . $name." "."Password :".$password."\r\n");
   fclose($myfile);
header("Location:  index.html"); 
}
 



    }
    ?>
 <div id="XYZ">
    <h2 style="text-align: center" >SISTEMA DE GESTION</h2>

 <div id="central">
<div class="form-box">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<img src="http://www.epayment.com.ng/images/blog-wp-login-1200x400.png" alt="Girl in a jacket" width="300" height="200">
<br>
    usuario       :    <input type="text" name="name">
    <br>



<br>
    contrasena: <input type="text" name="password">
    <br><br>
    <input type="submit" name="submit" value="Submit"  >
 
                <div>
                    <a id="link06" href="">Servicios</a>
                </div>
 


    </form>
    </div>


    </div>
       </div>
 



    </body>
    </html> 
