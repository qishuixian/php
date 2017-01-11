<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="<?php echo ADMIN_CSS ?>mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：文章管理-》文章列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="/article/index.php/Admin/Article/tianjia">【添加文章】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="post">
                    文章类型<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody>
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>文章名称</td>
                        <td>所属分类</td>
                        <td>作者</td>
                        <td>缩略图</td>
                        <td style="text-align: center;" colspan="2">操作</td>
                    </tr>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($data["id"]); ?></td>
                        <td><a href="#"><?php echo ($data["title"]); ?></a></td>
                        <td><?php echo ($data["typename"]); ?></td>
                        <td><?php echo ($data["author"]); ?></td>
                        <td>
                        <?php if($data['pic'] != ''): ?><img src="/article<?php echo ($data["pic"]); ?>" height="40" width="40">
                        <?php else: ?>
                        <span color="#ccc"> 暂无缩略图 </span><?php endif; ?>
                        </td>
                        <td><a href="/article/index.php/Admin/Article/xiugai/id/<?php echo ($data["id"]); ?>">修改</a></td>
                        <td><a href="/article/index.php/Admin/Article/shanchu/id/<?php echo ($data["id"]); ?>" onclick="return confirm('你确定要删除这篇文章吗?');">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <?php echo ($page); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>