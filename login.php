<?php
session_start();
/* 
 *  ..:: ENGLISH ::..
 *  © 2017 Aljazarisoft.com all rights reserved. Please Read "Licence Agreement & Terms And Conditions" carefully before using this app!
 *  You agree to the Licence Agreement & Terms and Conditions by using this app
 *  Programmed by Ahmet ATAK <info@ahmetatak.net>, <ahmet_atak@msn.com> 
 *  Powered by Aljazarisoft.com | Software & Design <info@aljazarisoft.com>
 *  ..:: Türkçe ::..
 *  © 2017 Aljazarisoft.com her hakkı saklıdır. Bu uygulamayı kullanmadan önce lütfen Lisans Sözleşmesi'ni ve koşulları dikkatle okuyun!
 *  Bu uygulamayı kullanarak Lisans Sözleşmesi'ni ve koşulları kabul etmiş olursunuz.
 *  Ahmet ATAK tarafından programlandı <info@ahmetatak.net>, <ahmet_atak@msn.com> 
 *  Aljazarisoft.com [El-Cezerî yazılım] tarafından desteklenmektedir! | Yazılım & Tasarım <info@aljazarisoft.com>
 */
if(isset($_SESSION["didlogin"]) and $_SESSION["didlogin"]==true)
{
   die( '<meta http-equiv="refresh" content="0;url=panel.php">');
 
}else{
    if(isset($_GET["login"]) and isset($_POST["user"]) and isset($_POST["password"])) 
    {
        if(empty($_POST["user"]) or empty($_POST["password"]))
            die( 'kullanıcı adı veya şifre boş olamaz! geri dönmek için <a href="login.php">tıklayın</a>');
        else{
            if($_POST["user"]=="admin" and $_POST["password"]=="admin")
            {
                 $_SESSION["didlogin"]=true;
                $_SESSION["name"]="Ahmet";
                $_SESSION["surname"]="ATAK";
                $_SESSION["rank"]="yonetici";
                $_SESSION["userip"]=$_SERVER["REMOTE_ADDR"];
                
                   die( 'Tebrikler Başarılı bir şekilde giriş yaptınız yönlendiriliyorsunuz... <meta http-equiv="refresh" content="3;url=panel.php">');
            }else
            {
              die( 'kullanıcı adı veya şifre yanlış! geri dönmek için <a href="login.php">tıklayın</a>');  
            }
            
        }
        
    }else{
    echo '<center><h1>LOGIN!</h1>
          <form method="post" action="login.php?login=yes">
        <div><input type="text" name="user" placeholder="kullanıcı adı"><br>
        <input type="password" name="password" placeholder="Şifre"><br>
        <button type="submit">Giriş!</button></div>
        </form>
    </center>';    
    }
   
          
}