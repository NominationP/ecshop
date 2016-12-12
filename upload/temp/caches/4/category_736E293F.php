<?php exit;?>a:3:{s:8:"template";a:8:{i:0;s:67:"/var/www/html/ecshop/upload/themes/ecmoban_tianmao2016/category.dwt";i:1;s:78:"/var/www/html/ecshop/upload/themes/ecmoban_tianmao2016/library/page_header.lbi";i:2;s:74:"/var/www/html/ecshop/upload/themes/ecmoban_tianmao2016/library/ur_here.lbi";i:3;s:80:"/var/www/html/ecshop/upload/themes/ecmoban_tianmao2016/library/category_tree.lbi";i:4;s:74:"/var/www/html/ecshop/upload/themes/ecmoban_tianmao2016/library/history.lbi";i:5;s:77:"/var/www/html/ecshop/upload/themes/ecmoban_tianmao2016/library/goods_list.lbi";i:6;s:72:"/var/www/html/ecshop/upload/themes/ecmoban_tianmao2016/library/pages.lbi";i:7;s:78:"/var/www/html/ecshop/upload/themes/ecmoban_tianmao2016/library/page_footer.lbi";}s:7:"expires";i:1481530282;s:8:"maketime";i:1481526682;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>手机配件_ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/ecmoban_tianmao2016/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/global.js"></script><script type="text/javascript" src="js/compare.js"></script></head>
<body>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/transport_jquery.js"></script><script type="text/javascript" src="js/utils.js"></script><script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
//设为首页 www.ecmoban.com
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
<div class="header-nav">
    <div class="block">
        <a href="index.php" class="fl gotoindex" style="margin-right:15px;"><i class="iconfont">&#xe624;</i> 天猫首页</a>
        
        <p class="header-login-info">
            554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca        </p>
        
        <ul class="ul-quick-menu">
            <li class="li-my menu-item">
                <a href="user.php"  class="menu-hd my_user">我的天猫<b></b></a>
                <div class="menu-bd">
                    <a href="user.php?act=order_list">我的订单</a>
                    <a href="user.php?act=account_log">我的余额</a>
                    <a href="user.php?act=collection_list" >我的收藏</a>
                    <a href="user.php?act=bonus">我的红包</a>
                </div>
            </li>
            <li class="li-cart" id="ECS_CARTINFO">
                <a href="flow.php">购物车</a>&nbsp;554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca            </li>
            <li class="li-sep"></li>
            <li class="li-mobile">
                <i class="iconfont">&#xe615;</i>
                <a href="">手机版</a>
                <div class="mobile-qr">
                    <div class="qrcode-bg"></div>
                    <p>扫一扫，访问手机版</p>
                    <b></b>
                </div>
            </li>
                                    <li class="li-home">
                <a href="flow.php">查看购物车</a>
            </li>
                        <li class="li-home">
                <a href="pick_out.php">选购中心</a>
            </li>
                        <li class="li-home">
                <a href="tag_cloud.php">标签云</a>
            </li>
                        <li class="li-home">
                <a href="quotation.php">报价单</a>
            </li>
                                    <li class="li-sitemap menu-item">
                <h3 class="menu-hd"><i class="iconfont">&#xe607;</i><span>网站导航</span><b></b></h3>
                <div class="menu-bd block">
                    <div class="site-cate site-hot">
                        <h2>热点推荐<span>Hot</span></h2>
                        <ul>
                            <li><a href="group_buy.php" target="_blank">最新团购</a></li>
                            <li><a href="auction.php" target="_blank">拍卖会</a></li>
                            <li><a href="snatch.php" target="_blank">夺宝岛<i class="sitemap-icon sitemap-icon-new"></i></a></li>
                            <li><a href="activity.php" target="_blank">优惠活动<i class="sitemap-icon sitemap-icon-hot"></i></a></li>
                            <li><a href="package.php" target="_blank">超值礼包</a></li>
                            <li><a href="brand.php" target="_blank">品牌街<i class="sitemap-icon sitemap-icon-hot"></i></a></li>
                            <li><a href="search.php" target="_blank">随便看看</a></li>
                            <li><a href="message.php" target="_blank">喵言喵语</a></li>
                            <li><a href="user.php" target="_blank">会员中心</a></li>
                            <li><a href="" target="_blank">商创国际</a></li>
                        </ul>
                    </div>
                    <div class="site-cate site-market">
                        <h2>行业市场<span>Market</span></h2>
                        <ul>
                                                    <li><a href="category.php?id=1">手机类型</a></li>
                                                    <li><a href="category.php?id=6">手机配件</a></li>
                                                    <li><a href="category.php?id=12">充值卡</a></li>
                                                </ul>
                    </div>
                    <div class="site-cate site-brand">
                        <h2>品牌风尚<span>Brand</span></h2>
                        <ul>
                            <li><a href="">尚天猫</a></li>
                            <li><a href="">大牌街</a></li>
                            <li><a href="">潮牌街</a></li>
                            <li><a href="">天猫原创</a></li>
                            <li><a href="">什么牌子好</a></li>
                        </ul>
                    </div>
                    <div class="site-cate site-help">
                        <h2>服务指南<span>Help</span></h2>
                        <ul>
                            <li><a href="">帮助中心</a></li>
                            <li><a href="">品质保障</a></li>
                            <li><a href="">特色服务</a></li>
                            <li><a href="">7天退换货</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="header-main">
    <div class="block">
        <div class="header-logo header-logo-index">
            <a href="index.php"><img src="themes/ecmoban_tianmao2016/images/logo.gif" alt=""></a>
        </div>
        <div class="header-banner">
            554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:3:"163";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca        </div>
        
        <div class="mall-search">
            <form method="get" action="search.php" onSubmit="return checkSearchForm(this)" class="mallSearch-form">
                <div class="mallSearch-input-wp">
                    <input type="text" name="keywords" id="mq" class="mallSearch-input" value="春到焕新一见倾心" onfocus="javascript:if(this.value=='春到焕新一见倾心'){this.value=''}" onblur="javascript:if(this.value==''){this.value='春到焕新一见倾心'}" >
                    <label for="mq"></label>
                </div>
                <button type="submit">搜索</button>
                <script type="text/javascript">
                    
                    <!--
                    function checkSearchForm()
                    {
                    if(document.getElementById('keyword').value)
                    {
                    return true;
                    }
                    else
                    {
                    alert("请输入搜索关键词！");
                    return false;
                    }
                    }
                    -->
                    
                </script>
            </form>
                    </div>
    </div>
</div>
<div class="header-menu">
    
    <div class="main-nav clearfix block">
        <div class="logo-content">
            <a href="javascript:;" class="cate-tree-all"><i class="iconfont">&#xe607;</i>商品分类</a>
        </div>
        
        <div class="main-nav-list">
                        <a href="category.php?id=3">
                GSM手机                <div class="hover-pic"></div>
            </a>
                        <a href="category.php?id=5">
                双模手机                <div class="hover-pic"></div>
            </a>
                        <a href="category.php?id=6">
                手机配件                <div class="hover-pic"></div>
            </a>
                        <a href="group_buy.php">
                团购商品                <div class="hover-pic"></div>
            </a>
                        <a href="activity.php">
                优惠活动                <div class="hover-pic"></div>
            </a>
                        <a href="snatch.php">
                夺宝奇兵                <div class="hover-pic"></div>
            </a>
                        <a href="auction.php">
                拍卖活动                <div class="hover-pic"></div>
            </a>
                        <a href="exchange.php">
                积分商城                <div class="hover-pic"></div>
            </a>
                        <a href="message.php">
                留言板                <div class="hover-pic"></div>
            </a>
                        <a href="http://bbs.ecshop.com/" target="_blank">
                EC论坛                <div class="hover-pic"></div>
            </a>
                    </div>
        
        <div class="cate-tree none">
            <div class="cate-tree-bg"></div>
            <ul class="ul-cate-tree">
                                                <li class="cate-tree-item">
                    <i class="iconfont">&#xe603;</i>                                                                                                                                                                                                                                                                                                                                <a href="category.php?id=1" title="手机类型">手机类型</a>
                </li>
                                                                <li class="cate-tree-item">
                                        <i class="iconfont">&#xe604;</i>                                                                                                                                                                                                                                                                                                            <a href="category.php?id=6" title="手机配件">手机配件</a>
                </li>
                                                                <li class="cate-tree-item">
                                                            <i class="iconfont">&#xe601;</i>                                                                                                                                                                                                                                                                                        <a href="category.php?id=12" title="充值卡">充值卡</a>
                </li>
                                            </ul>
            <ul class="cate-panel-wp">
                                                <li class="cate-panel panel-1">
                    <div class="left-part">
                                                <h3 class="panel-title">
                            <a href="category.php?id=2" target="_blank" class="more">更多</a>
                            <a href="category.php?id=2" target="_blank">CDMA手机</a>
                        </h3>
                        <div class="panel-list">
                            <p class="clearfix">
                                                            </p>
                        </div>
                                                <h3 class="panel-title">
                            <a href="category.php?id=3" target="_blank" class="more">更多</a>
                            <a href="category.php?id=3" target="_blank">GSM手机</a>
                        </h3>
                        <div class="panel-list">
                            <p class="clearfix">
                                                            </p>
                        </div>
                                                <h3 class="panel-title">
                            <a href="category.php?id=4" target="_blank" class="more">更多</a>
                            <a href="category.php?id=4" target="_blank">3G手机</a>
                        </h3>
                        <div class="panel-list">
                            <p class="clearfix">
                                                            </p>
                        </div>
                                                <h3 class="panel-title">
                            <a href="category.php?id=5" target="_blank" class="more">更多</a>
                            <a href="category.php?id=5" target="_blank">双模手机</a>
                        </h3>
                        <div class="panel-list">
                            <p class="clearfix">
                                                            </p>
                        </div>
                                            </div>
                    <div class="right-part">
                        <h3 class="panel-title">
                            <a href="">特色品牌</a>
                        </h3>
                        <div class="panel-list">
                            <p class="clearfix">
                                                            </p>
                        </div>
                        <div class="ad-pic-1">554fcae493e564ee0dc75bdf2ebf94caads|a:2:{s:4:"name";s:3:"ads";s:4:"type";s:22:"分类树面板广告1";}554fcae493e564ee0dc75bdf2ebf94ca</div>
                        <div class="ad-pic-1">554fcae493e564ee0dc75bdf2ebf94caads|a:2:{s:4:"name";s:3:"ads";s:4:"type";s:22:"分类树面板广告2";}554fcae493e564ee0dc75bdf2ebf94ca</div>
                    </div>
                </li>
                                                                <li class="cate-panel panel-2">
                    <div class="left-part">
                                                <h3 class="panel-title">
                            <a href="category.php?id=7" target="_blank" class="more">更多</a>
                            <a href="category.php?id=7" target="_blank">充电器</a>
                        </h3>
                        <div class="panel-list">
                            <p class="clearfix">
                                                            </p>
                        </div>
                                                <h3 class="panel-title">
                            <a href="category.php?id=8" target="_blank" class="more">更多</a>
                            <a href="category.php?id=8" target="_blank">耳机</a>
                        </h3>
                        <div class="panel-list">
                            <p class="clearfix">
                                                            </p>
                        </div>
                                                <h3 class="panel-title">
                            <a href="category.php?id=9" target="_blank" class="more">更多</a>
                            <a href="category.php?id=9" target="_blank">电池</a>
                        </h3>
                        <div class="panel-list">
                            <p class="clearfix">
                                                            </p>
                        </div>
                                                <h3 class="panel-title">
                            <a href="category.php?id=11" target="_blank" class="more">更多</a>
                            <a href="category.php?id=11" target="_blank">读卡器和内存卡</a>
                        </h3>
                        <div class="panel-list">
                            <p class="clearfix">
                                                            </p>
                        </div>
                                            </div>
                    <div class="right-part">
                        <h3 class="panel-title">
                            <a href="">特色品牌</a>
                        </h3>
                        <div class="panel-list">
                            <p class="clearfix">
                                                            </p>
                        </div>
                        <div class="ad-pic-1">554fcae493e564ee0dc75bdf2ebf94caads|a:2:{s:4:"name";s:3:"ads";s:4:"type";s:22:"分类树面板广告1";}554fcae493e564ee0dc75bdf2ebf94ca</div>
                        <div class="ad-pic-1">554fcae493e564ee0dc75bdf2ebf94caads|a:2:{s:4:"name";s:3:"ads";s:4:"type";s:22:"分类树面板广告2";}554fcae493e564ee0dc75bdf2ebf94ca</div>
                    </div>
                </li>
                                                                <li class="cate-panel panel-3">
                    <div class="left-part">
                                                <h3 class="panel-title">
                            <a href="category.php?id=13" target="_blank" class="more">更多</a>
                            <a href="category.php?id=13" target="_blank">小灵通/固话充值卡</a>
                        </h3>
                        <div class="panel-list">
                            <p class="clearfix">
                                                            </p>
                        </div>
                                                <h3 class="panel-title">
                            <a href="category.php?id=14" target="_blank" class="more">更多</a>
                            <a href="category.php?id=14" target="_blank">移动手机充值卡</a>
                        </h3>
                        <div class="panel-list">
                            <p class="clearfix">
                                                            </p>
                        </div>
                                                <h3 class="panel-title">
                            <a href="category.php?id=15" target="_blank" class="more">更多</a>
                            <a href="category.php?id=15" target="_blank">联通手机充值卡</a>
                        </h3>
                        <div class="panel-list">
                            <p class="clearfix">
                                                            </p>
                        </div>
                                            </div>
                    <div class="right-part">
                        <h3 class="panel-title">
                            <a href="">特色品牌</a>
                        </h3>
                        <div class="panel-list">
                            <p class="clearfix">
                                                            </p>
                        </div>
                        <div class="ad-pic-1">554fcae493e564ee0dc75bdf2ebf94caads|a:2:{s:4:"name";s:3:"ads";s:4:"type";s:22:"分类树面板广告1";}554fcae493e564ee0dc75bdf2ebf94ca</div>
                        <div class="ad-pic-1">554fcae493e564ee0dc75bdf2ebf94caads|a:2:{s:4:"name";s:3:"ads";s:4:"type";s:22:"分类树面板广告2";}554fcae493e564ee0dc75bdf2ebf94ca</div>
                    </div>
                </li>
                                            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
  $(function(){
    $(".cate-tree-item,.menu-item").hover(function(){
      $(this).addClass("hover");
    },function(){
      $(this).removeClass("hover");
    });
    //鼠标经过离开分类
      $(".cate-tree-item").on("mouseenter mouseleave",function(e){
        var index = $(this).index();
        if(e.type == "mouseenter"){
          toggleCatePanel(index, true);
        }else if(e.type == "mouseleave"){
          toggleCatePanel(index, false);
        }
      });
      //鼠标经过离开分类面板
      $(".cate-panel").on("mouseenter mouseleave",function(e){
        var index = $(this).index();
        if(e.type == "mouseenter"){
          toggleCatePanel(index, true);
        }else if(e.type == "mouseleave"){
          toggleCatePanel(index, false);
        }
      });
      //显示隐藏分类树方法
      function toggleCatePanel(i, show){
        var $panel = $(".cate-panel").eq(i);
        if(show){
          $panel.show();
        }else{
          $panel.hide();
        }
      }
      //首页之外其它页面分类树显示
      $(".cate-tree-all,.cate-tree").hover(function(){
        if(!$(".cate-tree").hasClass("cate-tree-index")){//如果是首页不做任何反应
            if($.trim($(".ul-cate-tree").html()).length != 0){//如果分类里有内容
                $(".cate-tree").removeClass("none");
            }
        }
      },function(){
        if(!$(".cate-tree").hasClass("cate-tree-index")){//如果是首页不做任何反应
          $(".cate-tree").addClass("none");
        }
      });
    });
  //禁止鼠标滚动事件冒泡
  $.fn.extend({
    "preventScroll":function(){
        $(this).each(function(){
            var _this = this;
            if(navigator.userAgent.indexOf('Firefox') >= 0){   //firefox
                _this.addEventListener('DOMMouseScroll',function(e){
                    _this.scrollTop += e.detail > 0 ? 60 : -60;
                    e.preventDefault();
                },false);
            }else{
                _this.onmousewheel = function(e){
                    e = e || window.event;
                    _this.scrollTop += e.wheelDelta > 0 ? -60 : 60;
                    return false;
                };
            }
        })
    }
});
$(".cate-panel .left-part").preventScroll();
</script>
  <div class="block box">
<div class="blank"></div>
 <div id="ur_here">
当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=6">手机配件</a> 
</div>
</div>
<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
    
<div id="category_tree">
<div class="tit">所有商品分类</div>
<dl class="clearfix" style=" overflow:hidden;" >
<div class="box1 cate" id="cate">
    <h1 onclick="tab(0)"   style="border-top:none"   >
  <span class="f_l"><img src="themes/ecmoban_tianmao2016/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   style="border-top:none"  href="category.php?id=1" class="  f_ll" >手机类型</a>
  <ul style="display:none" class="sub-tree">
        <a class="over_2" href="category.php?id=2">CDMA手机</a>
    <div class="clearfix">
          </div>
        <a class="over_2" href="category.php?id=3">GSM手机</a>
    <div class="clearfix">
          </div>
        <a class="over_2" href="category.php?id=4">3G手机</a>
    <div class="clearfix">
          </div>
        <a class="over_2" href="category.php?id=5">双模手机</a>
    <div class="clearfix">
          </div>
      </ul>
  <div style="clear:both"></div>
    <h1 onclick="tab(1)"    >
  <span class="f_l"><img src="themes/ecmoban_tianmao2016/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   href="category.php?id=6" class="  f_ll" >手机配件</a>
  <ul style="display:none" class="sub-tree">
        <a class="over_2" href="category.php?id=7">充电器</a>
    <div class="clearfix">
          </div>
        <a class="over_2" href="category.php?id=8">耳机</a>
    <div class="clearfix">
          </div>
        <a class="over_2" href="category.php?id=9">电池</a>
    <div class="clearfix">
          </div>
        <a class="over_2" href="category.php?id=11">读卡器和内存卡</a>
    <div class="clearfix">
          </div>
      </ul>
  <div style="clear:both"></div>
    <h1 onclick="tab(2)"    >
  <span class="f_l"><img src="themes/ecmoban_tianmao2016/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   href="category.php?id=12" class="  f_ll" >充值卡</a>
  <ul style="display:none" class="sub-tree">
        <a class="over_2" href="category.php?id=13">小灵通/固话充值卡</a>
    <div class="clearfix">
          </div>
        <a class="over_2" href="category.php?id=14">移动手机充值卡</a>
    <div class="clearfix">
          </div>
        <a class="over_2" href="category.php?id=15">联通手机充值卡</a>
    <div class="clearfix">
          </div>
      </ul>
  <div style="clear:both"></div>
  </div>
<div style="clear:both"></div>
</div>
<div class="blank"></div>
<script type="text/javascript">
obj_h4 = document.getElementById("cate").getElementsByTagName("h4")
obj_ul = document.getElementById("cate").getElementsByTagName("ul")
obj_img = document.getElementById("cate").getElementsByTagName("img")
function tab(id)
{
		if(obj_ul.item(id).style.display == "block")
		{
			obj_ul.item(id).style.display = "none"
			obj_img.item(id).src = "themes/ecmoban_tianmao2016/images/btn_fold.gif"
			return false;
		}
		else(obj_ul.item(id).style.display == "none")
		{
			obj_ul.item(id).style.display = "block"
			obj_img.item(id).src = "themes/ecmoban_tianmao2016/images/btn_unfold.gif"
		}
}
</script>
<div class="box" id='history_div'> <div class="box_1">
 <h3><span>浏览历史</span></h3>
 
  <div class="boxCenterList clearfix" id='history_list'>
    554fcae493e564ee0dc75bdf2ebf94cahistory|a:1:{s:4:"name";s:7:"history";}554fcae493e564ee0dc75bdf2ebf94ca  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>
    
  </div>
  
  
  <div class="AreaR">
	 
	  	  <div class="box">
		 <div class="box_1">
			<h3><span>商品筛选</span></h3>
						<div class="screeBox">
			  <strong>品牌：</strong>
														<span>全部</span>
																			<a href="category.php?id=6&amp;brand=1&amp;price_min=0&amp;price_max=0">诺基亚</a>&nbsp;
																			<a href="category.php?id=6&amp;brand=7&amp;price_min=0&amp;price_max=0">索爱</a>&nbsp;
												</div>
											 </div>
		</div>
		<div class="blank"></div>
	  	 
   
<div class="box">
 <div class="box_1">
  <ul class="goods_list">
  <span>商品列表</span>
  <form method="GET" class="sort" name="listform">
    <li class="txt"> 显示方式：</li>
    <li> <a href="javascript:;" onClick="javascript:display_mode('list')">
    <img style="top:5px;" src="themes/ecmoban_tianmao2016/images/display_mode_list.gif" alt="" ></a>
    </li>
    <li> <a href="javascript:;" onClick="javascript:display_mode('grid')">
    <img style="top:5px;" src="themes/ecmoban_tianmao2016/images/display_mode_grid_act.gif" alt=""></a>
    </li>
    <li>  <a href="javascript:;" onClick="javascript:display_mode('text')">
    <img style="top:5px;" src="themes/ecmoban_tianmao2016/images/display_mode_text.gif" alt=""></a>&nbsp;&nbsp;
    </li>
  
    <li>  <a href="category.php?category=6&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=ASC#goods_list">
    <img src="themes/ecmoban_tianmao2016/images/goods_id_DESC.gif" alt="按上架时间排序"></a>
    </li>
    <li>  <a href="category.php?category=6&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list">
    <img src="themes/ecmoban_tianmao2016/images/shop_price_default.gif" alt="按价格排序"></a>
    </li>
    <li>  <a href="category.php?category=6&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=last_update&order=DESC#goods_list">
    <img src="themes/ecmoban_tianmao2016/images/last_update_default.gif" alt="按更新时间排序"></a>
    </li>
  <input type="hidden" name="category" value="6" />
  <input type="hidden" name="display" value="grid" id="display" />
  <input type="hidden" name="brand" value="0" />
  <input type="hidden" name="price_min" value="0" />
  <input type="hidden" name="price_max" value="0" />
  <input type="hidden" name="filter_attr" value="0" />
  <input type="hidden" name="page" value="1" />
  <input type="hidden" name="sort" value="goods_id" />
  <input type="hidden" name="order" value="DESC" />
  </form>
  </ul>
      <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
            <div class="clearfix goodsBox" style="border:none;">
              <div class="goodsItem"> <a href="goods.php?id=7" target="_blank"><img src="images/200905/thumb_img/7_thumb_G_1241422785492.jpg" alt="诺基亚N85原装立体声耳机HS-82" class="goodsimg" /></a><br />
        <p class="name"><a href="goods.php?id=7" title="诺基亚N85原装立体声耳机HS-82" target="_blank">诺基亚N85原...</a></p>
        <div class="info">
          <p class="price">
             
            ￥100元 
             
          </p>
          <p class="market">￥120元</p>
          <a href="goods.php?id=7" class="buy" target="_blank">立即购买</a>
        </div>
      </div>
                  <div class="goodsItem"> <a href="goods.php?id=5" target="_blank"><img src="images/200905/thumb_img/5_thumb_G_1241422518886.jpg" alt="索爱原装M2卡读卡器" class="goodsimg" /></a><br />
        <p class="name"><a href="goods.php?id=5" title="索爱原装M2卡读卡器" target="_blank">索爱原装M2卡...</a></p>
        <div class="info">
          <p class="price">
             
            ￥20元 
             
          </p>
          <p class="market">￥24元</p>
          <a href="goods.php?id=5" class="buy" target="_blank">立即购买</a>
        </div>
      </div>
                  <div class="goodsItem"> <a href="goods.php?id=3" target="_blank"><img src="images/200905/thumb_img/3_thumb_G_1241422082679.jpg" alt="诺基亚原装5800耳机" class="goodsimg" /></a><br />
        <p class="name"><a href="goods.php?id=3" title="诺基亚原装5800耳机" target="_blank">诺基亚原装58...</a></p>
        <div class="info">
          <p class="price">
             
            ￥68元 
             
          </p>
          <p class="market">￥82元</p>
          <a href="goods.php?id=3" class="buy" target="_blank">立即购买</a>
        </div>
      </div>
                    </div>
        </form>
  
 </div>
</div>
<div class="blank5"></div>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
<form name="selectPageForm" action="/ecshop/upload/category.php" method="get">
 <div id="pager" class="pagebar">
  <span class="f_l " style="margin-right:10px;">总计 <b>3</b>  个记录</span>
      
      </div>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
  </div>
  
</div>
<div class="blank"></div>
<div class="footer">
    <div class="footer-ensure">
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
    </div>
    <div class="footer-desc clearfix">
                        <dl >
            <dt>新手上路 </dt>
            <dd>
                                <a href="article.php?id=9" title="售后流程">售后流程</a>
                                <a href="article.php?id=10" title="购物流程">购物流程</a>
                                <a href="article.php?id=11" title="订购方式">订购方式</a>
                            </dd>
        </dl>
                                <dl >
            <dt>手机常识 </dt>
            <dd>
                                <a href="article.php?id=12" title="如何分辨原装电池">如何分辨原装电池</a>
                                <a href="article.php?id=13" title="如何分辨水货手机 ">如何分辨水货手机</a>
                                <a href="article.php?id=14" title="如何享受全国联保">如何享受全国联保</a>
                            </dd>
        </dl>
                                <dl >
            <dt>配送与支付 </dt>
            <dd>
                                <a href="article.php?id=15" title="货到付款区域">货到付款区域</a>
                                <a href="article.php?id=16" title="配送支付智能查询 ">配送支付智能查询</a>
                                <a href="article.php?id=17" title="支付方式说明">支付方式说明</a>
                            </dd>
        </dl>
                                <dl >
            <dt>会员中心</dt>
            <dd>
                                <a href="article.php?id=18" title="资金管理">资金管理</a>
                                <a href="article.php?id=19" title="我的收藏">我的收藏</a>
                                <a href="article.php?id=20" title="我的订单">我的订单</a>
                            </dd>
        </dl>
                                <dl >
            <dt>服务保证 </dt>
            <dd>
                                <a href="article.php?id=21" title="退换货原则">退换货原则</a>
                                <a href="article.php?id=22" title="售后服务保证 ">售后服务保证</a>
                                <a href="article.php?id=23" title="产品质量保证 ">产品质量保证</a>
                            </dd>
        </dl>
                                        <dl class="qr-code">
            <dt><span class="on">ECjia</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>ECtouch</span></dt>
            <dd>
                <img src="themes/ecmoban_tianmao2016/images/ECJia_code.png" alt="">
                <img class="none" src="themes/ecmoban_tianmao2016/images/ECtouch_code.png">
            </dd>
        </dl>
    </div>
    <div class="footer-copyright">
        <div class="container">
             
            <p class="footer-nav">
                 
                <a href="article.php?id=1" >免责条款</a> 
                 
                <a href="article.php?id=2" >隐私保护</a> 
                 
                <a href="article.php?id=3" >咨询热点</a> 
                 
                <a href="article.php?id=4" >联系我们</a> 
                 
                <a href="article.php?id=5" >公司简介</a> 
                 
                <a href="wholesale.php" >批发方案</a> 
                 
                <a href="myship.php" >配送方式</a> 
                 
            </p>
                                    <span style="color:#909090;">
                         
             
                        </span>
            <div class="d-copyright">
                <p></p>
                <b>
                    &copy; 2005-2016 ECSHOP 版权所有，并保留所有权利。                                    </b>
                <p class="pc-copyright">
                    <a href="#" target="_blank"><img src="themes/ecmoban_tianmao2016/images/banquan_1.jpg"></a>
                    <a href="#" target="_blank"><img src="themes/ecmoban_tianmao2016/images/banquan_2.jpg"></a>
                    <a href="#" target="_blank"><img src="themes/ecmoban_tianmao2016/images/banquan_3.jpg"></a>
                    <a href="#" target="_blank"><img src="themes/ecmoban_tianmao2016/images/banquan_4.jpg"></a>
                    <a href="#" target="_blank"><img src="themes/ecmoban_tianmao2016/images/banquan_5.jpg"></a>
                </p>
            </div>
            <div style="text-align:center; padding:0 0 20px 0;"><a href=" http://www.ecmoban.com" target="_blank"><img src="themes/ecmoban_tianmao2016/images/ecmoban.gif" alt="ECShop模板" /></a></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $(".qr-code dt span").hover(function(){
            var index = $(this).index();
            $(this).addClass("on").siblings().removeClass("on");
            $(".qr-code dd img").eq(index).removeClass("none").siblings().addClass("none");
        });
    })
</script>
<div class="QQbox" id="divQQbox" style="width: 170px; ">
  <div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>
      9:00-18:00</div>
    <div class="con">
      <ul>
        
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
        
              </ul>
    </div>
    <div class="b"></div>
  </div>
  <div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="themes/ecmoban_tianmao2016/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script> 
</body>
</html>
