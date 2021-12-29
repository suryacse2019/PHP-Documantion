<?php
$data=array(
'name'=>'Suraj Yadav',
'class'=>'cs',
'college'=>'gp aurai',
);

echo <<<FORM

<h1>Student form</h1>
<hr/>
<form>
	<p>
	name:<input type="text" value="{$data['name']}">
	</p>
	<p>
	class:<input type="text" value="{$data['class']}">
	</p>
	<p>
	college:<input type="text" value="{$data['college']}">
	</p>
</form>

FORM;