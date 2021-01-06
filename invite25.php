<?php
$url = "https://hellastz.com/index.php?page=usercp&amp;do=invite&amp;action=send&amp;uid=".$_POST['ID'];
$length = 20;    
$random25 = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'),1,$length);
?>

<div class="block-content">
    <div class="block-content-l">
    <div class="block-content-r">
    <div align="center" class="b-content">


  <table class="lista" width="100%">
  <form method="post" action="<?=$url?>">
  <input type="hidden" name="hash" value="<?=$random25?>">
  <input type="hidden" name="invitername" value="<?=$_POST['username']?>">
	<tbody><tr>
	  <td class="header" colspan="2" style="text-align:center; padding=5px;">Send Invitation&nbsp;<tag:invnum></tag:invnum></td>
	</tr>
	<tr>
	  <td align="left" class="header">Email</td><td class="lista"><input type="text" size="40" name="email"></td>
	</tr>
	<tr>
	  <td align="left" class="header">Message</td><td class="lista"><textarea name="body" rows="6" cols="80"></textarea></td>
	</tr>
	<tr>
	  <td align="center" class="lista" colspan="2"><input type="submit" value="Send" style="height: 20px"></td>
	</tr>
  
  </tbody></form></table>
</div>
    </div>
   </div>
  </div>