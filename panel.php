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
if(isset($_SESSION["didlogin"]) and $_SESSION["didlogin"]==true )
{
    require_once 'timeout.php';
    
   echo '<table style="height: 100%;" width="100%">
<tbody>
<tr>
<td style="width: 134.5px;">&nbsp;Merhaba,'.$_SESSION["name"].' '.$_SESSION["surname"].'</td>
<td style="width: 134.5px;">&nbsp;</td>
<td style="width: 134.5px;">&nbsp;Y&ouml;netim paneli</td>
<td style="width: 134.5px;"><a href="logout.php">&nbsp; &Ccedil;ıkış yap</a></td>
</tr>
<tr>
<td style="width: 134.5px;">&nbsp;</td>
<td style="width: 134.5px;">&nbsp;</td>
<td style="width: 134.5px;">&nbsp;</td>
<td style="width: 134.5px;">&nbsp;</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>'; 
}else{
    die( 'Giriş yapmanız gerek ! giriş yapmak için burayı <a href="login.php">tıklayın</a>');
}
