<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="360-site-verification" content="ec7175246571f9d93b70f7f441504732" />
<title>汉购网</title>
<meta name="keywords" content="汉购网" />
<meta name="description" content="汉购网" />
<style type="text/css">
body {
_behavior: url(http://www.hangowa.com/templates/default/css/csshover.htc);
}
.nc-appbar-tabs a.compare { display: none !important;}
</style>
<link href="http://www.hangowa.com/templates/default/css/base.css" rel="stylesheet" type="text/css">
<link href="http://www.hangowa.com/templates/default/css/home_cart.css" rel="stylesheet" type="text/css">
<link href="http://www.hangowa.com/data/resource/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<link href="http://www.hangowa.com/resource/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="http://www.hangowa.com/resource/font/font-awesome/css/font-awesome-ie7.min.css">
<![endif]-->
<script>
var COOKIE_PRE = 'hango_';var _CHARSET = 'utf-8';var SITEURL = 'http://www.hangowa.com';var MEMBER_SITE_URL = 'http://www.hangowa.com/member';var RESOURCE_SITE_URL = 'http://www.hangowa.com/data/resource';var RESOURCE_SITE_URL = 'http://www.hangowa.com/data/resource';var SHOP_TEMPLATES_URL = 'http://www.hangowa.com/templates/default';var PRICE_FORMAT = '&yen;%s';
Number.prototype.toFixed = function(d)
{
    var s=this+"";if(!d)d=0;
    if(s.indexOf(".")==-1)s+=".";s+=new Array(d+1).join("0");
    if (new RegExp("^(-|\\+)?(\\d+(\\.\\d{0,"+ (d+1) +"})?)\\d*$").test(s))
    {
        var s="0"+ RegExp.$2, pm=RegExp.$1, a=RegExp.$3.length, b=true;
        if (a==d+2){a=s.match(/\d/g); if (parseInt(a[a.length-1])>4)
        {
            for(var i=a.length-2; i>=0; i--) {a[i] = parseInt(a[i])+1;
            if(a[i]==10){a[i]=0; b=i!=1;} else break;}
        }
        s=a.join("").replace(new RegExp("(\\d+)(\\d{"+d+"})\\d$"),"$1.$2");
    }if(b)s=s.substr(1);return (pm+s).replace(/\.$/, "");} return this+"";
};
</script>
<script src="http://www.hangowa.com/data/resource/js/jquery.js"></script>
<script src="http://www.hangowa.com/data/resource/js/common.js"></script>
<script src="http://www.hangowa.com/data/resource/js/jquery-ui/jquery.ui.js"></script>
<script src="http://www.hangowa.com/data/resource/js/jquery.validation.min.js"></script>
<script src="http://www.hangowa.com/data/resource/js/jquery.poshytip.min.js"></script>
<script type="text/javascript" src="http://www.hangowa.com/data/resource/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="http://www.hangowa.com/data/resource/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="http://www.hangowa.com/data/resource/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
<script src="http://www.hangowa.com/resource/js/goods_cart.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="http://www.hangowa.com/data/resource/js/html5shiv.js"></script>
      <script src="http://www.hangowa.com/data/resource/js/respond.min.js"></script>
<![endif]-->
</head>
<body>

<script type="text/javascript">
	$(function() {
		Hangowa.initial();
		Hangowa.initialUser();
		Hangowa.updateCartCount();
	});

</script>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div id="ncToolbar" class="nc-appbar">
	<div class="nc-appbar-tabs" id="appBarTabs">
		<div class="ever">
									<div class="compare"><a href="javascript:void(0);" id="compare"><span class="icon"></span><span class="tit">商品对比</span></a></div>
					</div>
		<div class="variation">
			<div class="middle">
				<div id="bar-user-info">
					<div class="user" onclick="Hangowa.barUserInfo()">
						<a href="javascript:void(0);">
							<div class="avatar"><img src="/data/upload/shop/common/default_user_portrait.gif" /></div>
							<span class="tit">我的账户</span>
						</a>
					</div>
					<div class="user-info" style="display:none;"><i class="arrow"></i>
						<div class="avatar"><img src="/data/upload/shop/common/default_user_portrait.gif" />
							<div class="frame"></div>
						</div>
						<dl>
							<dt>Hi, <span id="bar-user-name"></span></dt>
							<dd>当前等级：<strong id="bar-user-level"></strong></dd>
							<dd>当前经验值：<strong id="bar-user-exp"></strong></dd>
						</dl>
					</div>
				</div>
				<div id="bar-user-login">

					<div class="user" nctype="a-barLoginBox">
						<a href="javascript:void(0);">
							<div class="avatar"><img src="/data/upload/shop/common/default_user_portrait.gif" /></div>
							<span class="tit">会员登录</span>
						</a>
					</div>
					<div class="user-login-box" nctype="barLoginBox" style="display:none;"> <i class="arrow"></i> <a href="javascript:void(0);" class="close-a" nctype="close-barLoginBox" title="关闭">X</a>
						<form id="login_form" method="post" action="http://www.hangowa.com/member/?act=login&op=login" onsubmit="ajaxpost('login_form', '', '', 'onerror')">
							<input type='hidden' name='formhash' value='SVY1C3a4_XTn-7u9iVTVE8DNXG5AH3p' /> <input type="hidden" name="form_submit" value="ok" />
							<input name="nchash" type="hidden" value="">
							<dl>
								<dt><strong>登录名</strong></dt>
								<dd>
									<input type="text" class="text" autocomplete="off" name="user_name" autofocus>
									<label></label>
								</dd>
							</dl>
							<dl>
								<dt><strong>登录密码</strong><a href="http://www.hangowa.com/member/?act=login&op=forget_password" target="_blank">忘记登录密码？</a></dt>
								<dd>
									<input type="password" class="text" name="password" autocomplete="off">
									<label></label>
								</dd>
							</dl>
							<dl>
								<dt><strong>验证码</strong><a href="javascript:void(0)" class="ml5" onclick="javascript:document.getElementById('codeimage').src='index.php?act=seccode&amp;op=makecode&amp;nchash=&amp;t=' + Math.random();">更换验证码</a></dt>
								<dd>
									<input type="text" name="captcha" autocomplete="off" class="text w130" id="captcha" maxlength="4" size="10">
									<img src="" name="codeimage" border="0" id="codeimage" class="vt">
									<label></label>
								</dd>
							</dl>
							<div class="bottom">
								<input type="submit" class="submit" value="确认">
								<input type="hidden" value="" name="ref_url">
								<a href="http://www.hangowa.com/member/?act=login&op=register&" target="_blank">注册新用户</a>
																<h4></h4>
																<a href="javascript:void(0);" onclick="ajax_form('weixin_form', '微信账号登录', 'http://www.hangowa.com/member/?act=connect_wx&op=index', 360);" title="微信账号登录" class="mr20">微信</a>
																								<a href="http://www.hangowa.com/member/api.php?act=toqq" title="QQ账号登录" class="mr20">QQ账号</a>
																							</div>
						</form>
					</div>
				</div>
				<div class="prech">&nbsp;</div>
								<div class="chat"><a href="javascript:void(0);" id="chat_show_user" onclick="NTKF.im_openInPageChat('kf_9863_1395034529227');"><span class="icon"></span><i id="new_msg" class="new_msg" style="display:none;"></i><span class="tit">在线联系</span></a></div>
							</div>
			<div class="l_qrcode"><a href="javascript:void(0);" class=""><span class="icon"></span><code><img src="http://www.hangowa.com/data/upload/mobile/05234711548071503.png"></code></a></div>
			<div class="gotop"><a href="javascript:void(0);" id="gotop"><span class="icon"></span><span class="tit">返回顶部</span></a></div>
		</div>
		<div class="content-box" id="content-compare">
			<div class="top">
				<h3>商品对比</h3>
				<a href="javascript:void(0);" class="close" title="隐藏"></a>
			</div>
			<div id="comparelist"></div>
		</div>
		<div class="content-box" id="content-cart">
			<div class="top">
				<h3>我的购物车</h3>
				<a href="javascript:void(0);" class="close" title="隐藏"></a>
			</div>
			<div id="rtoolbar_cartlist"></div>
		</div>
	</div>
</div>


<script>
	//返回顶部
	$(function() {
		$("#gotop").hide();
        //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
        $(function() {
            $(window).scroll(function() {
                if ($(window).scrollTop() > 100) {
                    $("#gotop").fadeIn(1000);
                } else {
                    $("#gotop").fadeOut(1000);
                }
            });
            //当点击跳转链接后，回到页面顶部位置
            $("#gotop").click(function() {
                $('body,html').animate({
                    scrollTop: 0
                },
                1000);
                return false;
            });
        });

	})

</script>


<script type="text/javascript">
	//登录开关状态
	var connect_qq = "1";
	var connect_sn = "0";
	var connect_wx = "1";
	$(function() {
		$(".l_qrcode a").hover(function() {
				$(this).addClass("hover");
			},
			function() {
				$(this).removeClass("hover");
			});

	});




	/*backTop=function (btnId){
		var btn=document.getElementById(btnId);
		var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
		window.onscroll=set;
		btn.onclick=function (){
			btn.style.opacity="0.5";
			window.onscroll=null;
			this.timer=setInterval(function(){
			    scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
				scrollTop-=Math.ceil(scrollTop*0.1);
				if(scrollTop==0) clearInterval(btn.timer,window.onscroll=set);
				if (document.documentElement.scrollTop > 0) document.documentElement.scrollTop=scrollTop;
				if (document.body.scrollTop > 0) document.body.scrollTop=scrollTop;
			},10);
		};
		function set(){
		    scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
		    btn.style.opacity=scrollTop?'1':"0.5";
		}
	};
	backTop('gotop');*/

	//动画显示边条内容区域
	$(function() {
		ncToolbar();
		$(window).resize(function() {
			ncToolbar();
		});

		function ncToolbar() {
			if ($(window).width() >= 1240) {
				$('#appBarTabs >.variation').show();
			} else {
				$('#appBarTabs >.variation').hide();
			}
		}
		$('#appBarTabs').hover(
			function() {
				$('#appBarTabs >.variation').show();
			},
			function() {
				ncToolbar();
			}
		);
		$("#compare").click(function() {
			if ($("#content-compare").css('right') == '-210px') {
				loadCompare(false);
				$('#content-cart').animate({
					'right': '-210px'
				});
				$("#content-compare").animate({
					right: '35px'
				});
			} else {
				$(".close").click();
				$(".chat-list").css("display", 'none');
			}
		});
		$("#rtoolbar_cart").click(function() {
			if ($("#content-cart").css('right') == '-210px') {
				$('#content-compare').animate({
					'right': '-210px'
				});
				$("#content-cart").animate({
					right: '35px'
				});
				if (!$("#rtoolbar_cartlist").html()) {
					$("#rtoolbar_cartlist").load('index.php?act=cart&op=ajax_load&type=html');
				}
			} else {
				$(".close").click();
				$(".chat-list").css("display", 'none');
			}
		});
		$(".close").click(function() {
			$(".content-box").animate({
				right: '-210px'
			});
		});

		$(".quick-menu dl").hover(function() {
				$(this).addClass("hover");
			},
			function() {
				$(this).removeClass("hover");
			});
		$(".links_a").hover(function() {
				$(this).addClass("hover");
			},
			function() {
				$(this).removeClass("hover");
			});

		// 右侧bar用户信息
		$('div[nctype="a-barUserInfo"]').click(function() {
			$('div[nctype="barUserInfo"]').toggle();
		});
		// 右侧bar登录
		$('div[nctype="a-barLoginBox"]').click(function() {
			$('div[nctype="barLoginBox"]').toggle();
			document.getElementById('codeimage').src = 'index.php?act=seccode&op=makecode&nchash=&t=' + Math.random();
		});
		$('a[nctype="close-barLoginBox"]').click(function() {
			$('div[nctype="barLoginBox"]').toggle();
		});
	});

</script>

<!--<div class="visit-hint wrapper"></div>-->

<div class="public-top-layout w">
	<div class="topbar wrapper">
		<div class="user-entry">
			<div id="user-info" style="display: none;">
				您好 <span>
                  <a href="http://www.hangowa.com/?act=member&op=home" id="top-username"></a>
      </span>
				，欢迎来到 <a href="http://www.hangowa.com" title="首页" alt="首页"><span>汉购网</span></a> <span>[<a href="http://www.hangowa.com/member/?act=login&op=logout">退出</a>] </span>
			</div>
			<div id="user-login">
				您好，欢迎来到				<a href="http://www.hangowa.com" title="首页" alt="首页">
					汉购网				</a>
								<span class="other">
            <a href="http://www.hangowa.com/member/api.php?act=toqq" title="QQ账号登录" class="qq"><i></i></a>
                           <a href="javascript:void(0);" onclick="ajax_form('weixin_form', '微信账号登录', 'http://www.hangowa.com/member/?act=connect_wx&op=index', 360);" title="微信账号登录" class="wx"><i></i></a>      </span>
				 <span class="login-link"><a href="http://www.hangowa.com/member/?act=login&op=index">请登录</a></span> <span class="login-link"><a href="http://www.hangowa.com/member/?act=login&op=register">立即注册</a></span>
			</div>
		</div>
		<div class="quick-menu">
						<!--<dl class="down_app">
				<dt><em class="ico_tel"></em><a href="/wap">移动端</a><i></i></dt>
				<dd>
					<div class="qrcode"><img src="http://www.hangowa.com/data/upload/shop/common/mb_app.png"></div>
					<div class="hint">
						<h4>扫描二维码</h4> 下载手机客户端
					</div>
					<div class="addurl">
																	</div>
				</dd>
			</dl>-->
						<dl>
			<dt><em class="ico_shop"></em>
			<a href="http://www.hangowa.com/index.php?act=show_joinin&op=index">商家入驻</a></dt>
			</dl>
			<dl>
				<dt><em class="ico_order"></em><a href="http://www.hangowa.com/index.php?act=member_order">我的订单</a><i></i></dt>
				<dd>
					<ul>
						<li><a href="http://www.hangowa.com/index.php?act=member_order&state_type=state_new">待付款订单</a></li>
						<li><a href="http://www.hangowa.com/index.php?act=member_order&state_type=state_send">待确认收货</a></li>
						<li><a href="http://www.hangowa.com/index.php?act=member_order&state_type=state_noeval">待评价交易</a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt><em class="ico_center"></em><a href="/index.php?act=member&op=home">个人中心</a></dt>
			</dl>
			<!--<dl>
        <dt><em class="ico_store"></em><a href="http://www.hangowa.com/index.php?act=member_favorite_goods&op=fglist">我的收藏</a><i></i></dt>
        <dd>
          <ul>
            <li><a href="http://www.hangowa.com/index.php?act=member_favorite_goods&op=fglist">商品收藏</a></li>
            <li><a href="http://www.hangowa.com/index.php?act=member_favorite_store&op=fslist">店铺收藏</a></li>
          </ul>
        </dd>
      </dl>-->
			<dl>
				<dt><em class="ico_service"></em>客户服务<i></i></dt>
				<dd>
					<ul>
						<li><a href="http://www.hangowa.com/member/article_cate-2.html">帮助中心</a></li>
						<li><a href="http://www.hangowa.com/member/article_cate-5.html">售后服务</a></li>
						<li><a href="http://www.hangowa.com/member/article_cate-6.html">客服中心</a></li>
					</ul>
				</dd>
			</dl>
											<dl class="weixin">
					<dt>关注我们<i></i></dt>
					<dd>
						<h4>扫描二维码<br/>
            关注商城微信号</h4>
						<img src="http://www.hangowa.com/data/upload/mobile/05234711548071503.png"> </dd>
				</dl>
				<!-- 				<dl><dt><a href="/v1/" target="_blank">旧版网站入口...</a></dt></dl> -->
		</div> 
	</div>
</div>

  <header class="ncc-head-layout">
    <div class="site-logo"><a href="http://www.hangowa.com"><img src="http://www.hangowa.com/data/upload/shop/common/05264938636616549.jpg" class="pngFix"></a></div>
        <ul class="ncc-flow">
      <li class="current"><i class="step1"></i>
        <p>我的购物车</p>
        <sub></sub>
        <div class="hr"></div>
      </li>
      <li class=""><i class="step2"></i>
        <p>确认订单</p>
        <sub></sub>
        <div class="hr"></div>
      </li>
      <li class=""><i class="step3"></i>
        <p>支付提交</p>
        <sub></sub>
        <div class="hr"></div>
      </li>
      <li class=""><i class="step4"></i>
        <p>订单完成</p>
        <sub></sub>
        <div class="hr"></div>
      </li>
    </ul>
      </header>
<div class="ncc-wrapper">

  
<div class="ncc-main">
  <div class="ncc-title">
    <h3>我的购物车</h3>
    <h5>查看购物车商品清单，增加减少商品数量，并勾选想要的商品进入下一步操作。</h5>
  </div>
  <form action="http://www.hangowa.com/?act=buy&op=buy_step1" method="POST" id="form_buy" name="form_buy">
    <input type="hidden" value="1" name="ifcart">
    <input type="hidden" value="" name="ifchain" id="ifchain">
    <table class="ncc-table-style" nc_type="table_cart">
      <thead>
        <tr>
          <th class="w50"><label>
              <input type="checkbox" checked value="1" id="selectAll">
              全选</label></th>
          <th></th>
          <th>商品</th>
          <th class="w150">单价(元)</th>
          <th class="w100">数量</th>
          <th class="w150">小计(元)</th>
          <th class="w80 tl">操作</th>
        </tr>
      </thead>
                  <tbody>
        <tr>
          <th colspan="20"> <!-- S 店铺名称 -->
            
            <div class="ncc-store-name">店铺：<a href="http://www.hangowa.com/shop-15.html">荆门众邦特色馆</a><span member_id="208008"></span></div>
            
            <!-- E 店铺名称 --> 
            <!-- S 店铺满即送 -->
            
                        
            <!-- E 店铺代金券 --> 
            
            <!-- S 店铺满即送 -->
            
                        
            <!-- E 店铺满即送 --> 
            
            <!-- S 店铺满金额包邮 -->
            
                        
            <!-- S 店铺满金额包邮 --> </th>
        </tr>
        <!-- S one store list -->
                <tr id="cart_item_37024" nc_group="37024" class="shop-list ">
          <td class="td-border-left "><input type="checkbox" checked nc_type="eachGoodsCheckBox" value="37024|1" data_chain="0" data_store_id="15" id="cart_id37024" name="cart_id[]" class="checkbox mt10"
 /></td>
                              <td class="w100"><a href="http://www.hangowa.com/item-101046.html" target="_blank" class="ncc-goods-thumb"><img src="http://www.hangowa.com/data/upload/shop/store/goods/15/2016/15_05269897971967809_240.jpg" alt="特产稻香长粒大米10斤 非转基因长粒大米 香糯清甜【荆门农谷鲜】" /></a></td>
                    <td class="tl" ><dl class="ncc-goods-info">
              <dt>
                                <a href="http://www.hangowa.com/item-101046.html" target="_blank" title="特产稻香长粒大米10斤 非转基因长粒大米 香糯清甜【荆门农谷鲜】">特产稻香长粒大米10斤 非转基因长粒大米 香糯清甜【荆门农谷鲜】</a></dt>
                            <dd class="goods-spec"></dd>
                            <!-- S 优惠套装规则 -->
                            <!-- E 优惠套装规则 --> 
              <!-- S 门店自提服务 -->
                            <!-- E 门店自提服务 --> 
              <!-- S 消费者保障服务 -->
                            <!-- E 消费者保障服务 --> 
              <!-- S 商品赠品列表 -->
                            <!-- E 商品赠品列表 -->
            </dl></td>
          <td><!-- S 商品单价 -->
            
                        <em id="item37024_price" class="goods-price">30.00</em> 
            <!-- E 商品单价 --> 
            <!-- S 商品促销-限时折扣 -->
            
                        
            <!-- E 商品促销-限时折扣 --> 
            <!-- S 商品促销-团购 -->
            
                        
            <!-- S 商品促销-团购 --></td>
                    <td class="ws0"><a href="JavaScript:void(0);" onclick="decrease_quantity(37024);" title="减少商品件数" class="add-substract-key tip">-</a>
            <input id="input_item_37024" bl_id="0" value="1" orig="1" changed="1" onkeyup="change_quantity(37024, this);" type="text" class="text tc w20"/>
            <a href="JavaScript:void(0);" onclick="add_quantity(37024);" title="增加商品件数" class="add-substract-key tip" >+</a></td>
                    <td>            <em id="item37024_subtotal" nc_type="eachGoodsTotal" class="goods-subtotal">30.00</em>
            </td>
          <td class="tl td-border-right">            <a href="javascript:void(0)" onclick="collect_goods('101046');">移入收藏夹</a><br/>
                        <a href="javascript:void(0)" onclick="drop_cart_item(37024);">删除</a></td>
        </tr>
        <!-- S bundling goods list -->
                <!-- E bundling goods list -->
                <!-- E one store list -->
        <tr>
          <td colspan="20"></td>
        </tr>
                    <tbody>
        <tr>
          <th colspan="20"> <!-- S 店铺名称 -->
            
            <div class="ncc-store-name">店铺：<a href="http://www.hangowa.com/shop-66.html">南浦专营店</a><span member_id="209607"></span></div>
            
            <!-- E 店铺名称 --> 
            <!-- S 店铺满即送 -->
            
                        
            <!-- E 店铺代金券 --> 
            
            <!-- S 店铺满即送 -->
            
                        
            <!-- E 店铺满即送 --> 
            
            <!-- S 店铺满金额包邮 -->
            
                        
            <!-- S 店铺满金额包邮 --> </th>
        </tr>
        <!-- S one store list -->
                <tr id="cart_item_36955" nc_group="36955" class="shop-list ">
          <td class="td-border-left "><input type="checkbox" checked nc_type="eachGoodsCheckBox" value="36955|1" data_chain="0" data_store_id="66" id="cart_id36955" name="cart_id[]" class="checkbox mt10"
 /></td>
                              <td class="w100"><a href="http://www.hangowa.com/item-101053.html" target="_blank" class="ncc-goods-thumb"><img src="http://www.hangowa.com/data/upload/shop/store/goods/66/2016/66_05270345526560473_240.jpg" alt="天喔主意 俏话梅 500g" /></a></td>
                    <td class="tl" ><dl class="ncc-goods-info">
              <dt>
                                <a href="http://www.hangowa.com/item-101053.html" target="_blank" title="天喔主意 俏话梅 500g">天喔主意 俏话梅 500g</a></dt>
                            <dd class="goods-spec"></dd>
                            <!-- S 优惠套装规则 -->
                            <!-- E 优惠套装规则 --> 
              <!-- S 门店自提服务 -->
                            <!-- E 门店自提服务 --> 
              <!-- S 消费者保障服务 -->
                            <!-- E 消费者保障服务 --> 
              <!-- S 商品赠品列表 -->
                            <!-- E 商品赠品列表 -->
            </dl></td>
          <td><!-- S 商品单价 -->
            
                        <em id="item36955_price" class="goods-price">27.60</em> 
            <!-- E 商品单价 --> 
            <!-- S 商品促销-限时折扣 -->
            
                        
            <!-- E 商品促销-限时折扣 --> 
            <!-- S 商品促销-团购 -->
            
                        
            <!-- S 商品促销-团购 --></td>
                    <td class="ws0"><a href="JavaScript:void(0);" onclick="decrease_quantity(36955);" title="减少商品件数" class="add-substract-key tip">-</a>
            <input id="input_item_36955" bl_id="0" value="1" orig="1" changed="1" onkeyup="change_quantity(36955, this);" type="text" class="text tc w20"/>
            <a href="JavaScript:void(0);" onclick="add_quantity(36955);" title="增加商品件数" class="add-substract-key tip" >+</a></td>
                    <td>            <em id="item36955_subtotal" nc_type="eachGoodsTotal" class="goods-subtotal">27.60</em>
            </td>
          <td class="tl td-border-right">            <a href="javascript:void(0)" onclick="collect_goods('101053');">移入收藏夹</a><br/>
                        <a href="javascript:void(0)" onclick="drop_cart_item(36955);">删除</a></td>
        </tr>
        <!-- S bundling goods list -->
                <!-- E bundling goods list -->
                <!-- E one store list -->
        <tr>
          <td colspan="20"></td>
        </tr>
                    <tbody>
        <tr>
          <th colspan="20"> <!-- S 店铺名称 -->
            
            <div class="ncc-store-name">店铺：<a href="http://www.hangowa.com/shop-41.html">秭归特色馆</a><span member_id="208011"></span></div>
            
            <!-- E 店铺名称 --> 
            <!-- S 店铺满即送 -->
            
                        
            <!-- E 店铺代金券 --> 
            
            <!-- S 店铺满即送 -->
            
                        
            <!-- E 店铺满即送 --> 
            
            <!-- S 店铺满金额包邮 -->
            
                        
            <!-- S 店铺满金额包邮 --> </th>
        </tr>
        <!-- S one store list -->
                <tr id="cart_item_36951" nc_group="36951" class="shop-list ">
          <td class="td-border-left "><input type="checkbox" checked nc_type="eachGoodsCheckBox" value="36951|2" data_chain="0" data_store_id="41" id="cart_id36951" name="cart_id[]" class="checkbox mt10"
 /></td>
                              <td class="w100"><a href="http://www.hangowa.com/item-102552.html" target="_blank" class="ncc-goods-thumb"><img src="http://www.hangowa.com/data/upload/shop/store/goods/41/2017/41_05464307040367620_240.jpg" alt="蜂蜜纯正天然农家自产 土蜂蜜 500g 包邮" /></a></td>
                    <td class="tl" ><dl class="ncc-goods-info">
              <dt>
                                <a href="http://www.hangowa.com/item-102552.html" target="_blank" title="蜂蜜纯正天然农家自产 土蜂蜜 500g 包邮">蜂蜜纯正天然农家自产 土蜂蜜 500g 包邮</a></dt>
                            <dd class="goods-spec"></dd>
                            <!-- S 优惠套装规则 -->
                            <!-- E 优惠套装规则 --> 
              <!-- S 门店自提服务 -->
                            <!-- E 门店自提服务 --> 
              <!-- S 消费者保障服务 -->
                            <!-- E 消费者保障服务 --> 
              <!-- S 商品赠品列表 -->
                            <!-- E 商品赠品列表 -->
            </dl></td>
          <td><!-- S 商品单价 -->
            
                        <em id="item36951_price" class="goods-price">98.00</em> 
            <!-- E 商品单价 --> 
            <!-- S 商品促销-限时折扣 -->
            
                        
            <!-- E 商品促销-限时折扣 --> 
            <!-- S 商品促销-团购 -->
            
                        
            <!-- S 商品促销-团购 --></td>
                    <td class="ws0"><a href="JavaScript:void(0);" onclick="decrease_quantity(36951);" title="减少商品件数" class="add-substract-key tip">-</a>
            <input id="input_item_36951" bl_id="0" value="2" orig="2" changed="2" onkeyup="change_quantity(36951, this);" type="text" class="text tc w20"/>
            <a href="JavaScript:void(0);" onclick="add_quantity(36951);" title="增加商品件数" class="add-substract-key tip" >+</a></td>
                    <td>            <em id="item36951_subtotal" nc_type="eachGoodsTotal" class="goods-subtotal">196.00</em>
            </td>
          <td class="tl td-border-right">            <a href="javascript:void(0)" onclick="collect_goods('102552');">移入收藏夹</a><br/>
                        <a href="javascript:void(0)" onclick="drop_cart_item(36951);">删除</a></td>
        </tr>
        <!-- S bundling goods list -->
                <!-- E bundling goods list -->
                <!-- E one store list -->
        <tr>
          <td colspan="20"></td>
        </tr>
              </tbody>
      <tfoot>
        <tr>
          <td colspan="20"><div class="ncc-all-account">商品总价（不含运费）<em id="cartTotal"></em>元</div>
            <a id="next_submit" href="javascript:void(0)" class="ncc-next-submit">确认订单</a></td>
        </tr>
      </tfoot>
    </table>
  </form>
  
  <!-- 猜你喜欢 -->
  <div id="guesslike_div"></div>
</div>
<div class="jjg-chooes-box" id="jjg-choose-container">
  <div class="title-bar">
    <h3>换购商品列表</h3>
    <a href="javascript:;" id="jjg-choose-container-close" class="close" title="关闭">&#215;</a></div>
  <div class="choose-inner" id="jjg-choose-container-inner">
    <table>
      <thead>
        <tr>
          <th class="w30"></th>
          <th colspan="2">换购商品</th>
          <th class="w80">换购价格</th>
          <th class="w80">换购数量</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>
<table style="display:none;">
  <tbody id="jjg-choose-item-wrapper">
    <tr>
      <td><input type="checkbox"
                    data-jjg-leveled="%jjg_id%"
                    data-jjg-leveled-level="%jjg_level%"
                    data-jjg-leveled-sku="%id%"
                /></td>
      <td class="w40"><img alt="" data-src="%imgUrl%"/></td>
      <td class="tl"><a target="_blank" href="%url%" class="name">%name%</a></td>
      <td><em class="old">%price%</em><em>%jjg_price%</em></td>
      <td>X1</td>
    </tr>
  </tbody>
  <tbody id="jjg-header-wrapper">
    <tr class="jjg-xor-outer-false">
      <td colspan="20" class="td-border-left td-border-rihgt tl"><div class="jjg-xor-inner-false"><strong>【加价购】</strong>已购满 %m0% 元，再加 %p0% 元，即可换购商品。 </div>
        <div class="jjg-xor-inner-true"><strong>【加价购】</strong>已购满 <span data-jjg-header-mincost="%id%">%mincost%</span> 元，再加 <span data-jjg-header-plus="%id%">%plus%</span> 元，点击<a href="javascript:;" data-jjg-toggle="%id%" class="ncbtn-mini ml5">换购商品<i class="icon-caret-down ml5"></i></a></div>
        <div data-jjg-result="%id%"> </div></td>
    </tr>
  </tbody>
  <tbody id="jjg-footer-wrapper">
    <tr>
      <td colspan="20" style="padding: 4px;"></td>
    </tr>
  </tbody>
  <tbody id="jjg-chosen-item-wrapper">
    <tr data-chosen-item="%jjg_id%" data-chosen-item-sku="%id%" class="bundling-list">
      <td class="td-border-left tree"><input type="hidden" name="jjg[]" value="%jjg_id%|%jjg_level%|%id%" /></td>
      <td><a class="ncc-goods-thumb" href="%url%" target="_blank"><img alt="%name%" data-src="%imgUrl%"></a></td>
      <td class="tl"><dl class="ncc-goods-info">
          <dt> <a href="%url%" target="_blank">%name%</a> </dt>
          <dd class="ncc-goods-gift"> <span>已选换购</span> </dd>
        </dl></td>
      <td><em class="goods-price">%jjg_price%</em></td>
      <td>1</td>
      <td><em class="jjg-item-when-calculation goods-subtotal">%jjg_price%</em></td>
      <td class="td-border-right"></td>
    </tr>
  </tbody>
</table>
<script type="text/javascript">
$(function() {
	$('a[nc_type="chain"]').on('click',function(){
		var chains = [],store_id = $(this).attr('data_store_id');
		$('input[name="cart_id[]"]').each(function(){
    			if ($(this).attr('data_store_id') != store_id) {
    				$(this).attr('checked',false);
    			} else {
    				if ($(this).prop('checked') && $(this).attr('data_chain') == '1') {
    					chains.push($(this).val());
    				} else {
    					$(this).attr('checked',false);
        			}
    			}
		});
		if (chains.length > 0) {
			$('#ifchain').val('1');
			$('#form_buy').submit();
		} else {
			alert('请先选择支持门店自提的商品');
			$('#ifchain').val('');
		}
	});
    //猜你喜欢
    $('#guesslike_div').load('http://www.hangowa.com/?act=search&op=get_guesslike', function(){
        $(this).show();
    });
    // 领取代金券
    $('div[nctype="get_voucher"]').on('click', 'a[data-tid]', function(){
        var _tid = $(this).attr('data-tid');
        ajaxget('index.php?act=voucher&op=getvouchersave&jump=0&tid=' + _tid);
    });
	//
	$('#jjg-choose-container-inner').perfectScrollbar({suppressScrollX:true});
});

// 加价购
window.jjgCallback = (function(jjgDetails) {
	
	

    // 各个活动的头部
    var headers = {};

    // 各个活动的头部
    var footers = {};

    // 页面上被删掉的活动
    var missings = {};

    // 最后一次操作各个活动的已选商品总金额
    var costs = {};

    // 最后一次操作各个活动的限换购数
    var maxes = {};

    // 获取指定活动当前已选商品总金额 并缓存结果
    var jjgCost = function(id) {
        if (missings[id]) {
            costs[id] = 0;
            return 0;
        }

        var $items = $(":checkbox[data-jjg="+id+"]");
        if ($items.length < 1) {
            missings[id] = true;
            costs[id] = 0;
            return 0;
        }

        var c = 0;
        $items.filter(':checked').parents('tr.shop-list').find("em[nc_type='eachGoodsTotal']").each(function() {
            c += parseFloat(this.innerHTML) || 0;
        });
        costs[id] = c;
        return c;
    };

    // 活动头部TPL
    var jjgHeaderTpl = $('#jjg-header-wrapper').html();
    var jjgFooterTpl = $('#jjg-footer-wrapper').html();

    // 根据金额设置指定活动的头部
    var jjgHeader = function(id, selectedCost) {
        if (missings[id] && headers[id]) {
            headers[id].remove();
            footers[id].remove();
            return;
        }

        var found = false;
        var r = {
            id: id,
            storeId: jjgDetails.cou[id].info.store_id,
            mincost: jjgDetails.cou[id].firstLevel.mincost,
            plus: jjgDetails.cou[id].firstLevel.plus
        };
        r.m0 = r.mincost;
        r.p0 = r.plus;

        if (selectedCost >= r.mincost) {
            found = true;
            $.each(jjgDetails.cou[id].levels || {}, function(k, v) {
                if (selectedCost < v.mincost) {
                    return false;
                }
                r.mincost = v.mincost;
                r.plus = v.plus;
            });
        }

        if (headers[id]) {
            headers[id].find('[data-jjg-header-mincost]').html(r.mincost);
            headers[id].find('[data-jjg-header-plus]').html(r.plus);
        } else {
            var s = jjgHeaderTpl.replace(/%(\w+)%/g, function(m, $1) {
                return r[$1];
            });
            var $tr = $(s);
            var $tr2 = $(jjgFooterTpl);
            $(":checkbox[data-jjg='"+id+"']:first").parents('tr.shop-list').before($tr);
            $(":checkbox[data-jjg='"+id+"']:last").parents('tr.shop-list').after($tr2);

            headers[id] = $tr;
            footers[id] = $tr2;
        }

        headers[id].removeClass('jjg-xor-outer-'+!found).addClass('jjg-xor-outer-'+found);

        return found;
    };

    // 设置指定活动的头部
    var jjgSet = function(id) {
        hideChoices();

        // 已选活动商品变化则需要重新换购
        var selectedCouSkus = {};
        $("[data-chosen-item='"+id+"']").each(function() {
            var sku = $(this).attr('data-chosen-item-sku');
            selectedCouSkus[sku] = true;
        });

        $("[data-chosen-item='"+id+"']").remove();

        var c = jjgCost(id);
        var found = jjgHeader(id, c);

        // 重新换购已换购商品
        if (found) {
            var lastLevelFound = 0;
            // 遍历寻找当前已选活动商品金额可以选择的换购
            $.each(jjgDetails.cou[id].levels, function(k, v) {
                // 不满足条件则跳出循环
                if (v.mincost > costs[id]) {
                    return false;
                }

                // 更新当前活动规则的最大换购数
                maxes[id] = v.maxcou;
                lastLevelFound = k;
            });

            if (!lastLevelFound) {
                return;
            }

            // 可选换购商品
            var availableCouSkus = jjgDetails.cou[id].levelSkus[lastLevelFound] || {};
            // 最大限制换购数
            var m = maxes[id] || 0;

            // 遍历已换购商品
            $.each(selectedCouSkus, function(kk, vv) {
                if (!availableCouSkus[kk]) {
                    return;
                }
                if (m > 0 && $("[data-chosen-item='"+id+"']").length >= m) {
                    return false;
                }

                // 重新换购已换购商品
                choiceRealTriggered(id, lastLevelFound, kk, true);
            });
        }
    }

    // 当前激活换购选择的活动ID 0为未激活任何活动换购选择
    var jjgCurrentId = 0;

    // 隐藏共用的换购选择框
    var hideChoices = function() {
        jjgCurrentId = 0;
        $('#jjg-choose-container').css({
            top: -1000,
            left: -1000
        });
    };

    // 绑定换购选择框关闭按钮事件
    $('#jjg-choose-container-close').click(hideChoices);

    // 换购条目TPL
    var itemTpl = $('#jjg-choose-item-wrapper').html();

    // 绑定未来各个活动头部中的“换购商品”按钮的点击事件
    $('[data-jjg-toggle]').live('click', function() {
        var id = $(this).attr('data-jjg-toggle');

        // 如果当前活动已激活选择换购 则隐藏换购选择框
        if (id == jjgCurrentId) {
            hideChoices();
            return;
        }

        // 设置当前激活选择的活动
        jjgCurrentId = id;

        // 设置选择框位置
        var o = $(this).offset();
        o.top += $(this).height();
        $('#jjg-choose-container').css({
            top: o.top+3,
            left: o.left
        });

        // 清空选择框
        var $table = $('#jjg-choose-container tbody').empty();

        var lastLevelFound = 0;
        // 遍历寻找当前已选活动商品金额可以选择的换购
        $.each(jjgDetails.cou[id].levels, function(k, v) {
            // 不满足条件则跳出循环
            if (v.mincost > costs[id]) {
                return false;
            }

            // 更新当前活动规则的最大换购数
            maxes[id] = v.maxcou;
            lastLevelFound = k;
        });

        // 遍历插入规则中的可选换购商品
        $.each(jjgDetails.cou[id].levelSkus[lastLevelFound] || {}, function(kk, vv) {
            var r = $.extend({
                jjg_id: id,
                jjg_level: lastLevelFound,
                jjg_price: vv.price
            }, jjgDetails.items[kk]);

            var s = itemTpl.replace(/%(\w+)%/g, function(m, $1) {
                return r[$1];
            });

            var $s = $(s);
            $s.find('img').each(function() {
                this.src = $(this).attr('data-src');
            });

            $table.append($s);
        });

        // 设置已选换购商品为选中 并且触发选中事件
        $("[data-chosen-item='"+id+"']").each(function() {
            var sku = $(this).attr('data-chosen-item-sku');
            $table.find("[data-jjg-leveled-sku='"+sku+"']").each(function() {
                // 如果当前换购不可选 则跳出循环 正常不会有这种情况出现
                if (this.disabled) {
                    return false;
                }
                this.checked = true;
                choiceTriggered(this);
            });
        });
    });

    // 已选择换购条目TPL
    var chosenItemTpl = $('#jjg-chosen-item-wrapper').html();

    // 换购条目复选框被点击需要触发的操作
    var choiceTriggered = function(element) {
        var id = $(element).attr('data-jjg-leveled');
        var level = $(element).attr('data-jjg-leveled-level');
        var sku = $(element).attr('data-jjg-leveled-sku');
        var elementChecked = element.checked;
        choiceRealTriggered(id, level, sku, elementChecked);
    };

    var choiceRealTriggered = function(id, level, sku, elementChecked) {
        var m = maxes[id];

        if (m > 0) {
            var $leveled = $(":checkbox[data-jjg-leveled='"+id+"']");
            if ($leveled.filter(':checked').length >= m) {
                $leveled.not(':checked').attr('disabled', true);
            } else {
                $leveled.removeAttr('disabled');
            }
        }

        $("[data-chosen-item='"+id+"'][data-chosen-item-sku='"+sku+"']").remove();
        if (elementChecked) {
            var r = $.extend({
                jjg_id: id,
                jjg_level: level,
                jjg_price: jjgDetails.cou[id].levelSkus[level][sku].price
            }, jjgDetails.items[sku]);
            var s = chosenItemTpl.replace(/%(\w+)%/g, function(mat, $1) {
                return r[$1];
            });

            var $s = $(s);
            $s.find('img').each(function() {
                this.src = $(this).attr('data-src');
            });

            footers[id].before($s);
        }

        // 执行外部函数 重新计算总价
        if (window.jjgRecalculator) {
            window.jjgRecalculator();
        }
    };

    // 绑定未来换购复选框点击事件
    $(':checkbox[data-jjg-leveled]').live('click', function() {
        choiceTriggered(this);
    });

    // 导出函数 外部使用
    return function(jjgId) {
        if (jjgId < 0) {
            return;
        }

        if (jjgId > 0) {
            jjgSet(jjgId);
            return;
        }

        $.each(jjgDetails.cou || {}, function(k, v) {
            jjgSet(k);
        });
    };

})([]);

</script> 

</div><script language="javascript">
	function fade() {
		$("img[rel='lazy']").each(function() {
			var $scroTop = $(this).offset();
			if ($scroTop.top <= $(window).scrollTop() + $(window).height()) {
				$(this).hide();
				$(this).attr("src", $(this).attr("shopwwi-url"));
				$(this).removeAttr("rel");
				$(this).removeAttr("name");
				$(this).fadeIn(500);
			}
		});
	}

	if ($("img[rel='lazy']").length > 0) {
		$(window).scroll(function() {
			fade();
		});
	};
	fade();

</script>
					<link href="http://www.hangowa.com/chat/templates/default/css/chat.css" rel="stylesheet" type="text/css">
					<div style="clear: both;"></div>
					<div id="web_chat_dialog" style="display: none;float:right;">
					</div>
					<a id="chat_login" href="javascript:void(0)" style="display: none;"></a>
					<script type="text/javascript">
					var LOGIN_SITE_URL = 'http://www.hangowa.com/member';
					var CHAT_SITE_URL = 'http://www.hangowa.com/chat';
					var SHOP_SITE_URL = 'http://www.hangowa.com';
					var connect_url = "http://www.hangowa.com:8091";

					var layout = "layout/buy_layout.php";
					var act_op = "cart_index";
					var chat_goods_id = "";
					var user = {};

					user['u_id'] = "240460";
					user['u_name'] = "走笔尘世";
					user['s_id'] = "";
					user['s_name'] = "";
					user['s_avatar'] = "http://www.hangowa.com/data/upload/shop/common/default_store_avatar.gif";
					user['avatar'] = "http://www.hangowa.com/data/upload/shop/common/default_user_portrait.gif";

					$("#chat_login").nc_login({
					  action:'/index.php?act=login',
					  nchash:'',
					  formhash:'uixQtUvQwt7PmF6Z_vidXu0bRxdWfaR'
					});
					</script><script type="text/javascript" src="http://www.hangowa.com/data/resource/js/jquery.charCount.js" charset="utf-8"></script><script type="text/javascript" src="http://www.hangowa.com/data/resource/js/jquery.smilies.js" charset="utf-8"></script><script type="text/javascript" src="http://www.hangowa.com/chat/resource/js/user.js" charset="utf-8"></script>

<!--start 底部-->
<footer>

	<div class="foot_bg1">
    	<div class="wrapper">
            <div class="con">
				            </div>
        </div>
    </div>
    <div class="foot_bg2">
    	<div class="wrapper">
            <div class="con2">
                <p><a href="http://www.hangowa.com">返回首页</a>
																		<span>|</span> <a target="_blank" href="/?act=show_joinin&amp;op=index">商家入驻</a>
												<span>|</span> <a href="/member/?act=article&amp;article_id=23">联系我们</a>
												<span>|</span> <a href="/member/article-41.html">关于汉购网</a>
												<span>|</span> <a target="_blank" href="https://www.hansap.com/">汉搜云</a>
																																				<span>|</span><a href="http://www.hangowa.com/?act=link&op=index">友情链接</a>
				</p>
                <p>
                	&copy;2005-2016 武汉易行九州网络服务有限公司版权所有，并保留所有权利
                </p>
				
            </div>
			
			
        </div>
        <p><script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?d875947cc5453243549c5bc6172ef84f";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script></p>
    </div>
	<p class="footer-fp-img">
		<a  key ="549264e13b05a3da0fbd611a"  logo_size="83x30"  logo_type="realname"  href="http://www.anquan.org" ><script src="//static.anquan.org/static/outer/js/aq_auth.js"></script></a>
<!--		<a  key ="549264e13b05a3da0fbd611a"  logo_size="124x47"  logo_type="realname"  href="http://www.anquan.org" ><script src="//static.anquan.org/static/outer/js/aq_auth.js"></script></a>-->
		<a href="javascrit:void(0);"><img src="/shop/templates/default/images/gangting.gif" /></a>
		<a href="javascrit:void(0);"><img src="/shop/templates/default/images/beian.jpg" /></a>
		<a href="http://wljg.egs.gov.cn/iciaicweb/dzbscheck.do?method=change&id=E2014121800067587" target="_blank"><img src="/shop/templates/default/images/gongshang-icon.png" /></a>
	</p>
</footer>
<!--end 底部-->
<script>
	
	
$(function(){
	$(".foot_bg1 ul li:last").css("border","none");
})
</script>

 
<script type="text/javascript" src="http://www.hangowa.com/data/resource/js/jquery.cookie.js"></script>
<link href="http://www.hangowa.com/data/resource/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://www.hangowa.com/data/resource/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="http://www.hangowa.com/data/resource/js/qtip/jquery.qtip.min.js"></script>
<link href="http://www.hangowa.com/data/resource/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css">
<!-- 对比 -->
<script src="http://www.hangowa.com/resource/js/compare.js"></script>
<script src="http://www.hangowa.com/resource/js/main.js"></script>
<script type="text/javascript">
	$(function() {
		// Membership card
		$('[nctype="mcard"]').membershipCard({
			type: 'shop'
		});
	});

	var name = jQuery.cookie('hango_member_name')? jQuery.cookie('hango_member_name'):'';
	var uid = jQuery.cookie('hango_member_id')?jQuery.cookie('hango_member_id'):'';
</script>

<!--start 360点睛代码-->

<!--end 360点睛代码-->

<!--start 小能客服代码-->
<script>
NTKF_PARAM = {
	siteid: 'kf_9863',		//企业ID，必填，取值参见文档开始表
	settingid: 'kf_9863_1395034529227',		//缺省客服配置ID，必填，取值参见文档开始表
	uid:uid,		//用户ID,未登录可以为空
	uname:name,		//用户名，未登录可以为空
	ntalkerparam:{}
} ;

		
	NTKF_PARAM.ntalkerparam = {
		cartprice:	'0',	//购物车总价
　		items:	[{"id":"101046","count":"1","name":"\u7279\u4ea7\u7a3b\u9999\u957f\u7c92\u5927\u7c7310\u65a4 \u975e\u8f6c\u57fa\u56e0\u957f\u7c92\u5927\u7c73 \u9999\u7cef\u6e05\u751c\u3010\u8346\u95e8\u519c\u8c37\u9c9c\u3011","imageurl":"http:\/\/www.hangowa.com\/data\/upload\/shop\/store\/goods\/15\/2016\/15_05269897971967809_60.jpg","url":"101046","siteprice":"30.00"},{"id":"101053","count":"1","name":"\u5929\u5594\u4e3b\u610f \u4fcf\u8bdd\u6885 500g","imageurl":"http:\/\/www.hangowa.com\/data\/upload\/shop\/store\/goods\/66\/2016\/66_05270345526560473_60.jpg","url":"101053","siteprice":"27.60"},{"id":"102552","count":"2","name":"\u8702\u871c\u7eaf\u6b63\u5929\u7136\u519c\u5bb6\u81ea\u4ea7 \u571f\u8702\u871c 500g \u5305\u90ae","imageurl":"http:\/\/www.hangowa.com\/data\/upload\/shop\/store\/goods\/41\/2017\/41_05464307040367620_60.jpg","url":"102552","siteprice":"98.00"}]	};
	
</script>
<script type="text/javascript" src="http://dl.ntalker.com/js/xn6/ntkfstat.js?siteid=kf_9863" charset="utf-8"></script>
<!--end 小能客服代码-->
<script>
//提示信息
$('.tip').poshytip({
	className: 'tip-yellowsimple',
	showOn: 'hover',
	alignTo: 'target',
	alignX: 'center',
	alignY: 'top',
	offsetX: 0,
	offsetY: 5,
	allowTipHover: false
});
</script>
</body>
</html>
