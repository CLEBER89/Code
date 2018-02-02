<?php include("title.php");?>
<!DOCTYPE html>
<html>
    <head>   
        <title>Atacad&atilde;o Guarulhos</title>
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" type="text/css">  
        <link rel="stylesheet" href="css/login.css" type="text/css">
    </head>
    <body onload="loginLoad()" style="background-color: #BECAD5">
        <div id="container">
            <div id="wrapper">
               <div id="logo"><img src="img/%C3%ADndice.png" alt="@SmartPost" title="@SmartPost"></div> 
                <form method="post" name="logon" action="C:\Users\clb\Desktop\GitHub\Portal Atacadão New/loginAt.php">
                    <fieldset class="login">
                    <legend>Acesso Restrito</legend>
                    <label for="login">Login:</label>
                    <input name="login" id="name" type="text" size="10"/>

                    <label for="senha">Senha:</label>
                    <input name="senha" id="senha" type="password" size="10"/>
                    <input type="submit" value="Acessar" />
                    </fieldset>
                </form>
            </div>
        </div>  
        <script type="text/javascript" src="layout/js/login.js"></script>  
    </body>
</html>