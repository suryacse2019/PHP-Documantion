<?php
function input($msg=''){
	if(msg==''){
		exit('messege is require');
}
echo $msg;
$input=fgets(STDIN,1024);
return trim($input);
}
?>