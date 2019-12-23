<?php
    include 'inc/head.php';
?>

<br>
<!-- Start Here -->
<div class = "w3-container">
<div class = "w3-container">
<!-- <div class  = "w3-container"> -->
<h2 style = "font-family: Berlin Sans FB;" align  = "center">Hello, I'm Archie Bryann</h2>
<p> 
<p>

<style>
#small{
    margin-top: 40px;
}
</style>
    <div id = "small" class = "w3-container">
    <div class = "w3-container">
    <div class = "w3-container">
    <div class = "w3-container w3-center">
    <div class = "w3-card-4 test w3-btn w3-round-large">
    <!-- <img src = "img/the-bitter-truth.png" style="width:100%;opacity:0.85"> -->
    <img src = "img/archiebryann.png" class = "w3-circle w3-grayscale w3-center" style = "width:100%;opacity:0.85"/>
    <!-- <div class = "w3-center">
    <h2><b>The Bitter Truth<b></h2>

    </div> -->
    </div>
    </div>
    </div>
    </div>
    </div>
<!-- <img src = "img/archiebryann.png" class = "w3-circle w3-grayscale w3-center" style = "margin-left: 18%"/> -->
<!-- <p> -->
<!-- <br>
<div class="w3-container w3-center">
  <span class="w3-tag w3-small">
  <h5>Below</h5>
  </span>
</div> -->
<br>
<br>
<div class = "w3-container">
<div class = "w3-container">
<div class = "w3-container w3-center">
<div class="w3-panel w3-light-grey">
    <span style="font-size:100px;line-height:0.6em"style="font-size:100px;line-height:0.6em">✂</span><br>
    <p class="w3-xlarge"><i>All I write is what I know, nothing less, maybe more.</i></p>
</div>
</div>
</div>
</div>

</div>
</div>

<br>
<h1 class = "w3-center" style = "font-family: Berlin Sans FB;">Click the card</h1>
<!-- The latest should be at the top -->
<br>
<br>

<a style = "text-decoration:none;" href = "the-bitter-truth.php">
<div class = "w3-container">
<div class = "w3-container">
<div class = "w3-container">
<div class = "w3-container w3-center">
<div class = "w3-card-4 test w3-btn w3-center">
<img src = "img/the-bitter-truth.png" style="width:100%;opacity:0.85">
<div class = "w3-center">
<h2><b>The Bitter Truth</b></h2>

</div>
</div>
</div>
</div>
</div>
</div>
</a>
<style>
@media(width: 360px) {
.w3-card-4{
    margin-left: -11%;
}
}
</style>


<br>

<br>
<br>
<br>

<div class = "w3-container">
<h1 class = "w3-center" style = "font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"><b>About <small><small>Archie Bryann</small></small></b></h1>
<div class = "w3-container">
<p class = "w3-center" style = "font-size: 17px;">
<i>Archie Bryann is a blog where the creator writes what he wants to write.</i>
<br>
<br>

<!-- 
<div class = "w3-container">
<div class = "w3-container">
<div class = "w3-container">
<div class = "w3-container w3-center">
<img src = "img/about.png" class = "w3-center" style="border-radius: 6px;width:100%">
</div>
</div>
</div>
</div> -->



<div class = "w3-container">
<div class = "w3-container">
<div class = "w3-container">
<div class = "w3-container w3-center">
<div class = "w3-card-4 test w3-btn">
<!-- <img src = "img/the-bitter-truth.png" style="width:100%;opacity:0.85"> -->
<!-- <img src = "img/archiebryann.png" class = "w3-circle w3-grayscale w3-center" style = "width:100%;opacity:0.85"/> -->
<!-- <div class = "w3-center">
<h2><b>The Bitter Truth<b></h2>

</div> -->
<img src = "img/about.png" class = "w3-center" style="border-radius: 6px;width:100%;opacity:0.85">
</div>
</div>
</div>
</div>
</div>


<br> 
<h1 class = "w3-center" style = "font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"><b>About <small><small><small>Ekomobong Archibong</small></small></small></b></h1>
<p class = "w3-center" style = "font-size: 17px;">
<i>Ekomobong Archibong is a student of The University of Ibadan, from the Computer Science Department.</i>
</p>
</div>
</div>
<!-- #10004 -->
<br>

<!-- <a style = "text-decoration: underline" href="whatsapp://send?phone='.$row['telephone'].'&text=Hello,%20I%20am%20">Chat</a>   -->
<!-- <a class="w3-btn w3-white w3-border w3-center" href='whatsapp://send?text=www.archiebryann.rf.gd/the-bitter-truth.php%0A%0AFind%20out%20what%20the%20society does%20to%20you%20everyday%20without%20your%20knowledge!'>TALK TO ME</a>  -->


<div id = "small" class = "w3-container">
    <div class = "w3-container">
    <div class = "w3-container">
    <div class = "w3-container w3-center">
    <div class = "w3-card-4 w3-small test w3-btn w3-round-large">
    <!-- <img src = "img/the-bitter-truth.png" style="width:100%;opacity:0.85"> -->
    <img src = "img/feedback3.png" class = "w3-circle w3-grayscale w3-center" style = "width:100%;opacity:0.85"/>
    <!-- <div class = "w3-center">
    <h2><b>The Bitter Truth<b></h2>

    </div> -->
    </div>
    </div>
    </div>
    </div>
    </div>
    <br>
    <br>


    <?php
        if(isset($_POST['send'])) {
            $comment= htmlspecialchars(mysqli_real_escape_string($conn, $_POST['comment']));
            $time = date('M d, Y').' at '.date('h:i a');
            $sql = "insert into feedback (comment, time) values ('$comment', '$time')";
            if(mysqli_query($conn, $sql)) {
                    echo '
                    <script>
                    window.location = "?feedback";
                    </script>
                    ';
            }
        }

        if(isset($_GET['feedback'])){
            echo '
                <script>
                alert("Thanks for your feedback!");
                </script>
            ';
        }
    ?>


<div id = "form">
<div id = "me" class = "w3-container">
<div class = "w3-container">

<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
<h2 align  = "center"><i>Write feedback</i></h2>
<i> 
<textarea name="comment" cols="45" placeholder = "What do you think..." rows="8" maxlength="65525" required="required" style="margin: 2px; width: 100%; height: 100px;">
<?php echo isset($_POST['comment']) ? $comment : ''; ?>
</textarea>
</i>
<p align = "right">
<button name = "send" class="w3-btn w3-ripple w3-black" type = "submit">Send</button>
</form>
</div> 
</div>
</div> 

<br><br>
<br><br>
<br>

<?php
        include 'inc/foot.php';
?>