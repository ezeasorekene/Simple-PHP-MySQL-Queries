<?php include "functions.php"; ?>
<html>

  <?=insert()?>
<form action ="form.php?insert=yes" method ="post">
  <label for="user_email">user_email</label>
  <input type ="text" name ="user_email" /><br/>
  <label for="user_password">user_password</label>
  <input type ="password" name ="user_password" value="password" /><br/>
  <label for="user_fullname">user_fullname</label>
  <input type ="text" name ="user_fullname" value="" /><br/>
  <input type="hidden" name="insert" value="yes" />
  <input type ="submit" value="Add"/>
</form>

<br><hr><br>

  <?=update()?>
<form action ="form.php?update=yes" method ="post">
  <label for="user_id">user_id</label>
  <input type ="text" name ="user_id" required /><br/>
  <label for="user_email">user_email</label>
  <input type ="text" name ="user_email"value="" /><br/>
  <label for="user_password">user_password</label>
  <input type ="password"name ="user_password" value="" /><br/>
  <label for="user_fullname">user_fullname</label>
  <input type ="text" name="user_fullname"  value="" /><br/>
  <input type="hidden" name="update" value="1" />
  <input type ="submit" value="Update"/>
</form>

<br><hr><br>

  <?=delete()?>
<form action ="form.php?delete=yes" method ="post">
  <label for="user_id">user_id</label>
  <input type ="text" name ="user_id" required /><br/>
  <input type="hidden" name="delete" value="1" />
  <input type ="submit" value="Delete"/>
</form>

<br><hr><br>

  <?=view()?>

</html>
