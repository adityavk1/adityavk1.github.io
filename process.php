Thanks, <?php
 @extract($_POST);
 $sub="Form feedback";
 $name = stripslashes($name);
 $email = stripslashes($email);
 mail('adityavka@yahoo.com',$sub,"$name $email","From: $name <adityavka@yahoo.com>");
 echo stripslashes($name);
 ?> , we will drop you a line shortly. 