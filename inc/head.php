<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "archiebryann");
    $conn->set_charset('utf8mb4');
    // change this when hosting
    define('ROOT_URL', 'http://localhost/archie%20bryann/');
 
?>
<!doctype html>
<head>
<meta charset = "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name = "description" content = "">
<meta name = "keywords" contents = "">
<meta name = "author" content = "">
<!-- To make a whole page reload -->
<!-- <meta http-equiv = "refresh" content = "10"> -->
<link rel = "stylesheet" href = "w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src = "jquery-3.4.1.min.js"></script>
<style>
body{
    background-color: #f1f1f1;
    color: black;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;   

}

header, footer{
    background-color: black;
    color: white;
}

header h1, footer p{
    font-family: Georgia;
}
h2{
    font-family: Georgia;
}

div#me{
    /* font-family: Eras Light ITC; */
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;   

    font-size: 16px;
}

a#no{
    text-decoration: none;
}

</style>
<title>Archie Bryann</title>
</head>
<header class="w3-container w3-top w3-theme w3-margin-bottom">
<h1 align = "center"><a id = "no" href = "<?php echo ROOT_URL; ?>">Archie Bryann</a></h1>
<p>
</header>
<br><br><br><p>
<body>

