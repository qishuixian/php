<?php 
require_once '../include.php';
checkLogined();
$act=$_REQUEST['act'];
$id=$_REQUEST['id'];
if($act=="logout"){
	logout();
}elseif($act=="addAdmin"){
	$mes=addAdmin();
}elseif($act=="editAdmin"){
	$mes=editAdmin($id);
}elseif($act=="delAdmin"){
	$mes=delAdmin($id);
}elseif($act=="addShunnan"){
	$mes=addShunnan();
}elseif($act=="editShunnan"){
	$where="id={$id}";
	$mes=editShunnan($where);
}elseif($act=="delShunnan"){
	$mes=delShunnan($id);
}elseif($act=="addZhaopin"){
	$mes=addZhaopin();
}elseif($act=="editZhaopin"){
	$where="id={$id}";
	$mes=editZhaopin($where);
}elseif($act=="delZhaopin"){
	$mes=delZhaopin($id);
}elseif($act=="addHuodon"){
	$mes=addHuodon();
}elseif($act=="editHuodon"){
	$where="id={$id}";
	$mes=editHuodon($where);
}elseif($act=="delHuodon"){
	$mes=delHuodon($id);
}elseif($act=="addShangpinCate"){
	$mes=addShangpinCate();
}elseif($act=="editShangpinCate"){
	$where="id={$id}";
	$mes=editShangpinCate($where);
}elseif($act=="delShangpinCate"){
	$mes=delShangpinCate($id);
}elseif($act=="addShangpin"){
	$mes=addShangpin();
}elseif($act=="editShangpin"){
	$mes=editShangpin($id);
}elseif($act=="delShangpin"){
	$mes=delShangpin($id);
}elseif($act=="addMe"){
	$mes=addMe();
}elseif($act=="editMe"){
	$where="id={$id}";
	$mes=editMe($where);
}elseif($act=="delMe"){
	$mes=delMe($id);
}elseif($act=="addHudon"){
	$mes=addHudon();
}elseif($act=="editHudon"){
	$where="id={$id}";
	$mes=editHudon($where);
}elseif($act=="delHudon"){
	$mes=delHudon($id);
}elseif($act=="addrencai"){
	$mes=addrencai();
}elseif($act=="editrencai"){
	$where="id={$id}";
	$mes=editrencai($where);
}elseif($act=="delrencai"){
	$mes=delrencai($id);
}elseif($act=="addrencaishenghuo"){
	$mes=addrencaishenghuo();
}elseif($act=="editrencaishenghuo"){
	$where="id={$id}";
	$mes=editrencaishenghuo($where);
}elseif($act=="delrencaishenghuo"){
	$mes=delrencaishenghuo($id);
}elseif($act=="addrencaifazhan"){
	$mes=addrencaifazhan();
}elseif($act=="editrencaifazhan"){
	$where="id={$id}";
	$mes=editrencaifazhan($where);
}elseif($act=="delrencaifazhan"){
	$mes=delrencaifazhan($id);
}elseif($act=="addgonsi"){
	$mes=addgonsi();
}elseif($act=="editgonsi"){
	$where="id={$id}";
	$mes=editgonsi($where);
}elseif($act=="delgonsi"){
	$mes=delgonsi($id);
}elseif($act=="addgonsiwenhua"){
	$mes=addgonsiwenhua();
}elseif($act=="editgonsiwenhua"){
	$where="id={$id}";
	$mes=editgonsiwenhua($where);
}elseif($act=="delgonsiwenhua"){
	$mes=delgonsiwenhua($id);
}elseif($act=="addgonsironyi"){
	$mes=addgonsironyi();
}elseif($act=="editgonsironyi"){
	$where="id={$id}";
	$mes=editgonsironyi($where);
}elseif($act=="delgonsironyi"){
	$mes=delgonsironyi($id);
}elseif($act=="addgonsieven"){
	$mes=addgonsieven();
}elseif($act=="editgonsieven"){
	$where="id={$id}";
	$mes=editgonsieven($where);
}elseif($act=="delgonsieven"){
	$mes=delgonsieven($id);
}elseif($act=="addJdtuku"){
	$mes=addJdtuku();
}elseif($act=="delJdtuku"){
		$mes=delJdtuku($id);
}elseif($act=="editJdtuku"){
	$mes=editJdtuku($id);	
}elseif($act=="addshangjia"){
	$mes=addshangjia();
}elseif($act=="delshangjia"){
		$mes=delshangjia($id);
}elseif($act=="editshangjia"){
	$mes=editshangjia($id);	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php 
	if($mes){
		echo $mes;
	}
?>
</body>
</html>