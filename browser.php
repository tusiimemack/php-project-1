<html>
    <head></head>
    <body>
        <?php
        echo $_SERVER['HTTP_USER_AGENT']
        ?>
    </body>
 </html>  
 if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
       strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE ||
       strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE ){
           echo 'you are using internet explorer.<br/>';