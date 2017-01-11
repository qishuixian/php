<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改管理员</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo ADMIN_CSS ?>mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：管理员管理-》修改管理员信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="/article/index.php/Admin/Admin/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action=" " method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>管理员名称</td>
                    <td>
                        <input type="text" name="user" value="<?php echo ($admin); ?>" />
                        <input type="hidden" name="id" value="<?php echo ($adminId); ?>" />
                    </td>
                </tr>
                <tr>
                    <td>管理员密码</td>
                    <td>
                        <input type="text" name="password" value="" />
                    </td>
                </tr>                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html>