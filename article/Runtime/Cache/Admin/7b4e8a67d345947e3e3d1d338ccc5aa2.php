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
                <span style="float: left;">当前位置是：栏目管理-》栏目列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="/article/index.php/Admin/Type/tianjia">【添加栏目】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <div class="div_search">
                <span>
                栏目列表
                </span>
            </div>
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>栏目名称</td>
                        <td align="center" colspan="2">操作</td>
                    </tr>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr id="product1">
                            <td><?php echo ($data["id"]); ?></td>
                            <td><a href="#"><?php echo ($data["typename"]); ?></a></td>
                            <td><a href="/article/index.php/Admin/Type/xiugai/id/<?php echo ($data["id"]); ?>/typename/<?php echo ($data["typename"]); ?>">修改</a></td>
                            <td><a href="/article/index.php/Admin/Type/shanchu/id/<?php echo ($data["id"]); ?>" onclick="return confirm('你确定要删除这个栏目吗?');">删除</a></td>
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