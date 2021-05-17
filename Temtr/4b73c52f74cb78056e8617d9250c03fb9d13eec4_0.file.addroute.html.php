<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-06 09:46:56
  from '/var/www/html/Template/addroute.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_606c2e10e19f86_34859046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b73c52f74cb78056e8617d9250c03fb9d13eec4' => 
    array (
      0 => '/var/www/html/Template/addroute.html',
      1 => 1617702404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606c2e10e19f86_34859046 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加路由</title>
</head>
<form id="route_status">
    <input type="text" id="route_name" name="route_name">
    <?php if (is_array($_smarty_tpl->tpl_vars['dir1']->value)) {?>
        <select name="dir1" id="dir1" onchange="get_dir(1)">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dir1']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <select name="dir2" id="dir2" onchange="get_dir(2)">

        </select>
    <select name="dir3" id="dir3" onchange="get_dir(3)">

    </select>
    <?php }?>
</form>
</html>
<?php echo '<script'; ?>
>
    function get_dir(num) {
        // var dir=document.getElementById("dir"+num);
        var form=document.getElementById("route_status");
        var formData=new FormData(form);
        var httpRequest = new XMLHttpRequest();
        var dir_new="";
        for(var i=1;i<num+1;i++){
            dir_new=dir_new+formData.get("dir"+i)+"/";
        }
        httpRequest.open("GET","<?php echo @constant('SITE_IP');?>
/get_new_dir?dir="+"<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
"+dir_new);
        httpRequest.send();
        // console.log("<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
"+dir_new);
        httpRequest.onreadystatechange = function () {
            // console.log(1);
            if (httpRequest.readyState == 4 && httpRequest.status == 200) {
                var result = httpRequest.responseText;
                // document.write(result);
                // console.log(2);
                var o = eval("(" + result + ")");
                for(var e=0;e<result.length;e++){
                    var obj=document.getElementById('dir'+(num+1));
                    obj.options.add(new Option(o[e],o[e])); //这个只能在IE中有效
                }

                // document.write(json['item']);
                // document.write(o.item);
                // window.location.href="/feedback?item=" + o.item;
            }
        }
    }
<?php echo '</script'; ?>
>
<?php }
}
