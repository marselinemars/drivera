<?php

include("init.php");

//deleted the part that force you to login if not 

include("modules/user.php");


//Modules to be accessed only by logged users...

include("modules/student.php");
include("modules/owner.php");


?>


