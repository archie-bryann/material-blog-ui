<!-- <body>
<a href = "#" id = "mylink" onclick = "myfunction();">Reply</a>
<div id = "myform" style = "display:none">
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>">
<label>Name</label>
<input type = "text">
<input type = "submit">
</form>
</div>


<script>
function myfunction() {
    document.getElementById("myform").style.display = "block";
    documentgetElementById("mylink").style.display = "none";
}
</script>
</body> -->
<!-- 
<form method = "post">
    <input name = "name">
    <button name = "submit">Submit</button>
</form>

<?php
    // $name = htmlspecialchars($_POST['name']);
    // echo $name;
?> 
-->
<?php

    // $x = 5;
    // $y = 2;


    // // For swapping numbers
    // function swapNums($x, $y){
    // print $x.' '.$y.'<br>';

    // $z = $x;
    // $x = $y;
    // $y = $z;

    // print $x.' '.$y;
    // }

    // swapNums(4, 10);
?>
<?php
   // echo '
                // <script>
                // var audio = new Audio("alert.mp3");
                // audio.play();
                // </script>
                // ';
            //     echo '
            //     <script langauge="javascript">
            //         //  window.setInterval("refreshDiv()", 1200000);
            //     refreshDiv();
            //     refreshDiv();
            //          function refreshDiv(
            //          document.getElementById("form").innerHTML = document.getElementById("form")
            //     }
            // </script>
            //     ';
            ?>

<html>
    <head>
        <script langauge="javascript">
            var counter = 0;
            window.setInterval("refreshDiv()", 1000);
            function refreshDiv(){
                counter = counter + 1;
                document.getElementById("test").innerHTML = "Testing " + counter; // document.getElementById("test").inerHTML;    => use this to reload the page
            }
        </script>
    </head>
    <body>
        <div id="test">
            Testing
        </div>
        <div id="staticBlock">
            This is a static block
        </div>
    </body>
</html>