<?php 
require_once '../include.php';
checkLogined();
$order=$_REQUEST['order']?$_REQUEST['order']:null;
$orderBy=$order?"order by p.".$order:null;
$keywords=$_REQUEST['keywords']?$_REQUEST['keywords']:null;
$selectCate=$_REQUEST['shangpincate']?$_REQUEST['shangpincate']:null;
$where=$keywords?"where p.pName like '%{$keywords}%'":null;
$sc=$selectCate?"where c.cName like '%{$selectCate}%'":null;
//得到数据库中所有商品
$sql="select p.id,p.pName,p.status,p.news,p.pNum,p.hot,p.time,p.pDesc,c.cName from shangpin as p join cate c on p.cId=c.id {$where} {$sc} {$orderBy}";
$totalRows=getResultNum($sql);
$pageSize=5;
$totalPage=ceil($totalRows/$pageSize);
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
if($page<1||$page==null||!is_numeric($page))$page=1;
if($page>$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select p.id,p.pName,p.status,p.pNum,p.news,p.hot,p.time,p.pDesc,c.cName from shangpin as p join cate c on p.cId=c.id {$where} {$sc} {$orderBy} limit {$offset},{$pageSize}";
$rows=fetchAll($sql);
// 获取所有的分类
$ct="select * from cate";
$rw=fetchAll($ct);
// 如果选择的商品分类没有相应的商品信息时
$cname="select c.cName from shangpin as p join cate c on p.cId=c.id {$sc}";
$cnamerows=fetchAll($cname);
if(!$cnamerows){  
      echo "<script>alert('对不起，没有该商品分类的内容！！！请添加');
            window.location='addShangpin.php';</script>";
     exit();
}
if (!$cnamerows) {
    echo "<script>alert('对不起，没有该商品分类的内容！！！请添加');window.location='addShangpin.php';</script>";
}
// 如果搜搜没有相应的商品信息时
$sosoname="select p.pName from shangpin as p join cate c on p.cId=c.id {$where}";
$sosorows=fetchAll($sosoname);
if(!$sosorows){  
      echo "<script>alert('对不起，没有该商品的内容！！！请添加');
            window.location='addShangpin.php';</script>";
     exit();
}
if (!$sosorows) {
    echo "<script>alert('对不起，没有该商品的内容！！！请添加');
                window.location='addShangpin.php';</script>";
}

// echo $cnamerows;
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
                            <input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addShangpin()">
                        </div>
                        <div class="fr">
                            <div class="text">
                                <span>商品分类：</span>
                                <div class="bui_select">
                                    <select id="" class="select" onchange="change1(this.value)">
                                    	<option>-请选择-</option>
                                        <?php foreach($rw as $rw):?>
                                            <option value="<?php echo $rw['cName'];?> "><?php echo $rw['cName'];?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="text">
                                <span>上架时间：</span>
                                <div class="bui_select">
                                 <select id="" class="select" onchange="change(this.value)">
                                 	<option>-请选择-</option>
                                        <option value="time desc" >最新发布</option>
                                        <option value="time asc">历史发布</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text">
                                <span>搜索</span>
                                <input type="text" value="" class="search"  id="search" onkeypress="search()" >
                            </div>
                        </div>
                    </div>
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="10%">编号</th>
                                <th width="20%">商品名称</th>
                                <th width="10%">商品分类</th>
                                <th width="10%">最新上线商品</th>
                                <th width="10%">热销商品</th>
                                <th width="10%">是否上架</th>
                                <th width="15%">上架时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($rows as $row):?>
                            <tr  class="neiro">
                                <!--这里的id和for里面的c1 需要循环出来-->
                                <td><input type="checkbox" id="c<?php echo $row['id'];?>" class="check" value=<?php echo $row['id'];?>><label for="c1" class="label"><?php echo $row['id'];?></label></td>
                                <td><?php echo $row['pName']; ?></td>
                                <td><?php echo $row['cName'];?></td>
                                <td>
                                	<?php echo $row['news'];?>
                                </td>
                                <td>
                                    <?php echo $row['hot'];?>
                                </td>
                                <td>
                                    <?php echo $row['status'];?>
                                </td>
                                 <td><?php echo $row['time'];?></td>
                                <td align="center">
                    				<input type="button" value="详情" class="btn" onclick="showDetail(<?php echo $row['id'];?>,'<?php echo $row['pName'];?>')">
                                    <input type="button" value="修改" class="btn" onclick="editShangpin(<?php echo $row['id'];?>)"><input type="button" value="删除" class="btn"onclick="delShangpin(<?php echo $row['id'];?>)">
		                            <div id="showDetail<?php echo $row['id'];?>" style="display:none;">
    		                        	<table class="table" cellspacing="0" cellpadding="0">
    		                        		<tr>
    		                        			<td width="20%" align="right">商品名称</td>
    		                        			<td><?php echo $row['pName'];?></td>
    		                        		</tr>
    		                        		<tr>
    		                        			<td width="20%"  align="right">商品类别</td>
    		                        			<td><?php echo $row['cName'];?></td>
    		                        		</tr>
                                            <tr>
                                                <td width="20%"  align="right">商品销售量</td>
                                                <td><?php echo $row['pNum'];?></td>
                                            </tr>
    		                        		<tr>
    		                        			<td width="20%"  align="right">商品图片</td>
    		                        			<td>
    		                        			<?php 
    		                        			$proImgs=getAllImgByShangpinId($row['id']);
    		                        			foreach($proImgs as $img):
    		                        			?>
    		                        			<img width="100" height="100" src="uploads/<?php echo $img['albumPath'];?>" alt=""/> &nbsp;&nbsp;
    		                        			<?php endforeach;?>
    		                        			</td>
    		                        		</tr>
    		                        		<tr>
    		                        			<td width="20%"  align="right">最新上线商品</td>
    		                        			<td>
    		                        				<?php echo $row['news'];?>
    		                        			</td>
    		                        		</tr>
                                            <tr>
                                                <td width="20%"  align="right">热销商品</td>
                                                <td>
                                                     <?php echo $row['hot'];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="20%"  align="right">是否上架</td>
                                                <td>
                                                    <?php echo $row['status']?>
                                                </td>
                                            </tr>
    		                        	</table>
    		                        	<span style="display:block;width:80%; ">
    		                        	商品描述<br/>
    		                        	<?php echo $row['pDesc'];?>
    		                        	</span>
    		                        </div>
                                </td>
                            </tr>
                           <?php  endforeach;?>
                           <?php if($totalRows>$pageSize):?>
                            <tr>
                            	<td colspan="8"><?php echo showPage($page, $totalPage,"keywords={$keywords}&order={$order}&shangpincate={$selectCate}");?></td>
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
function addShangpin(){
        window.location='addShangpin.php';
    }
    function editShangpin(id){
        window.location='editShangpin.php?id='+id;
    }
    function delShangpin(id){
        if(window.confirm("您确认要删除嘛？添加一次不易，且删且珍惜!")){
            window.location="doAdminAction.php?act=delShangpin&id="+id;
        }
    }
    function search(){
        if(event.keyCode==13){
            var val=document.getElementById("search").value;
            if (val.length>0) {
            window.location="lisShangpin.php?keywords="+val;
            }else{
                alert("对不起，不能为空！！！请重新输入");
                window.location="lisShangpin.php";
            }
        }
    }
    function change(val){
        window.location="lisShangpin.php?order="+val;
    }
    function change1(val){
        window.location="lisShangpin.php?shangpincate="+val;
    }
</script>
</body>
</html>