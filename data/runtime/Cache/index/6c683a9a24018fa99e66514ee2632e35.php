<?php if (!defined('THINK_PATH')) exit();?><!doctype html><html><head><meta charset="utf-8" /><title><?php echo ($page_seo["title"]); ?> - Powered by 138gzs.com</title><meta name="keywords" content="<?php echo ($page_seo["keywords"]); ?>" /><meta name="description" content="<?php echo ($page_seo["description"]); ?>" /><meta name="generator" content="huameiftx! 5.0" /><meta name="author" content="Ftxia Team  www.138gzs.com" /><meta name="copyright" content="2010-2013 huameiftx Inc." /><meta name="MSSmartTagsPreventParsing" content="True" /><meta http-equiv="MSThemeCompatible" content="Yes" /><link rel="stylesheet" type="text/css" href="__STATIC__/ftxia/new/css/base.css" /><link rel="stylesheet" type="text/css" href="__STATIC__/ftxia/new/css/global.css" /><link rel="stylesheet" type="text/css" href="__STATIC__/ftxia/new/css/alert.css" /><link rel="stylesheet" type="text/css" href="__STATIC__/ftxia/css/alert.css" /><script type="text/javascript" src="__STATIC__/js/jquery/jquery.js"></script><?php echo C('ftx_header_html');?><script type="text/javascript" language="javascript">        function AddFavorite(sURL, sTitle) {
            sURL = encodeURI(sURL); 
        try{   
            window.external.addFavorite(sURL, sTitle);   
        }catch(e) {   
            try{   
                window.sidebar.addPanel(sTitle, sURL, "");   
            }catch (e) {   
 
                alert("加入收藏失败，请使用Ctrl+D进行添加,或手动在浏览器里进行设置.");
            }   
        }
    }
    function SetHome(url){
        if (document.all) {
            document.body.style.behavior='url(#default#homepage)';
               document.body.setHomePage(url);
        }else{ 
            alert("您好,您的浏览器不支持自动设置页面为首页功能,请您手动在浏览器里设置该页面为首页!"); 
        } 
    } 
