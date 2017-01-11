<?php 
require_once '../include.php';
checkLogined();
//得到数据库中焦点图
$sql="select id,title,tuku,time,status,href from jdtuku";
$totalRows=getResultNum($sql);
$pageSize=5;
$totalPage=ceil($totalRows/$pageSize);
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
if($page<1||$page==null||!is_numeric($page))$page=1;
if($page>$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select id,title,tuku,time,status,href from jdtuku limit {$offset},{$pageSize}";
$rows=fetchAll($sql);
if(!$rows){
    alertMes("sorry,没有信息,请添加!","addJdtuku.php");
    exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link rel="stylesheet" href="styles/backstage.css">
<link rel="stylesheet" href="scripts/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
<script src="scripts/jquery-ui/js/jquery-1.10.2.js"></script>
<script src="scripts/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="scripts/jquery-ui/js/jquery-ui-1.10.4.custom.min.js"></script>
</head>

<body>
<div id="showDetail"  style="display:none;">

</div>
<div class="details">
                    <div class="details_operation clearfix">
                        <div class="bui_select">
                            <input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addJdtuku()">
                        </div>
                    </div>
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="10%">编号</th>
                                <th width="20%" >名称</th>
                                <th width="20%">图像</th>
                                <th width="20%">点击跳转链接</th>
                                <th width="20%">是否上线</th>
                                <th width="15%">上架时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($rows as $row):?>
                            <tr  class="neiro">
                                <!--这里的id和for里面的c1 需要循环出来-->
                                <td><input type="checkbox" id="c<?php echo $row['id'];?>" class="check" value=<?php echo $row['id'];?>><label for="c1" class="label"><?php echo $row['id'];?></label></td>
                                <td><p style="max-width: 300px;display: inline-block;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><?php echo $row['title']; ?></p></td>
                                <td>
                                    <?php 
                                    $proImgs=getAllImgByJdtukuId($row['id']);
                                    foreach($proImgs as $img):
                                    ?>
                                    <img width="100" height="100" src="uploads/<?php echo $img['albumPath'];?>" alt=""/> &nbsp;&nbsp;
                                    <?php endforeach;?>
                                </td>
                                <td style="text-align: center;"><?php echo $row['href'];?></td>
                                <td style="text-align: center;"><?php echo $row['status'];?></td>
                                 <td><?php echo $row['time'];?></td>
                                <td align="center">
                                    <input type="button" value="修改" class="btn" onclick="editJdtuku(<?php echo $row['id'];?>)"><input type="button" value="删除" class="btn"onclick="delJdtuku(<?php echo $row['id'];?>)">
                                </td>
                            </tr>
                           <?php  endforeach;?>
                           <?php if($totalRows>$pageSize):?>
                            <tr>
                                <td colspan="7"><?php echo showPage($page, $totalPage,"keywords={$sc}{$keywords}&order={$order}");?></td>
                            </tr>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
<script type="text/javascript">
function showDetail(id,t){
    $("#showDetail"+id).dialog({
          height:"auto",
          width: "auto",
          position: {my: "center", at: "center",  collision:"fit"},
          modal:false,//是否模式对话框
          draggable:true,//是否允许拖拽
          resizable:true,//是否允许拖动
          title:"商品名称："+t,//对话框标题
          show:"slide",
          hide:"explode"
    });
}
    function addJdtuku(){
        window.location='addJdtuku.php';
    }
    function editJdtuku(id){
        window.location='editJdtuku.php?id='+id;
    }
    function delJdtuku(id){
        if(window.confirm("您确认要删除嘛？添加一次不易，且删且珍惜!")){
            window.location="doAdminAction.php?act=delJdtuku&id="+id;
        }
    }
    function search(){
        if(event.keyCode==13){
            var val=document.getElementById("search").value;
            if (val.length>0) {
            window.location="lisJdtuku.php?keywords="+val;
            }else{
                alert("对不起，不能为空！！！请重新输入");
                window.location="lisJdtuku.php";
            }
        }
    }
    function change(val){
        window.location="lisJdtuku.php?order="+val;
    }
    function change1(val){
        window.location="lisJdtuku.php?cate="+val;
    }
</script>
</body>
</html>