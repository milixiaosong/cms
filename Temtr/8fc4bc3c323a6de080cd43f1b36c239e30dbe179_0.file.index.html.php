<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-26 06:48:39
  from '/var/www/html/Template/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_605d83c7e72ec8_95485195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fc4bc3c323a6de080cd43f1b36c239e30dbe179' => 
    array (
      0 => '/var/www/html/Template/index.html',
      1 => 1616738216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605d83c7e72ec8_95485195 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>弥离@小颂</title>
    <meta name="keywords" content="弥离小颂">
    <meta name="description" content="小颂的个人网站">
    <meta name="fragment" content="!">
    <meta name='robots' content='index,follow'/>
    <link rel='stylesheet' id='generalStyle-css' href="<?php echo @constant('TPL_URL');?>
css/style_light.css"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='contentFont-css'
          href='http://fonts.googleapis.com/css?family=PT+Sans:regular&amp;subset=cyrillic,latin' type='text/css'
          media='all'/>
    <link id='headerFont-css' href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'/>
    <link rel='stylesheet' id='modal-css' href='<?php echo @constant('TPL_URL');?>
js/prettyPhoto/css/prettyPhoto.css' type='text/css' media='all'/>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo @constant('TPL_URL');?>
js/jquery-1.7.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo @constant('TPL_URL');?>
js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo @constant('TPL_URL');?>
js/prettyPhoto/js/jquery.prettyPhoto.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo @constant('TPL_URL');?>
js/jquery.quicksand.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('TPL_URL');?>
js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('TPL_URL');?>
js/jquery.history.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo @constant('TPL_URL');?>
js/main.js"><?php echo '</script'; ?>
>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <?php echo '<script'; ?>
 type='text/javascript'>
        var bgTime = 5000;
        var bgPaused = false;
        var menuTime = 600;
        var autoPlay = true;
        var loop = true;
        var twtTime = 3000;
        var prettyTheme = 'light_square';

        var normalFade = false;
        var frontPage = '';
        var btnSoundURL = 'http://files.renklibeyaz.com/sounds/button2';
        var menuPositionFixed = false;

        var videoPaused = false;
        var menuAlwaysOpen = false;
        var bgStretch = true;
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo @constant('TPL_URL');?>
js/froogaloop.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id="body-wrapper">

    <div id="bgImage">
        <div id="bgImageWrapper"></div>
    </div>
    <div id="bgPattern"></div>
    <div id="bgText"><h3></h3>
        <div class="subText"></div>
    </div>
    <div id="content">
        <div id="contentBox"></div>
        <div id="contentLoading">
            <div id="CtLoading">
                Loading<br/>
                <img src="<?php echo @constant('TPL_URL');?>
images/loading1.gif" width="80" height="10" alt=""/>
            </div>
        </div>
    </div>

    <ul id="bgImages">
        <li>
            <img class="thumb" src="<?php echo @constant('TPL_URL');?>
images/background/bg1_th.jpg" alt=""/>
            <img class="source" src="<?php echo @constant('TPL_URL');?>
images/background/bg1.jpg" alt=""/>
            <h3>樱花庄的宠物女孩</h3>
            <p>樱花庄中绽放的笑颜，完全不落于盛开的樱花</p>
        </li>
        <li>
            <img class="thumb" src="<?php echo @constant('TPL_URL');?>
images/background/bg2_th.jpg" alt=""/>
            <img class="source" src="<?php echo @constant('TPL_URL');?>
images/background/bg2.jpg" alt=""/>
            <h3>缘之空</h3>
            <p>我永远喜欢春日野穹</p>
        </li>
        <li>
            <img class="thumb" src="<?php echo @constant('TPL_URL');?>
images/background/bg3_th.jpg" alt=""/>
            <img class="source" src="<?php echo @constant('TPL_URL');?>
images/background/bg3.jpg" alt=""/>
            <h3>DARLING in the FRANXX</h3>
            <p>呐！Darling！</p>
        </li>
        <li>
            <img class="thumb" src="<?php echo @constant('TPL_URL');?>
images/background/bg4_th.jpg" alt=""/>
            <img class="source" src="<?php echo @constant('TPL_URL');?>
images/background/bg4.jpg" alt=""/>
            <h3>境界的彼方</h3>
            <p>世界的另一头，境界的彼方。</p>
        </li>
        <li>
            <img class="thumb" src="<?php echo @constant('TPL_URL');?>
images/background/bg5_th.jpg" alt=""/>
            <img class="source" src="<?php echo @constant('TPL_URL');?>
images/background/bg5.jpg" alt=""/>
            <h3>血源：诅咒</h3>
            <p>她坐着，像睡着了似的，守护着那个不为人知的秘密</p>
        </li>
        <li>
            <img class="thumb" src="<?php echo @constant('TPL_URL');?>
images/background/bg6_th.jpg" alt=""/>
            <img class="source" src="<?php echo @constant('TPL_URL');?>
images/background/bg6.jpg" alt=""/>
            <h3>游戏人生</h3>
            <p>向盟约宣誓。。。</p>
        </li>
        <li>
            <img class="thumb" src="<?php echo @constant('TPL_URL');?>
images/background/bg7_th.jpg" alt=""/>
            <img class="source" src="<?php echo @constant('TPL_URL');?>
images/background/bg7.jpg" alt=""/>
            <h3>伪恋</h3>
            <p></p>
        </li>
        <li>
            <img class="thumb" src="<?php echo @constant('TPL_URL');?>
images/background/bg8_th.jpg" alt=""/>
            <img class="source" src="<?php echo @constant('TPL_URL');?>
images/background/bg8.jpg" alt=""/>
            <h3>素材来源</h3>
            <p>樱花庄的宠物女孩，伪恋，从零开始的异世界生活，缘之空，游戏人生，血源：诅咒，境界的彼方，Angel Beats，DARLING in the FRANXX。</p>
        </li>
        <li>
            <img class="thumb" src="<?php echo @constant('TPL_URL');?>
images/background/bg9_th.jpg" alt=""/>
            <img class="source" src="<?php echo @constant('TPL_URL');?>
images/background/bg9.jpg" alt=""/>
            <h3>Re:从零开始的异世界生活</h3>
            <p>有一种爱叫作无论再来多少次,就算你已忘记我,我仍然爱着你</p>
        </li>
        <li>
            <img class="thumb" src="<?php echo @constant('TPL_URL');?>
background/bg10_th.jpg" alt=""/>
            <img class="source" src="<?php echo @constant('TPL_URL');?>
background/bg10.jpg" alt=""/>
            <h3>Angel Beats</h3>
            <p>即使消失了。。存在的痕迹也会留下。。。</p>
        </li>
    </ul>

    <div id="menu-container">
        <div id="logo">
            <img src="<?php echo @constant('TPL_URL');?>
images/headphoto.jpg" title="弥离@小颂"/>
        </div>
        <div id="mainmenu">
            <div class="menu-header">
                <ul id="menu-main-menu" class="menu">
                    <li id="menu-item-1">
                        <a href="/"><span class="title">HOME</span></a>
                    </li>
                    <li id="menu-item-2">
                        <a href="/"><span class="title">论坛</span></a>

                    </li>
                    <li id="menu-item-3">
                        <a href="/"><span class="title">萌站</span></a>
                    </li>
                    <li id="menu-item-4">
                        <a href="/" target="_blank"><span class="title">博客</span></a>
                    </li>
                    <li id="menu-item-5">
                        <a href="/"><span class="title">加群</span></a>

                    </li>
                    <li id="menu-item-6"><a href="/"><span class="title">联系站长</span></a></li>
                </ul>
            </div>
        </div>
        <div id="menuOpener">MOE</div>
        <div id="menuCloser">CLOSE</div>
    </div>

    <div id="audioControls">
        <a class="btn prev" href="javascript:void(0);"></a>
        <a class="btn play" href="javascript:void(0);"></a>
        <a class="btn pause" href="javascript:void(0);"></a>
        <a class="btn next" href="javascript:void(0);"></a>
    </div>

    <div id="footer">
        <div id="footertext"> Copyright &copy; 2020 | 弥离@小颂</div>
        <bgsound src="mengzhan.mp3" loop="-1"></bgsound>
            <div id="bgControl">
                <a class="prev" href="javascript:void(0);" onClick="prevBg()"></a>
                <a class="play" href="javascript:void(0);" onClick="playBg()"></a>
                <a class="pause" href="javascript:void(0);" onClick="pauseBg()"></a>
                <a class="next" href="javascript:void(0);" onClick="nextBg()"></a>
            </div>
            <div id="share">
                <ul>
                </ul>
            </div>

    </div>
    <div id="bodyLoading">
        <div id="loading">
            正在加载中。。。<br/>
            <img src="<?php echo @constant('TPL_URL');?>
images/loading1.gif" width="200" height="" alt="loading"/>
        </div>
    </div>
</div>
</body>
</html><?php }
}
