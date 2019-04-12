<html>
<head>
    <title>Administraton Login Page</title>
</head>
<?php echo "<style>"; include "../css/login.css"; echo "</style>";?>
<body>
    <div class="wrapper">
       <img src="../images/header/SITlogo.png" alt="">
        <div class="login-container">
            <p>Username</p>
            <input type="text">
            <p>Password</p>
            <input type="password"><br>
            <button>Login</button>
        </div>
    </div>
</body>
</html>
<style>
body{
    width:100%;
    height:100%;
}
.wrapper{
/*    border:2px solid black;*/
    height:100%;
    width:100%;
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-pack:center;
    -ms-flex-pack:center;
    justify-content:center;
    -webkit-box-align:center;
    -ms-flex-align:center;
    align-items:center;
    flex-direction:column;
}
img{
/*    border:2px solid black;*/
    width:350px;
    padding-bottom:2rem;
}
.login-container{
    border:1px solid #bcbcbc;
    padding-top:2rem;
    padding-bottom:4rem;
    padding-left:3rem;
    padding-right:3rem;
    border-radius:5px;
}
.login-container p{
    font-size:1rem;
/*    border:1px solid black;*/
    margin-bottom:0.2rem;
    color:rgba( 86, 86, 86, 0.766 );
}
.login-container input{
    font-size:1rem;
    padding:0.5rem;
    border-radius:5px;
    color:#919191;
    width:300px;
}
.login-header{
    width:100%;
    height:100px;
    background-color:rgba( 58, 58, 58, 0.438 ));
}
</style>