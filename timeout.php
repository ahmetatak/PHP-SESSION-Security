<?php

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

    if(isset($_SESSION["didlogin"]) and $_SESSION["didlogin"]==TRUE){
                        if(!isset($_SESSION["timeout"]) or $_SESSION["timeout"]==FALSE)
 $_SESSION["timeout"]= time();
if ( $_SESSION["timeout"] + 30 * 60 < time()) {
    session_destroy();
 $_SESSION["timeout"]= time();
die('<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=login.php"><center>10 sn icinde hiç bir işlem yapmadığınız için çıkış işlemi gerçekleşti<br> lütfen bekleyiniz...</center> ');
  } else {
  $_SESSION["timeout"]= time();
 
  }
    }
