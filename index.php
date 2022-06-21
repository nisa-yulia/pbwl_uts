<?php
    // session start();
    if(!empty($_SESSION)){ }else{ session_start(); }
?>
<!doctype html>
<html>
    <head>
        <title>Login </title>
    </head>

<style>
    body {
        background-color: #2e3f7629;
    }
    form{
    width: 800px;
    background-color: rgb(93 103 120);
    text-align: center;
    padding: 50px;
    border-radius: 10px;
    position:relative;
    left: 220px;
}

form ul li{
    list-style: none;
    text-align: left;
    position: relative;
    left: 220px;
    font-family: 'Be Vietnam Pro', sans-serif;
    color: white;
    padding: 3px;
}

h1{
    margin: 0;
    font-family: 'Be Vietnam Pro', sans-serif;
    color: white;
}

.input-user{
    font-family: 'Be Vietnam Pro', sans-serif;
    height: 35px;
    width: 281px;
}
.input-password{
    font-family: 'Be Vietnam Pro', sans-serif;
    height: 35px;
    width: 281px;
    margin-bottom:20px;
}

.btn-primary{
    padding: 10px;
    padding-right: 30px;
    padding-left: 30px;
    background-color: white;
    font-family: 'Be Vietnam Pro', sans-serif;
    font-size:15px;
    font-weight: 600;
    color: black;
    text-decoration: none;
}
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <body >
                    <?php if(isset($_GET['signout'])){?>
                        
                        
                    <?php }?>
                        
                                <form method="post" action="proses/crud.php?aksi=login">
    <h1>Masuk</h1>
    <ul>
        <li>Username</li>
        <li><input type="text" placeholder="Username" name="user" class="input-user" required></li>
    </ul>
    <ul>
        <li>Password</li>
        <li><input type="password" name="pass" placeholder="Password" class="input-password" required></li>
    </ul>
                            <button type="submit" name="proses_login" class="btn-primary"> Login  </button>
                         <!-- form-group// -->                                                           
                    </form>
                        
                         <!-- form-group//-->
                
            

            
         
    
    </body>
</html>