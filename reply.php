<?php
    include 'inc/head.php';
    include 'redirect/check.php';
?>


<div id = "form">
<div id = "me" class = "w3-container">
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST"><br>


<!-- Title -->
<?php
    // $id from check.php
    if(isset($_GET['id'])) {
    $id = htmlspecialchars(htmlentities(mysqli_real_escape_string($conn, $_GET['id'])));
    $sql = "select * from comment1 where id = '$id'";

    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];
    }
}    
?>
<span><h3><i>Reply <b><?php 
if(isset($_GET['id'])) {
echo $name; 
}

?></b></span></i></h3><p>

<input name = "id" value = "<?php echo $_GET['id']; ?>" hidden>
<textarea name="comment" cols="45" placeholder = "Reply comment..." rows="8" maxlength="65525" required="required" style="margin: 2px; width: 100%; height: 115px;"></textarea>
<p>
<input name="name" value = "<?php 
if(isset($_SESSION['name'])) {
    echo $_SESSION['name'];
}
?>" type="text" value size="30" placeholder = " Name*" maxlength="245" required="required" style = "margin: 2px; height: 32px; width: 48%; float: left;">

<input name="telephone" value = "<?php 
if(isset($_SESSION['telephone'])) {
    echo $_SESSION['telephone'];
}
?>" type="telephone" value size="30" placeholder = " Telephone*" maxlength="100" required="required" style = "height: 32px; width: 48%; float:right;">
<br><br>    

<?php
    if(isset($_SESSION['name'])) {
        echo '<input type = "checkbox" name = "save" checked> ';
    } else {
        echo '<input type = "checkbox" name = "save"> ';
    }
?>
Save my name and telephone in the browser for the next time i comment.

<br><br>

<?php
    if(isset($_POST['chat'])){
        echo '<input type = "checkbox" name = "chat" checked>';
    } else {
        echo '<input type = "checkbox" name = "chat">';
    }
?>

 Allow people to chat with me on whatsapp. 


<br><br>

<?php
    if(isset($_POST['notify'])) {
        echo '<input type = "checkbox" name = "notify" checked>';
    } else {
        echo '<input type = "checkbox" name = "notify">';
    }
?>

 Notify me of new articles by whatsapp. 

<p align = "right">
<button name = "reply" class="w3-btn w3-ripple w3-black" type = "submit">Post</button>
</form>
</div> 
</div> 


<?php

// Come back to the algorithm
// For Comment 
    if(isset($_POST['reply'])) {
        $id = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['id']));
        $name = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['name']));
        $telephone = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['telephone']));
        $comment = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['comment']));
 
        
        // save profile
        if(isset($_POST['save'])){
            $save = htmlspecialchars($_POST['save']);
            if($save == 'on') {
                $_SESSION['name'] = $name;
                $_SESSION['telephone'] = $telephone;
            }
        } else {
            session_unset();
            session_destroy();
        }

              // allow people to chat
              if(isset($_POST['chat'])) {
                $chat = htmlspecialchars($_POST['chat']);
                if($chat == 'on') {
                    $allow = 1;
                }
            } else {
                $allow = 0;
            }
    
            // notify by whatsapp
            if(isset($_POST['notify'])) {
                $notify = htmlspecialchars($_POST['notify']);
                if($notify == 'on') {
                    $notify = 1;
                }
            }  else {
                $notify = 0;
            }
     
       
        $count = str_word_count($comment);

        if(empty($name) || empty($telephone) || empty($comment)) {
            $msg = "<li>All fields are required!</li>";
        } else {

       if($count > 300){
           $msg = "<li>Your comment seems to be too long!</li>";
       } else {

          $time = date('M d, Y').' at '.date('h:ia');
          $name = ucwords($name);

          $sql = "insert into comment1 (name, telephone, comment, time, to_id, allow, notify) values ('$name', '$telephone', '$comment', '$time', '$id', '$allow', '$notify')";
          $result = mysqli_query($conn, $sql);
          // redirect
          echo '
          <script>
          window.location = "the-bitter-truth.php?replied";
          </script>
          ';
       }
    }
    }
    
  

?>



<br>
<br>
<br>
<br>
<br>
<br>

<?php
    include 'inc/foot.php';
?>