</script><link rel="stylesheet" type="text/css" href="__STATIC__/ftxia/css/tmall.css" /><link rel="stylesheet" type="text/css" href="__STATIC__/ftxia/new/css/md-nav-good.css" /><link rel="stylesheet" type="text/css" href="__STATIC__/ftxia/css/list.css" /></head><body><div class="head"><div class="logo"><h1><a href="<?php echo U('index/index');?>" title="<?php echo C('ftx_site_name');?>"></a></h1><div class="search_box "><form method="get" action="__ROOT__/index.php" id="search"><span class="area"><input type="text" value="输入您想要找的宝贝" def-val="输入您想要找的宝贝" id="key" name="k" class="text" x-webkit-speech ></span><input type="hidden" name="m" value="index"><input type="hidden" name="a" value="so"><input type="submit" id="k" value=""  class="btn"><input type="submit" class="btn btn-tao" value="" id="ek"></form></div><p class="top-txt"><a href="http://m.mswang.net/" target="_blank">手机客户端</a><a onclick="AddFavorite(window.location,document.title)" href="javascript:void(0)">加入收藏夹</a><a onclick="SetHome(window.location)" href="javascript:void(0)">设为首页</a><a href="<?php echo U('union/index');?>" target="_blank">邀请好友</a></p></div><div class="nav"><ul class="navigation"><li <?php if($nav_curr == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo U('index/index');?>"><?php echo L('index_page');?></a></li><?php $tag_nav_class = new navTag;$data = $tag_nav_class->lists(array('type'=>'lists','style'=>'main','cache'=>'0','return'=>'data',)); if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li class="split <?php if($nav_curr == $val['alias']): ?>current<?php endif; ?>"><a href="<?php echo ($val["link"]); ?>" <?php if($val["target"] == 1): ?>target="_blank"<?php endif; ?>><?php echo ($val["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul><div class="state-show"><div class="sign" ><a id="signIn_btn" href="javascript:;" class="btn signin_a sign_btn"><i></i><span >签到</span></a><!--a id="signIn_btn" href="javascript:;" class="btn hover"><i></i><span >+5</span></a--></div><?php if(!empty($visitor)): ?><div class="login-ed"><div class="normal"><a href="<?php echo U('user/index');?>" class="nor-a"><span class="pic"><img height="16" width="16" src="<?php echo avatar($visitor['id'], 48);?>"></span><span><?php echo ($visitor["username"]); ?></span><em class="cur open"></em></a><div class="login-box zone-box" style="display: none; "><ul><li><a href="<?php echo U('user/gift');?>"><i class="icon-04"></i><span>我的礼品</span></a></li><li><a href="<?php echo U('user/like');?>"><i class="icon-05"></i><span>我的喜欢</span></a></li><li><a href="<?php echo U('user/index');?>"><i class="icon-06"></i><span>账号设置</span></a></li><li><a href="<?php echo U('user/logout');?>" class="exit"><i class="icon-07"></i><span>退出</span></a></li></ul></div></div></div><?php else: ?><div class="login-without" style="display:block;" ><span><a href="<?php echo U('user/login');?>">登录</a> / <a href="<?php echo U('user/register');?>">注册</a></span><?php if(is_array($oauth_list)): $i = 0; $__LIST__ = $oauth_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><a class="icon <?php echo ($val['code']); ?>-icon" href="<?php echo U('oauth/index', array('mod'=>$val['code']));?>" title="<?php echo ($val["name"]); ?>"></a><?php endforeach; endif; else: echo "" ;endif; ?></div><?php endif; ?></div></div></div><!--头部结束--><div class="jiu-nav widescreen clear" style="z-index: 18; "><div class="jiu-side-nav fixed" style="top:70px;"><div><a class="logo" title="九块邮-全场九块九包邮" href="http://ivta.yangtata.com"></a></div><div class="content"><div class="hd"><h3><span>全场9.9包邮</span></h3></div><div class="bd"><ul><?php if(empty($cate_list['s'][$cid])): if(empty($cate_list['s'][$cinfo['pid']])): if(is_array($cate_list['p'])): $i = 0; $__LIST__ = $cate_list['p'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bcate): $mod = ($i % 2 );++$i;?><li><a <?php if($cid == $bcate['id']): ?>class="on"<?php endif; ?> href="<?php echo U('index/cate', array('cid'=>$bcate['id']));?>"><?php echo ($bcate["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; else: if(is_array($cate_list['s'][$cinfo['pid']])): $i = 0; $__LIST__ = $cate_list['s'][$cinfo['pid']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bcate): $mod = ($i % 2 );++$i;?><li><a <?php if($cid == $bcate['id']): ?>class="on"<?php endif; ?> href="<?php echo U('index/cate', array('cid'=>$bcate['id']));?>"><?php echo ($bcate["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; endif; else: if(empty($cate_list['s'][$cinfo['pid']])): if(is_array($cate_list['s'][$cid])): $i = 0; $__LIST__ = $cate_list['s'][$cid];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bcate): $mod = ($i % 2 );++$i;?><li><a <?php if($cid == $bcate['id']): ?>class="on"<?php endif; ?> href="<?php echo U('index/cate', array('cid'=>$bcate['id']));?>"><?php echo ($bcate["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; else: if(is_array($cate_list['s'][$cinfo['pid']])): $i = 0; $__LIST__ = $cate_list['s'][$cinfo['pid']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bcate): $mod = ($i % 2 );++$i;?><li><a <?php if($cid == $bcate['id']): ?>class="on"<?php endif; ?> href="<?php echo U('index/cate', array('cid'=>$bcate['id']));?>"><?php echo ($bcate["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; endif; endif; ?></ul><ul class="bd-other bd-web"><?php $tag_nav_class = new navTag;$data = $tag_nav_class->lists(array('type'=>'lists','style'=>'top','cache'=>'0','return'=>'data',)); if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($val["link"]); ?>" <?php if($val["target"] == 1): ?>target="_blank"<?php endif; ?>><?php echo ($val["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="hd"><h3>精选推荐</h3></div><div class="bd"><ul class="bd-other"><?php $tag_nav_class = new navTag;$data = $tag_nav_class->lists(array('type'=>'lists','style'=>'main','cache'=>'0','return'=>'data',)); if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li class="split <?php if($nav_curr == $val['alias']): ?>current<?php endif; ?>"><a href="<?php echo ($val["link"]); ?>" <?php if($val["target"] == 1): ?>target="_blank"<?php endif; ?>><?php echo ($val["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="bottom"></div></div></div><?php if(!empty($k)): ?><ul class="nav-channel type clear"><li><a class="all" style="width:auto; padding:0 12px;">您搜索的内容为：<span class="red"><?php echo ($k); ?></span></a></li><span class="clear"></span></ul><?php else: ?><ul class="nav-channel clear list-sort"><li><a href="<?php echo U('index/index');?>" class="all"><i class="null"></i>全部 (<?php echo ($total_item); ?>)
            </a><?php if(!empty($cid)): ?><a href="<?php echo U('index/cate',array('cid'=>$cid,'sort'=>'default'));?>" class="ju_nav <?php if($index_info['sort'] == 'default'): ?>on<?php endif; ?>"><span>默认</span></a><a href="<?php echo U('index/cate',array('cid'=>$cid,'sort'=>'hot'));?>" class="ju_nav <?php if($index_info['sort'] == 'hot'): ?>on<?php endif; ?>"><span>销量</span>&nbsp;<i class="sort-sign"></i></a><a href="<?php echo U('index/cate',array('cid'=>$cid,'sort'=>'rate'));?>" class="ju_nav <?php if($index_info['sort'] == 'rate'): ?>on<?php endif; ?>"><span>折扣</span>&nbsp;<i class="sort-sign"></i></a><a href="<?php echo U('index/cate',array('cid'=>$cid,'sort'=>'new'));?>" class="ju_nav <?php if($index_info['sort'] == 'new'): ?>on<?php endif; ?>"><span>最新</span>&nbsp;<i class="sort-sign"></i></a><?php else: ?><a href="<?php echo U('index/index',array('sort'=>'default'));?>" class="ju_nav <?php if($index_info['sort'] == 'default'): ?>on<?php endif; ?>"><span>默认</span></a><a href="<?php echo U('index/index',array('sort'=>'hot'));?>" class="ju_nav <?php if($index_info['sort'] == 'hot'): ?>on<?php endif; ?>"><span>销量</span>&nbsp;<i class="sort-sign"></i></a><a href="<?php echo U('index/index',array('sort'=>'rate'));?>" class="ju_nav <?php if($index_info['sort'] == 'rate'): ?>on<?php endif; ?>"><span>折扣</span>&nbsp;<i class="sort-sign"></i></a><a href="<?php echo U('index/index',array('sort'=>'new'));?>" class="ju_nav <?php if($index_info['sort'] == 'new'): ?>on<?php endif; ?>"><span>最新</span>&nbsp;<i class="sort-sign"></i></a><?php endif; ?><a class="right " href="<?php echo U('before/index');?>"><i class="on"></i>往期宝贝</a></li><li class="last"><a class="today" href="<?php echo U('xinpin/index');?>">今日新品(<font id="total_xinpin"><?php echo ($today_item); ?></font>)</a><a href="<?php echo U('yugao/index');?>" class="torrow"><i class="torrow"></i>明日预告</a></li></ul><?php endif; ?></div><div class="mains"><div class="contain"><?php if(isset($items_list)): ?><ul class="product-list"><?php if(is_array($items_list)): $i = 0; $__LIST__ = $items_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 3 );++$i;?><li <?php if(($mod) == "2"): ?>class="mr0"<?php endif; ?>><div class="list-good"><h3><?php if($item["shop_type"] == 'C' ): ?><i class="tao_n" title="淘宝网"></i><?php endif; if($item["shop_type"] == 'B' ): ?><i class="tao_t" title="天猫商城"></i><?php endif; ?><a href="<?php echo U('item/index',array('id'=>$item['id']));?>"  target="_blank" title="<?php echo ($item["title"]); ?>"><?php echo ($item["title"]); ?></a></h3><div class="pic"><a href="<?php echo U('jump/index',array('id'=>$item['id']));?>"  rel="nofollow"  target="_blank"><img src="<?php echo ($item["pic_url"]); ?>_310x310.jpg" height="260" width="290"></a></div><div class="buy-action"><span class="price"><em>￥</em><?php echo ($item["coupon_price"]); ?></span><span class="oldprice"><em>¥</em><?php echo ($item["price"]); ?></span><?php if(!empty($visitor)): if($visitor['username'] == C('ftx_index_admin')): ?><span class="show" style="width: 30px;" data-id="<?php echo ($item["id"]); ?>"><a title="不显示" href="javascript:void(0);" data-id="<?php echo ($item["id"]); ?>">取消</a></span><?php endif; endif; ?><a href="<?php echo U('jump/index',array('id'=>$item['id']));?>"  rel="nofollow"  target="_blank" class="links "></a></div></div></li><?php endforeach; endif; else: echo "" ;endif; ?></ul><?php endif; ?><div class="clear"></div><div class="page"><em></em><div><?php echo ($page); ?></div></div></div></div><?php if(!empty($visitor)): if($visitor['username'] == C('ftx_index_admin')): ?><script type="text/javascript">	function noshow(id){
		if(!$.ftxia.dialog.islogin()) return ;
		$(this).html('<img src="/static/ftxia/images/loading.gif" />');
		$.ajax({
			url: FTXIAER.root + '/?m=item&a=noshow',
				type: 'POST',
				data: {
					id: id
				},
			dataType: 'json',
			success: function(result){
				if(result.status == 1){
					$.ftxia.tip({content:result.msg, icon:'success'});
				}else{
					$.ftxia.tip({content:result.msg, icon:'error'});
				}
			}
		});
	}

	$(".show a").click(function() {
		id = $(this).attr("data-id");
		if(!$.ftxia.dialog.islogin()) return ;
		$(this).html('<img src="/static/ftxia/images/loading.gif" />');
		$.ajax({
			url: FTXIAER.root + '/?m=item&a=noshow',
				type: 'POST',
				data: {
					id: id
				},
			dataType: 'json',
			success: function(result){
				if(result.status == 1){
					$(this).html('成功');
					$.ftxia.tip({content:result.msg, icon:'success'});
				}else{
					$(this).html('已取消');
					$.ftxia.tip({content:result.msg, icon:'error'});
				}
			}
		});
	});  
</script><?php endif; endif; ?><div class="foot"><div class="white_bg"><div class="xd_info"><div class="jky-info fl"><h2></h2><div class="attentionlist"><a class="sina" href="http://weibo.com/" target="_blank" rel="nofollow">新浪微博</a><a class="zone" href="http://422677261.qzone.qq.com" target="_blank" rel="nofollow">QQ空间</a><a class="tt" href="http://t.qq.com/422677261" target="_blank" rel="nofollow">腾讯微博</a></div></div><div class="linkslist fl"><div class="about"><ul><li class="tit">关于我们</li><li><a href="<?php echo U('help/read',array('id'=>3));?>">联系我们</a></li><li><a href="<?php echo U('help/read',array('id'=>1));?>">关于我们</a></li></ul></div><div class="hezuo"><ul><li class="tit">商务合作</li><li><a rel="nofollow" href="<?php echo U('goods/goods_add');?>" target="_blank">商家报名</a></li><li><a href="<?php echo U('help/read',array('id'=>4));?>">商家合作</a></li></ul></div><div class="help"><ul><li class="tit">用户帮助</li><li><a href="<?php echo U('help/read',array('id'=>5));?>">免责声明</a></li></ul></div></div><div class="wechat"><div class="slide-img"><ul id="box"><li><div class="pic fl"></div><p class="img fr"></p></li><li><div class="tao-pic fl"></div><p class="tao-img fr"></p></li></ul></div><div class="slide-btn" id="boxbtn"><b class="left-cur" href=""></b><b class="right-cur" href=""></b></div></div><div class="links"><span>友情链接：</span><div class="links_list_box"><ul class="links_list"><li><?php $tag_link_class = new linkTag;$data = $tag_link_class->lists(array('type'=>'lists','cache'=>'0','return'=>'data',)); if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 11 );++$i; if(($mod) == "10"): ?></li><li><?php endif; ?><a href="<?php echo ($val["url"]); ?>" target="_blank"><?php echo ($val["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?></li></ul></div><a href="<?php echo U('help/read',array('id'=>'6'));?>">更多&gt;&gt;</a></div></div><p class="f_miibeian">		2010-2014 138gzs.com V5.0 正式版 all Rights Reserved <a href="http://www.138gzs.com/" target="_blank">华美网络正式授权版</a> (<a href="http://www.miibeian.gov.cn" class="tdu clr6" target="_blank"><?php echo C('ftx_site_icp');?></a>) <script language="javascript" type="text/javascript" src="http://js.users.51.la/1615175.js"></script><?php echo C('ftx_statistics_code');?></p></div></div><!--淘点金代码开始--><script type="text/javascript">    (function(win,doc){
        var s = doc.createElement("script"), h = doc.getElementsByTagName("head")[0];
        if (!win.alimamatk_show) {
            s.charset = "gbk";
            s.async = true;
            s.src = "http://a.alimama.cn/tkapi.js";
            h.insertBefore(s, h.firstChild);
        };
        var o = {
            pid: "<?php echo C('ftx_taojindian_html');?>",/*推广单元ID，用于区分不同的推广渠道*/
            appkey: "",/*通过TOP平台申请的appkey，设置后引导成交会关联appkey*/
            unid: "",/*自定义统计字段*/
			plugins:[{name:"keyword"}]/*需要加载的插件：内文关键字插件*/
        };
        win.alimamatk_onload = win.alimamatk_onload || [];
        win.alimamatk_onload.push(o);
    })(window,document);
</script><!--淘点金代码结束--><script type="text/javascript">var FTXIAER = {
    root: "__ROOT__",
	site: "<?php echo C('ftx_site_url');?>",
    uid: "<?php echo $visitor['id'];?>", 
	chaxunurl: "<?php echo U('ajax/check_item');?>",
    url: {}
};
var lang = {};
<?php $_result=L('js_lang');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>lang.<?php echo ($key); ?> = "<?php echo ($val); ?>";<?php endforeach; endif; else: echo "" ;endif; ?></script><?php $tag_load_class = new loadTag;$data = $tag_load_class->js(array('type'=>'js','href'=>'__STATIC__/js/jquery/plugins/jquery.tools.min.js,__STATIC__/js/jquery/plugins/jquery.masonry.js,__STATIC__/js/jquery/plugins/formvalidator.js,__STATIC__/js/fileuploader.js,__STATIC__/js/ftxia.js,__STATIC__/js/front.js,__STATIC__/js/goback.js,__STATIC__/js/dialog.js,__STATIC__/js/item.js,__STATIC__/js/user.js,__STATIC__/js/comment.js,__STATIC__/js/comm.js','cache'=>'0','return'=>'data',));?></body></html>