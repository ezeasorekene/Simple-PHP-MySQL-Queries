<?php
//Insert function
function insert(){
  if (isset($_GET['insert']) && $_GET['insert']==="yes" && $_POST['insert']==="yes") {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_fullname = $_POST['user_fullname'];
    $gconnect = mysqli_connect('localhost','user','pass','dbname');
    $query = "INSERT INTO users (user_email,user_password,user_fullname)
              VALUES ('$user_email','$user_password','$user_fullname')";
    $result = mysqli_query($gconnect,$query);
    if (mysqli_affected_rows($gconnect)>=1) {
      echo "Your data has been inserted into the database.";
    } else {
      echo "Error: " .mysqli_error($gconnect);
    }
    mysqli_close($gconnect);
  }
}

//Select and view function
function view(){
  $gconnect = mysqli_connect('localhost','user','pass','dbname');
  $query = "SELECT * FROM users";
  $run = mysqli_query($gconnect,$query);
  $count = mysqli_num_rows($run);
  $result = mysqli_fetch_array($run);
  if ($count>=1){
    do {
      echo $result['user_email'] ."<br>"
          .$result['user_password'] ."<br>"
          .$result['user_fullname'] ."<br><hr>";
    } while ($result = mysqli_fetch_array($run));
  } else {
    echo "No data found.";
  }
  mysqli_close($gconnect);
}

//Update function
function update(){
  if (isset($_GET['update']) && $_GET['update']==="yes" && $_POST['update']==="1") {
    $user_id = $_POST['user_id'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_fullname = $_POST['user_fullname'];
    $gconnect = mysqli_connect('localhost','user','pass','dbname');
    $query = "UPDATE users SET user_email='$user_email', user_password='$user_password',
              user_fullname='$user_fullname' WHERE user_id='$user_id'";
    $result = mysqli_query($gconnect,$query);
    if (mysqli_affected_rows($gconnect)>=1) {
      echo "Your data has been updated.";
    } else {
      echo "Error: " .mysqli_error($gconnect);
    }
    mysqli_close($gconnect);
  }
}

//Delete function
function delete(){
  if (isset($_GET['delete']) && $_GET['delete']==="yes" && $_POST['delete']==="1") {
    $user_id = $_POST['user_id'];
    $gconnect = mysqli_connect('localhost','user','pass','dbname');
    $query = "DELETE FROM users WHERE user_id='$user_id'";
    $result = mysqli_query($gconnect,$query);
    if (mysqli_affected_rows($gconnect)>=1) {
      echo "Your data has been deleted.";
    } else {
      echo "Error: " .mysqli_error($gconnect);
    }
    mysqli_close($gconnect);
  }
}

?>
