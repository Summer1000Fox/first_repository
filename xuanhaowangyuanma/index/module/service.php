<?php
function module_service()
{
	global $smarty;
	$obj = new varia();
	$smarty->assign('service_code',$obj->get_value('service_code',true));
}
//E数云
?>