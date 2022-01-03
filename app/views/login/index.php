<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 
    <div class="kotak_login">
        <p class="tulisan_login">Silahkan login</p>
 
        <form action="<?=BASEURL;?>/login/proses"method="post">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
            <input type="submit" class="tombol_login" value="LOGIN">
 
            <br/>
            <br/>
        </form>
        
    </div>

 
</body>
</html>