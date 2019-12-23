<?php
    include 'inc/head.php';
?>

  
<?php
    // To display all the main comments
    $sql = "select * from comment1 where to_id = 0 order by id ASC";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);
    if($queryResult > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div id = "me" class = "w3-container">';
            
            // Stage 1

            echo '<div class = "w3-left">';
            echo '<small><img style = "margin-right: 5px" src = "img/download.png" class = "w3-circle" width = "70px"></small>';
            echo '</div>';
            // echo '<small><img src = "img/download.png" class = "w3-circle" width = "70px"></small>';
            echo '<b>  <span style = "font-size:15.5px">'.$row['name'].'<span></b> <small>'.$row['time'].'</small>';
            echo '<p>';
            echo '<p>';
            echo ' '.$row['comment'];
            
            echo '<p align = "right">';
            if($row['allow'] == 1){
                echo '<a style = "text-decoration: underline" href="whatsapp://send?phone='.$row['telephone'].'&text=Hello,%20I%20am%20">Chat</a>    . '; 
            } else {
                echo '';
            }
            echo '<a style = "text-decoration: underline;" href="reply.php?id='.$row['id'].'"> Reply</a>'; 
            
            echo '</p>';
            echo '</div>';
            $a_id = $row['id'];
            $query = "select * from comment1 where to_id = '$a_id'";
            $fred = mysqli_query($conn, $query);
            while($cro = mysqli_fetch_assoc($fred)) {

                // Stage 2
                echo '<div  style = "margin-left: 20%;margin-right: 2%;">';
                echo '<div class = "w3-left">';
                echo '<small><img style = "margin-right: 5px" src = "img/download.png" class = "w3-circle" width = "60px"></small>';
                echo '</div>';
                // echo '<small><img src = "img/download.png" class = "w3-circle" width = "70px"></small>';
                echo '<b>  <span style = "font-size:13.5px">'.$cro['name'].'<span></b> <small style = "font-size: 12px;width: 3px;">'.$cro['time'].'</small>';
                echo '<p>';
                echo '<p>';
                echo ' <span style = "font-size: 14px;">'.$cro['comment'].'</span>';
                
                echo '<p align = "right">';
                if($cro['allow'] == 1){
                    echo '<a style = "text-decoration: underline" href="whatsapp://send?phone='.$cro['telephone'].'&text=Hello,%20I%20am%20">Chat</a>    . '; 
                } else {
                    echo '';
                }
                echo '<a style = "text-decoration: underline;" href="reply.php?id='.$cro['id'].'"> Reply</a>'; 
                echo '</div>'; 


                // Stage 3
                $b_id = $cro['id'];
                $fresher = "select * from comment1 where to_id = '$b_id'";
                $dred = mysqli_query($conn, $fresher);
                while ($tere = mysqli_fetch_assoc($dred)) {
                    echo '<div  style = "margin-left: 30%;margin-right: 2%;">';
                echo '<div class = "w3-left">';
                echo '<small><img style = "margin-right: 5px" src = "img/download.png" class = "w3-circle" width = "50px"></small>';
                echo '</div>';
                // echo '<small><img src = "img/download.png" class = "w3-circle" width = "70px"></small>';
                echo '<b>  <span style = "font-size:13.5px">'.$tere['name'].'<span></b> <small style = "font-size: 12px;width: 3px;">'.$tere['time'].'</small>';
                echo '<p>';
                echo '<p>';
                echo ' <span style = "font-size: 14px;">'.$tere['comment'].'</span>';
                
                echo '<p align = "right">';
                if($tere['allow'] == 1){
                    echo '<a style = "text-decoration: underline" href="whatsapp://send?phone='.$tere['telephone'].'&text=Hello,%20I%20am%20">Chat</a>    . '; 
                } else {
                    echo '';
                }
                echo '<a style = "text-decoration: underline;" href="reply.php?id='.$tere['id'].'"> Reply</a>'; 
                echo '</div>'; 

                // Stage 4
                $c_id = $tere['id'];
                $stew = "select * from comment1 where to_id = '$c_id'";
                $apple = mysqli_query($conn, $stew);
                while($grape = mysqli_fetch_assoc($apple)) {
                    echo '<div  style = "margin-left: 40%;margin-right: 2%;">';
                    echo '<div class = "w3-left">';
                    echo '<small><img style = "margin-right: 5px" src = "img/download.png" class = "w3-circle" width = "50px"></small>';
                    echo '</div>';
                    // echo '<small><img src = "img/download.png" class = "w3-circle" width = "70px"></small>';
                    echo '<b>  <span style = "font-size:13.5px">'.$grape['name'].'<span></b> <small style = "font-size: 12px;width: 3px;">'.$grape['time'].'</small>';
                    echo '<p>';
                    echo '<p>';
                    echo ' <span style = "font-size: 14px;">'.$grape['comment'].'</span>';
                    
                    echo '<p align = "right">';
                    if($grape['allow'] == 1){
                        echo '<a style = "text-decoration: underline" href="whatsapp://send?phone='.$grape['telephone'].'&text=Hello,%20I%20am%20">Chat</a>    . '; 
                    } else {
                        echo '';
                    }
                    echo '<a style = "text-decoration: underline;" href="reply.php?id='.$tere['id'].'"> Reply</a>'; 
                    echo '</div>'; 

                    // Stage 5 -> same div
                    $d_id = $grape['id'];
                    $rice = "select * from comment1 where to_id = '$d_id'";
                    $twelve = mysqli_query($conn, $rice);
                    while($one = mysqli_fetch_assoc($twelve)) {
                        echo '<div  style = "margin-left: 40%;margin-right: 2%;">';
                        echo '<div class = "w3-left">';
                        echo '<small><img style = "margin-right: 5px" src = "img/download.png" class = "w3-circle" width = "50px"></small>';
                        echo '</div>';
                        // echo '<small><img src = "img/download.png" class = "w3-circle" width = "70px"></small>';
                        echo '<b>  <span style = "font-size:13.5px">'.$one['name'].'<span></b> <small style = "font-size: 12px;width: 3px;">'.$one['time'].'</small>';
                        echo '<p>';
                        echo '<p>';
                        echo ' <span style = "font-size: 14px;">'.$one['comment'].'</span>';
                        
                        echo '<p align = "right">';
                        if($one['allow'] == 1){
                            echo '<a style = "text-decoration: underline" href="whatsapp://send?phone='.$one['telephone'].'&text=Hello,%20I%20am%20">Chat</a>    . '; 
                        } else {
                            echo '';
                        }
                        echo '<a style = "text-decoration: underline;" href="reply.php?id='.$one['id'].'"> Reply</a>'; 
                        echo '</div>'; 


                        // Stage 6
                        $e_id = $one['id'];
                    $ggg = "select * from comment1 where to_id = '$e_id'";
                    $hhh = mysqli_query($conn, $ggg);
                    while($tess = mysqli_fetch_assoc($hhh)) {
                        echo '<div  style = "margin-left: 40%;margin-right: 2%;">';
                        echo '<div class = "w3-left">';
                        echo '<small><img style = "margin-right: 5px" src = "img/download.png" class = "w3-circle" width = "50px"></small>';
                        echo '</div>';
                        // echo '<small><img src = "img/download.png" class = "w3-circle" width = "70px"></small>';
                        echo '<b>  <span style = "font-size:13.5px">'.$tess['name'].'<span></b> <small style = "font-size: 12px;width: 3px;">'.$tess['time'].'</small>';
                        echo '<p>';
                        echo '<p>';
                        echo ' <span style = "font-size: 14px;">'.$tess['comment'].'</span>';
                        
                        echo '<p align = "right">';
                        if($tess['allow'] == 1){
                            echo '<a style = "text-decoration: underline" href="whatsapp://send?phone='.$tess['telephone'].'&text=Hello,%20I%20am%20">Chat</a>    . '; 
                        } else {
                            echo '';
                        }
                        echo '<a style = "text-decoration: underline;" href="reply.php?id='.$tess['id'].'"> Reply</a>'; 
                        echo '</div>'; 



                        
                        // Stage 7
                        $f_id = $tess['id'];
                    $lll = "select * from comment1 where to_id = '$f_id'";
                    $qqq = mysqli_query($conn, $lll);
                    while($ttt = mysqli_fetch_assoc($qqq)) {
                        echo '<div  style = "margin-left: 40%;margin-right: 2%;">';
                        echo '<div class = "w3-left">';
                        echo '<small><img style = "margin-right: 5px" src = "img/download.png" class = "w3-circle" width = "50px"></small>';
                        echo '</div>';
                        // echo '<small><img src = "img/download.png" class = "w3-circle" width = "70px"></small>';
                        echo '<b>  <span style = "font-size:13.5px">'.$ttt['name'].'<span></b> <small style = "font-size: 12px;width: 3px;">'.$ttt['time'].'</small>';
                        echo '<p>';
                        echo '<p>';
                        echo ' <span style = "font-size: 14px;">'.$$ttt['comment'].'</span>';
                        
                        echo '<p align = "right">';
                        if($ttt['allow'] == 1){
                            echo '<a style = "text-decoration: underline" href="whatsapp://send?phone='.$ttt['telephone'].'&text=Hello,%20I%20am%20">Chat</a>    . '; 
                        } else {
                            echo '';
                        }
                        echo '<a style = "text-decoration: underline;" href="reply.php?id='.$ttt['id'].'"> Reply</a>'; 
                        echo '</div>'; 

                        
                        // Stage 8
                        $g_id = $ttt['id'];
                    $vvv = "select * from comment1 where to_id = '$g_id'";
                    $qqq = mysqli_query($conn, $lll);
                    while($ttt = mysqli_fetch_assoc($qqq)) {
                        echo '<div  style = "margin-left: 40%;margin-right: 2%;">';
                        echo '<div class = "w3-left">';
                        echo '<small><img style = "margin-right: 5px" src = "img/download.png" class = "w3-circle" width = "50px"></small>';
                        echo '</div>';
                        // echo '<small><img src = "img/download.png" class = "w3-circle" width = "70px"></small>';
                        echo '<b>  <span style = "font-size:13.5px">'.$ttt['name'].'<span></b> <small style = "font-size: 12px;width: 3px;">'.$ttt['time'].'</small>';
                        echo '<p>';
                        echo '<p>';
                        echo ' <span style = "font-size: 14px;">'.$ttt['comment'].'</span>';
                        
                        echo '<p align = "right">';
                        if($ttt['allow'] == 1){
                            echo '<a style = "text-decoration: underline" href="whatsapp://send?phone='.$ttt['telephone'].'&text=Hello,%20I%20am%20">Chat</a>    . '; 
                        } else {
                            echo '';
                        }
                        echo '<a style = "text-decoration: underline;" href="reply.php?id='.$ttt['id'].'"> Reply</a>'; 
                        echo '</div>'; 

                        // Stage 8
                        $h_id = $ttt['id'];
                    $mmm = "select * from comment1 where to_id = '$h_id'";
                    $zzz = mysqli_query($conn, $mmm);
                    while($xxx = mysqli_fetch_assoc($zzz)) {
                        echo '<div  style = "margin-left: 40%;margin-right: 2%;">';
                        echo '<div class = "w3-left">';
                        echo '<small><img style = "margin-right: 5px" src = "img/download.png" class = "w3-circle" width = "50px"></small>';
                        echo '</div>';
                        // echo '<small><img src = "img/download.png" class = "w3-circle" width = "70px"></small>';
                        echo '<b>  <span style = "font-size:13.5px">'.$xxx['name'].'<span></b> <small style = "font-size: 12px;width: 3px;">'.$xxx['time'].'</small>';
                        echo '<p>';
                        echo '<p>';
                        echo ' <span style = "font-size: 14px;">'.$xxx['comment'].'</span>';
                        
                        echo '<p align = "right">';
                        if($ttt['allow'] == 1){
                            echo '<a style = "text-decoration: underline" href="whatsapp://send?phone='.$xxx['telephone'].'&text=Hello,%20I%20am%20">Chat</a>    . '; 
                        } else {
                            echo '';
                        }
                        echo '<a style = "text-decoration: underline;" href="reply.php?id='.$xxx['id'].'"> Reply</a>'; 
                        echo '</div>'; 

                        
                        // Stage 8
                    $i_id = $xxx['id'];
                    $rrr = "select * from comment1 where to_id = '$i_id'";
                    $kkk = mysqli_query($conn, $rrr);
                    while($uio = mysqli_fetch_assoc($kkk)) {
                        echo '<div  style = "margin-left: 40%;margin-right: 2%;">';
                        echo '<div class = "w3-left">';
                        echo '<small><img style = "margin-right: 5px" src = "img/download.png" class = "w3-circle" width = "50px"></small>';
                        echo '</div>';
                        // echo '<small><img src = "img/download.png" class = "w3-circle" width = "70px"></small>';
                        echo '<b>  <span style = "font-size:13.5px">'.$uio['name'].'<span></b> <small style = "font-size: 12px;width: 3px;">'.$uio['time'].'</small>';
                        echo '<p>';
                        echo '<p>';
                        echo ' <span style = "font-size: 14px;">'.$uio['comment'].'</span>';
                        
                        echo '<p align = "right">';
                        if($uio['allow'] == 1){
                            echo '<a style = "text-decoration: underline" href="whatsapp://send?phone='.$uio['telephone'].'&text=Hello,%20I%20am%20">Chat</a>    . '; 
                        } else {
                            echo '';
                        }
                        echo '<a style = "text-decoration: underline;" href="reply.php?id='.$uio['id'].'"> Reply</a>'; 
                        echo '</div>';

                        // Stage 8
                    $j_id = $uio['id'];
                    $sss = "select * from comment1 where to_id = '$j_id'";
                    $jjj = mysqli_query($conn, $sss);
                    while($fff = mysqli_fetch_assoc($jjj)) {
                        echo '<div  style = "margin-left: 40%;margin-right: 2%;">';
                        echo '<div class = "w3-left">';
                        echo '<small><img style = "margin-right: 5px" src = "img/download.png" class = "w3-circle" width = "50px"></small>';
                        echo '</div>';
                        // echo '<small><img src = "img/download.png" class = "w3-circle" width = "70px"></small>';
                        echo '<b>  <span style = "font-size:13.5px">'.$fff['name'].'<span></b> <small style = "font-size: 12px;width: 3px;">'.$fff['time'].'</small>';
                        echo '<p>';
                        echo '<p>';
                        echo ' <span style = "font-size: 14px;">'.$fff['comment'].'</span>';
                        
                        echo '<p align = "right">';
                        if($fff['allow'] == 1){
                            echo '<a style = "text-decoration: underline" href="whatsapp://send?phone='.$fff['telephone'].'&text=Hello,%20I%20am%20">Chat</a>    . '; 
                        } else {
                            echo '';
                        }
                        echo '<a style = "text-decoration: underline;" href="reply.php?id='.$fff['id'].'"> Reply</a>'; 
                        echo '</div>';


                         // Stage 8
                    $k_id = $fff['id'];
                    $der = "select * from comment1 where to_id = '$k_id'";
                    $gdf = mysqli_query($conn, $der);
                    while($fsf = mysqli_fetch_assoc($gdf)) {
                        echo '<div  style = "margin-left: 40%;margin-right: 2%;">';
                        echo '<div class = "w3-left">';
                        echo '<small><img style = "margin-right: 5px" src = "img/download.png" class = "w3-circle" width = "50px"></small>';
                        echo '</div>';
                        // echo '<small><img src = "img/download.png" class = "w3-circle" width = "70px"></small>';
                        echo '<b>  <span style = "font-size:13.5px">'.$fsf['name'].'<span></b> <small style = "font-size: 12px;width: 3px;">'.$fsf['time'].'</small>';
                        echo '<p>';
                        echo '<p>';
                        echo ' <span style = "font-size: 14px;">'.$fsf['comment'].'</span>';
                        
                        echo '<p align = "right">';
                        if($fsf['allow'] == 1){
                            echo '<a style = "text-decoration: underline" href="whatsapp://send?phone='.$fsf['telephone'].'&text=Hello,%20I%20am%20">Chat</a>    . '; 
                        } else {
                            echo '';
                        }
                        echo '<a style = "text-decoration: underline;" href="reply.php?id='.$fsf['id'].'"> Reply</a>'; 
                        echo '</div>';

                              // Stage 8
                    $l_id = $fsf['id'];
                    $gra = "select * from comment1 where to_id = '$l_id'";
                    $sefe = mysqli_query($conn, $gra);
                    while($seedw = mysqli_fetch_assoc($sefe)) {
                        echo '<div  style = "margin-left: 40%;margin-right: 2%;">';
                        echo '<div class = "w3-left">';
                        echo '<small><img style = "margin-right: 5px" src = "img/download.png" class = "w3-circle" width = "50px"></small>';
                        echo '</div>';
                        // echo '<small><img src = "img/download.png" class = "w3-circle" width = "70px"></small>';
                        echo '<b>  <span style = "font-size:13.5px">'.$seedw['name'].'<span></b> <small style = "font-size: 12px;width: 3px;">'.$seedw['time'].'</small>';
                        echo '<p>';
                        echo '<p>';
                        echo ' <span style = "font-size: 14px;">'.$seedw['comment'].'</span>';
                        
                        echo '<p align = "right">';
                        if($seedw['allow'] == 1){
                            echo '<a style = "text-decoration: underline" href="whatsapp://send?phone='.$seedw['telephone'].'&text=Hello,%20I%20am%20">Chat</a>    . '; 
                        } else {
                            echo '';
                        }
                        echo '<a style = "text-decoration: underline;" href="reply.php?id='.$seedw['id'].'"> Reply</a>'; 
                        echo '</div>';


                                     // Stage 9
                    $u_id = $seedw['id'];
                    $dndf = "select * from comment1 where to_id = '$u_id'";
                    $herter = mysqli_query($conn, $dndf);
                    while($refef = mysqli_fetch_assoc($herter)) {
                        echo '<div  style = "margin-left: 40%;margin-right: 2%;">';
                        echo '<div class = "w3-left">';
                        echo '<small><img style = "margin-right: 5px" src = "img/download.png" class = "w3-circle" width = "50px"></small>';
                        echo '</div>';
                        // echo '<small><img src = "img/download.png" class = "w3-circle" width = "70px"></small>';
                        echo '<b>  <span style = "font-size:13.5px">'.$refef['name'].'<span></b> <small style = "font-size: 12px;width: 3px;">'.$refef['time'].'</small>';
                        echo '<p>';
                        echo '<p>';
                        echo ' <span style = "font-size: 14px;">'.$refef['comment'].'</span>';
                        
                        echo '<p align = "right">';
                        if($refef['allow'] == 1){
                            echo '<a style = "text-decoration: underline" href="whatsapp://send?phone='.$refef['telephone'].'&text=Hello,%20I%20am%20">Chat</a>    . '; 
                        } else {
                            echo '';
                        }
                        echo '<a style = "text-decoration: underline;" href="reply.php?id='.$refef['id'].'"> Reply</a>'; 
                        echo '</div>';

                              // Stage 10
                    $v_id = $refef['id'];
                    $sfnbsj = "select * from comment1 where to_id = '$v_id'";
                    $redfefe = mysqli_query($conn, $sfnbsj);
                    while($sfnw = mysqli_fetch_assoc($herter)) {
                        echo '<div  style = "margin-left: 40%;margin-right: 2%;">';
                        echo '<div class = "w3-left">';
                        echo '<small><img style = "margin-right: 5px" src = "img/download.png" class = "w3-circle" width = "50px"></small>';
                        echo '</div>';
                        // echo '<small><img src = "img/download.png" class = "w3-circle" width = "70px"></small>';
                        echo '<b>  <span style = "font-size:13.5px">'.$sfnw['name'].'<span></b> <small style = "font-size: 12px;width: 3px;">'.$sfnw['time'].'</small>';
                        echo '<p>';
                        echo '<p>';
                        echo ' <span style = "font-size: 14px;">'.$sfnw['comment'].'</span>';
                        
                        echo '<p align = "right">';
                        if($sfnw['allow'] == 1){
                            echo '<a style = "text-decoration: underline" href="whatsapp://send?phone='.$sfnw['telephone'].'&text=Hello,%20I%20am%20">Chat</a>    . '; 
                        } else {
                            echo '';
                        }
                        echo '<a style = "text-decoration: underline;" href="reply.php?id='.$sfnw['id'].'"> Reply</a>'; 
                        echo '</div>';

                    }
                    }

                    }
                    }


                    }



                    
                    }




                    }



                    }   
                    }
                    }
                    }
                }
                }
            }
            // div here
            echo '</div><br><br>';
        }
        }
    
?>
<?php
    // include 'inc/foot.php';
?>