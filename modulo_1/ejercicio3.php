<?php
include($_SERVER['DOCUMENT_ROOT']."/PHP/header.php");
?>

<body>
    <h1>I'll guess what is your browser</h1>
    <?php
    echo $_SERVER['HTTP_USER_AGENT'];
    ?>
    <p>See the code to view the next result</p>
    
    <h2>method 1</h2>
    <?php
    //Here, I use echo function to print respect to function if
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE || strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE):
        echo '<p>Change inmediatly to navigator, this is obsolet.</p>';
    else:
        echo '<p>Good, you use a best navigator</p>';
    endif
    ?>
    
    <h2>method 2</h2>
    <?php
    //Here, I use a combination html to show navigator with function if
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE || strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE){
    ?>
    <p>Change inmediatly to navigator, this is obsolet.</p>
    <?php
    } else{
    ?>
    <p>Good, you use a best navigator</p>
    <?php
    }
    ?>

    <blockquote>Note: Remember Edge is not same to Explorer.</blockquote>

</body>