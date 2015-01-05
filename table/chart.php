<?php
$arr = array(
	array('type'=>'Mentoring', 'month'=>'April', 'status'=>'Open', 'amount'=>'60'),
	array('type'=>'Mentoring', 'month'=>'April', 'status'=>'In Progress', 'amount'=>'40'),
	array('type'=>'Mentoring', 'month'=>'April', 'status'=>'Close', 'amount'=>'50'),
	
	array('type'=>'Mentoring', 'month'=>'May', 'status'=>'Open', 'amount'=>'30'),
	array('type'=>'Mentoring', 'month'=>'May', 'status'=>'In Progress', 'amount'=>'60'),
	array('type'=>'Mentoring', 'month'=>'May', 'status'=>'Close', 'amount'=>'50'),
	
	array('type'=>'Funding', 'month'=>'April', 'status'=>'Open', 'amount'=> '100'),
	array('type'=>'Funding', 'month'=>'April', 'status'=>'In Progress', 'amount'=>'60'),
	array('type'=>'Funding', 'month'=>'April', 'status'=>'Close', 'amount'=>'70'),
	
	array('type'=>'Funding', 'month'=>'May', 'status'=>'Open', 'amount'=>'60'),
	array('type'=>'Funding', 'month'=>'May', 'status'=>'In Progress', 'amount'=>'100'),
	array('type'=>'Funding', 'month'=>'May', 'status'=>'Close', 'amount'=>'70'),
	
	array('type'=>'Validation Program', 'month'=>'April', 'status'=>'Open', 'amount'=>'70'),
	array('type'=>'Validation Program', 'month'=>'April', 'status'=>'In Progress', 'amount'=>'30'),
	array('type'=>'Validation Program', 'month'=>'April', 'status'=>'Close', 'amount'=>'40'),
	
	array('type'=>'Validation Program', 'month'=>'May', 'status'=>'Open', 'amount'=>'30'),
	array('type'=>'Validation Program', 'month'=>'May', 'status'=>'In Progress', 'amount'=>'70'),
	array('type'=>'Validation Program', 'month'=>'May', 'status'=>'Close', 'amount'=>'40'),
	
	array('type'=>'Incubation', 'month'=>'April', 'status'=>'Open', 'amount'=>'40'),
	array('type'=>'Incubation', 'month'=>'April', 'status'=>'In Progress', 'amount'=>'70'),
	array('type'=>'Incubation', 'month'=>'April', 'status'=>'Close', 'amount'=>'50'),
	
	array('type'=>'Incubation', 'month'=>'May', 'status'=>'Open', 'amount'=>'70'),
	array('type'=>'Incubation', 'month'=>'May', 'status'=>'In Progress', 'amount'=>'40'),
	array('type'=>'Incubation', 'month'=>'May', 'status'=>'Close', 'amount'=>'50'),
	
	array('type'=>'pre-Incubation', 'month'=>'April', 'status'=>'Open', 'amount'=>'60'),
	array('type'=>'pre-Incubation', 'month'=>'April', 'status'=>'In Progress', 'amount'=>'80'),
	array('type'=>'pre-Incubation', 'month'=>'April', 'status'=>'Close', 'amount'=>'70'),
	
	array('type'=>'pre-Incubation', 'month'=>'May', 'status'=>'Open', 'amount'=>'80'),
	array('type'=>'pre-Incubation', 'month'=>'May', 'status'=>'In Progress', 'amount'=>'40'),
	array('type'=>'pre-Incubation', 'month'=>'May', 'status'=>'Close', 'amount'=>'70'),
	
	);
	header("Content-Type:application/json");
	echo ('[{"type":"PGP5","month":"April","status":"Occupied","amount":"10"},{"type":"PGP5","month":"April","status":"PGP5","amount":"25"},{"type":"Garag3","month":"April","status":"Occupied","amount":"10"},{"type":"Garag3","month":"April","status":"Garag3","amount":"35"},{"type":"Plug-In@Blk71","month":"April","status":"Occupied","amount":"5"},{"type":"Plug-In@Blk71","month":"April","status":"Plug-In@Blk71","amount":"45"},{"type":"PGP","month":"April","status":"Occupied","amount":"5"},{"type":"PGP","month":"April","status":"PGP","amount":"65"},{"type":"FOE","month":"April","status":"Occupied","amount":"5"},{"type":"FOE","month":"April","status":"FOE","amount":"75"},{"type":"Bik71 03-14","month":"May","status":"Occupied","amount":"10"},{"type":"Bik71 03-14","month":"May","status":"Bik71 03-14","amount":"15"},{"type":"PGP5","month":"May","status":"Occupied","amount":"14"},{"type":"PGP5","month":"May","status":"PGP5","amount":"25"},{"type":"Garag3","month":"May","status":"Occupied","amount":"23"},{"type":"Garag3","month":"May","status":"Garag3","amount":"35"},{"type":"Plug-In@Blk71","month":"May","status":"Occupied","amount":"6"},{"type":"Plug-In@Blk71","month":"May","status":"Plug-In@Blk71","amount":"45"},{"type":"PGP","month":"May","status":"Occupied","amount":"14"},{"type":"PGP","month":"May","status":"PGP","amount":"65"},{"type":"FOE","month":"May","status":"Occupied","amount":"25"},{"type":"FOE","month":"May","status":"FOE","amount":"75"}]');

?>





























