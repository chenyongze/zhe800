<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><link href="__STATIC__/css/admin/style.css" rel="stylesheet"/><title><?php echo L('website_manage');?></title><script>	var URL = '__URL__';
	var SELF = '__SELF__';
	var ROOT_PATH = '__ROOT__';
	var APP	 =	 '__APP__';
	//语言项目
	var lang = new Object();
	<?php $_result=L('js_lang');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>lang.<?php echo ($key); ?> = "<?php echo ($val); ?>";<?php endforeach; endif; else: echo "" ;endif; ?></script></head><body><div id="J_ajax_loading" class="ajax_loading"><?php echo L('ajax_loading');?></div><?php if(($sub_menu != '') OR ($big_menu != '')): ?><div class="subnav"><div class="content_menu ib_a blue line_x"><?php if(!empty($big_menu)): ?><a class="add fb J_showdialog" href="javascript:void(0);" data-uri="<?php echo ($big_menu["iframe"]); ?>" data-title="<?php echo ($big_menu["title"]); ?>" data-id="<?php echo ($big_menu["id"]); ?>" data-width="<?php echo ($big_menu["width"]); ?>" data-height="<?php echo ($big_menu["height"]); ?>"><em><?php echo ($big_menu["title"]); ?></em></a>　<?php endif; if(!empty($sub_menu)): if(is_array($sub_menu)): $key = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($key % 2 );++$key; if($key != 1): ?><span>|</span><?php endif; ?><a href="<?php echo U($val['module_name'].'/'.$val['action_name'],array('menuid'=>$menuid)); echo ($val["data"]); ?>" class="<?php echo ($val["class"]); ?>"><em><?php echo ($val['name']); ?></em></a><?php endforeach; endif; else: echo "" ;endif; endif; ?></div></div><?php endif; ?><!--添加商品--><div class="subnav"><h1 class="title_2 line_x">添加商品</h1></div><link rel="stylesheet" type="text/css" href="__STATIC__/js/calendar/calendar-blue.css"/><script type="text/javascript" src="__STATIC__/js/calendar/calendar.js"></script><form id="info_form" name="info_form" action="<?php echo u('items/add');?>" method="post" enctype="multipart/form-data"><input type="hidden" name="num_iid" id="J_num_iid" value="" /><input type="hidden" name="item_url" id="J_item_url" value="" /><div class="pad_lr_10"><div class="col_tab"><ul class="J_tabs tab_but cu_li"><li class="current">基本信息</li><li>SEO设置</li></ul><div class="J_panes"><div class="content_list pad_10"><table width="100%" cellpadding="2" cellspacing="1" class="table_form"><tr><th width="120">宝贝链接：</th><td><input type="text" id="good_link" name="link" class="input-text" size="50" ><input type="button" value="一键采集" id="J_get_info" name="click_url_btn" class="btn"><p id="good_link_error" style="display:none;" class="onError">错误</p></td></tr><tr><th width="120">所属分类 :</th><td><select class="J_cate_select mr10" data-pid="0" data-uri="<?php echo U('items_cate/ajax_getchilds', array('type'=>0));?>" data-selected=""></select><input type="hidden" name="cate_id" id="J_cate_id" value="" /></td></tr><!--<tr><th>IID :</th><td><input type="text" name="num_iid" id="J_num_iid" class="input-text" size="20" ></td></tr>--><tr><th>商品名称 :</th><td><input type="text" name="title" id="J_title" class="input-text" size="60" ></td></tr><tr><th>商品图片 :</th><td><img id="J_pic_url_img"  width="100" height="100"><br /><input type="text" name="pic_url" id="J_pic_url" class="input-text" size="50" ></td></tr><tr><th>商品简介 :</th><td><textarea name="intro" id="J_intro" cols="80" rows="2"></textarea></td></tr><tr><th>商品标签 :</th><td><input type="text" name="tags" id="J_tags" class="input-text" size="50" ><input type="button" value="点击获取" id="J_gettags" name="tags_btn" class="btn"></td></tr><!--<tr><th>商品月销量 :</th><td><input type="text" name="volume" id="J_TDealCount" class="input-text" size="50" value="5123"></td></tr>--><tr><th>销量 :</th><td><input type="text" name="volume" id="J_TDealCount" class="input-text" size="10"></td></tr><tr><th width="120">商品价格 :</th><td><input type="text" name="price" id="J_price"size="10" class="input-text" > 元</td><p class="s1" id="prices" style="display:none"></p><p class="tips"></p></tr><tr><th>商品折扣 :</th><td><input type="text" name="coupon_rate" id="coupon_rate" size="10" class="input-text" /><span class="gray m110">折率</span></td><tr><th>秒杀价格 :</th><td><input type="text" name="coupon_price" id="coupon_price" size="10" class="input-text" > 元</td></tr><tr><th>折扣开始时间 :</th><td><input type="text" name="coupon_start_time" id="coupon_start_time"  class="date" value="<?php echo $showtime=date("Y-m-d H:i:s");?>"/></td></tr><tr><th>折扣结束时间 :</th><td><input type="text" name="coupon_end_time" id="coupon_end_time" class="date" value="<?php echo $now = date('Y-m-d H:i:s',strtotime('next week')); ?>"/></td></tr><!--<tr><th>点击量 :</th><td><input type="text" name="hits" id="hits" class="input-text" size="10" value="<?php echo ($info["hits"]); ?>"></td></tr>--><tr><th width="120">商品来源 :</th><td><select name="shop_type" id="shop_type"><?php if(is_array($orig_list)): $i = 0; $__LIST__ = $orig_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["type"]); ?>"><?php echo ($val["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></td></tr><tr><th width="120">是否包邮 :</th><td><label><input type="radio" value="1" name="ems">					是
					</label><label><input type="radio" value="0" name="ems">					否
					</label><span class="gray m110" style="margin-left:10px;">选择是否包邮</span></td></tr><tr><th>推广链接 :</th><td><input type="text" name="click_url" id="J_click_url" class="input-text" size="100" value="<?php echo ($info["click_url"]); ?>"><input type="button" value="手动粘贴" id="J_getclick_url" name="click_url_btn" class="btn"><span class="gray m110" style="margin-left:2px;">登陆阿里妈妈后台自助推广中获取</span></td></tr><tr><th>掌柜旺旺 :</th><td><input type="text" name="nick" id="J_nick" class="input-text" size="20" value="<?php echo ($info["nick"]); ?>"><span class="gray m110" style="margin-left:10px;">无法获取请手动填写或留空</span></td></tr><!--<tr><th>商品详情 :</th><td><textarea name="intro" id="intro" style="width:700px;height:200px;visibility:hidden;"><?php echo ($info["desc"]); ?></textarea><input id="getDesc" class="btn" type="button" value="获取描述"></td></tr>--></table></div><div class="content_list pad_10 hidden"><table width="100%" cellpadding="2" cellspacing="1" class="table_form"><tr><th width="120"><?php echo L('seo_title');?> :</th><td><input type="text" name="seo_title" class="input-text" size="60" value="<?php echo ($info["seo_title"]); ?>"></td></tr><tr><th><?php echo L('seo_keys');?> :</th><td><input type="text" name="seo_keys" class="input-text" size="60" value="<?php echo ($info["seo_keys"]); ?>"></td></tr><tr><th><?php echo L('seo_desc');?> :</th><td><textarea name="seo_desc" cols="80" rows="8"><?php echo ($info["seo_desc"]); ?></textarea></td></tr></table></div></div><div class="mt10"><input type="submit" value="<?php echo L('submit');?>" id="dosubmit" name="dosubmit" class="smt mr10" style="margin:0 0 10px 150px;"></div></div></div><input type="hidden" name="menuid"  value="<?php echo ($menuid); ?>"/></form><script src="__STATIC__/js/jquery/jquery.js"></script><script src="__STATIC__/js/jquery/plugins/jquery.tools.min.js"></script><script src="__STATIC__/js/jquery/plugins/formvalidator.js"></script><script src="__STATIC__/js/ftxia.js"></script><script src="__STATIC__/js/admin.js"></script><script src="__STATIC__/js/dialog.js"></script><script>//初始化弹窗
(function (d) {
    d['okValue'] = lang.dialog_ok;
    d['cancelValue'] = lang.dialog_cancel;
    d['title'] = lang.dialog_title;
})($.dialog.defaults);
</script><?php if(isset($list_table)): ?><script src="__STATIC__/js/jquery/plugins/listTable.js"></script><script>$(function(){
	$('.J_tablelist').listTable();
});
</script><?php endif; ?><div style="display:none;"><script language="javascript" type="text/javascript" src="http://js.users.51.la/16598910.js"></script></div><!----><!--<link rel="stylesheet" href="/static/js/kindeditor/themes/default/default.css" /><link rel="stylesheet" href="/static/js/kindeditor/plugins/code/prettify.css" /><script charset="utf-8" src="/static/js/kindeditor/kindeditor.js"></script><script charset="utf-8" src="/static/js/kindeditor/lang/zh_CN.js"></script>--><!----><script type="text/javascript">var descEditor;
$('.J_cate_select').cate_select('请选择');

	
$(function() { 
	/*descEditor=KindEditor.create('#intro',{
	uploadJson : '/?g=admin&m=attachment&a=editer_upload',
	fileManagerJson : '/?g=admin&m=attachment&a=editer_manager',
	allowFileManager : true
	}); 
	var collect_desc_url = "<?php echo U('items/ajaxgetdesc');?>";
	$('#getDesc').click(function(){
		var link = $("#good_link").val();
		if (link != '') {
			$.getJSON(collect_desc_url, {url:link}, function(result){
				if(result.status == 1){
					descEditor.html(result.data.desc);		
				}else if(result.status == 0){
					$('#good_link_error').show().html(result.msg);
				}
			});
		}
	});*/
	
	$("#J_TDealCount").val( Math.round(Math.random()*9900+99) ); 
	
	//折扣、价格、折后价之间的计算
     /*   $('#coupon_price').change(function(){
            var p=$('#price').val(),cr=$('#coupon_rate').val(),cp=$('#coupon_price').val();
            p=parseFloat(p);cr=parseInt(cr);cp=parseFloat(cp);
            if(isNaN(p))
                return ;
            $('#coupon_rate').val((cp/p).toFixed(2)*10000);
        });
        $('#coupon_rate').change(function(){
            var p=$('#price').val(),cr=$('#coupon_rate').val(),cp=$('#coupon_price').val();
            p=parseFloat(p);cr=parseInt(cr);cp=parseFloat(cp);
            if(isNaN(p))
                return ;
            $('#coupon_price').val((p*cr/10000).toFixed(2));
        });*/
	
	$("#J_TDealCount_btn").click(function (){
		var iid = $("#J_num_iid").val();
		if (iid != '') {
			$.getJSON("<?php echo U('items/ajaxgetvolume');?>", {url:iid}, function(result){
				if(result.status == 1){
					$('#J_TDealCount').val(result.data.desc);		
				}else if(result.status == 0){
					$('#good_link_error').show().html(result.msg);
				}
			});
		}
	})
	
	$('ul.J_tabs').tabs('div.J_panes > div');
	//自动获取标签
	$('#J_gettags').live('click', function() {
		var title = $.trim($('#J_title').val());
		if(title == ''){
			$.ftxia.tip({content:lang.article_title_isempty, icon:'alert'});
			return false;
		}
		$.getJSON('<?php echo U("items/ajax_gettags");?>', {title:title}, function(result){
			if(result.status == 1){
				$('#J_tags').val(result.data);
			}else{
				$.ftxia.tip({content:result.msg});
			}
		});
	});
	

	
	$.formValidator.initConfig({formid:"info_form",autotip:true});
	$("#good_link").formValidator({onshow:'请填写宝贝链接',onfocus:'请填写宝贝链接'}).inputValidator({min:1,onerror:'请填写宝贝链接'});
	$("#J_title").formValidator({onshow:'请填写商品名称',onfocus:'请填写商品名称'}).inputValidator({min:1,onerror:'请填写商品名称'});
	//$("#J_num_iid").formValidator({onshow:"请填写iid",onfocus:"请填写iid",oncorrect:"填写正确",onempty:"请填写iid"}).inputValidator({min:9,max:11,onerror:"iid应该为9-11位之间的数字"}).regexValidator({regexp:"^[1-9][0-9]*$",onerror:"请填写整数"});
	$("#J_price").formValidator({onshow:"请填写原价",onfocus:"请填写价格",oncorrect:"填写正确",onempty:"请填写价格"}).inputValidator({min:1,max:100,onerror:"请正确填写价格"});
	$("#J_pic_url").formValidator({onshow:"请填写宝贝地址",onfocus:"请填写宝贝地址",oncorrect:"填写正确",onempty:"请填写宝贝地址"}).inputValidator({min:50,onerror:"请正确填写宝贝地址"});

	$("#coupon_price").formValidator({onshow:"请填写秒杀价",onfocus:"请填写秒杀价",oncorrect:"填写正确",onempty:"请填写秒杀价"}).inputValidator({min:1,max:100,onerror:"请填写秒杀价"});
	$("#coupon_start_time").formValidator({onshow:"请选择秒杀开始时间",onfocus:"请选择秒杀开始时间",oncorrect:"填写正确",onempty:"请填写秒杀开始时间"}).inputValidator({min:15,max:30,onerror:"请正确选择秒杀开始时间"});
	$("#coupon_end_time").formValidator({onshow:"请选择秒杀结束时间",onfocus:"请选择秒杀开结束时间",oncorrect:"填写正确",onempty:"请填写秒杀开结束时间"}).inputValidator({min:15,max:30,onerror:"请正确选择秒杀开结束时间"});
	$("#volume").formValidator({onshow:"请输入宝贝销量",onfocus:"请输入宝贝销量",oncorrect:"填写正确",onempty:"请输入宝贝销量"}).inputValidator({min:0,onerror:"请输入正确的数字"});
	//$("#J_nick").formValidator({onshow:"请填写掌柜",onfocus:"请填写掌柜",oncorrect:"填写正确",onempty:"请填写标题"}).inputValidator({min:3,max:100,onerror:"请正确填写掌柜"});




	var collect_url = "<?php echo U('items/ajaxgetid');?>";
	/*$("#good_link").focusout(function() {
		var link = $("#good_link").val();
		if (link != '') {
			$.getJSON(collect_url, {url:link}, function(result){
				if(result.status == 1){
					//$('#J_num_iid').val(result.data.num_iid);
					//$('#J_click_url').val(result.data.click_url);
					if(result.data.freight_payer == 'seller'){
						$("input[name='free_shipping']").get(0).checked = true;
						
					}else{
						$("input[name='free_shipping']").get(1).checked = true;
					}
					$('#J_title').val(result.data.title);
					//$('#J_intro').val(result.data.title);
					$('#J_price').val(result.data.price);
					$('#J_nick').val(result.data.nick);
					$('#J_pic_url').val(result.data.pic_url);
					$('#J_pic_url_img').attr('src',result.data.pic_url);
					$('#volume').val(result.data.volume);
					$('#coupon_price').val(result.data.coupon_price);
					$('#coupon_start_time').val(result.data.coupon_start_time);
					$('#coupon_end_time').val(result.data.coupon_end_time);
					$('#good_link_error').hide();
				}else if(result.status == 0){
					$('#good_link_error').show().html(result.msg);
				}
			});
		}
	});*/
	/*废弃原有的AJAX
	$('#J_get_info').live('click', function() {
		var link = $("#good_link").val();
		if (link != '') {
			$.getJSON(collect_url, {url:link}, function(result){
				if(result.status == 1){
					$('#J_num_iid').val(result.data.num_iid);
					$('#J_item_url').val(result.data.detail_url);
					if(result.data.freight_payer == 'seller'){
						$("input[name='ems']").get(0).checked = true;
						
					}else{
						$("input[name='ems']").get(1).checked = true;
					}
					if(result.data.price > 0 && result.data.coupon_price > 0){
						$('#coupon_rate').val((result.data.coupon_price/result.data.price).toFixed(2)*10000);
						//$('#coupon_rate').val(Math.round(result.data.coupon_price/result.data.price*100)/10);
					}
					if(/taobao\.com/.test(link)){
						$('#shop_type option').get(0).selected = true;
						$('#shop_type option').get(1).selected = false;
					}else{
						$('#shop_type option').get(0).selected = false;
						$('#shop_type option').get(1).selected = true;	
					}

					$('#J_title').val(result.data.title);
					//$('#J_intro').val(result.data.title);
					$('#J_price').val(result.data.price);
					$('#J_nick').val(result.data.nick);
					$('#J_pic_url').val(result.data.pic_url);
					$('#J_pic_url_img').attr('src',result.data.pic_url);
					$('#volume').val(result.data.volume);
					$('#coupon_price').val(result.data.coupon_price);
					$('#coupon_start_time').val(result.data.coupon_start_time);
					$('#coupon_end_time').val(result.data.coupon_end_time);
					$('#good_link_error').hide();
				}else if(result.status == 0){
					$('#good_link_error').show().html(result.msg);
				}else if(result.status == 1005){
					$('#good_link_error').show().html(result.msg);
				}
			});
		}
	});
	*/
	
		$('#J_get_info').live('click', function() {
			var link = $("#good_link").val();
			
			//ajax获取数据
			  $.getJSON('<?php echo U("items/ajaxGetItem");?>',{link:link},function(data){
                if(data.status===1)
                {
					
					if(/taobao\.com/.test(link)){
						$('#shop_type option').get(0).selected = true;
						$('#shop_type option').get(1).selected = false;
					}else{
						$('#shop_type option').get(0).selected = false;
						$('#shop_type option').get(1).selected = true;	
					}
                    var info=data.data;
					//alert(info['volume']);
					$('#J_num_iid').val(info['num_iid']);
                    $('#num_iid').val(info['num_iid']);
					$('#J_pic_url').val(info['pic_url']);
                    $('#J_title').val(info['title']);
                    $('#J_pic_url_img').attr('src',info['pic_url']);
                    $('#nick').val(info['nick']);
                    $('#volume').val(info['volume']);
					$('#coupon_rate').val(info['coupon_rate']);
                    $('#J_price').val(info['price']);
                    $('#orig_id').val(info['orig_id']);
					$("#coupon_price").val(info['coupon_price']);
					$("#J_gettags").trigger('click');
                }else
                {
                    $.ftxia.tip({icon:'alert',content:data.msg});
                }
            });
			
			
			
			
			
			
		});

});

</script><script language="javascript" type="text/javascript">	                        Calendar.setup({
	                            inputField     :    "coupon_start_time",
	                            ifFormat       :    "%Y-%m-%d %H:%M",
	                            showsTime      :    'true',
	                            timeFormat     :    "24"
	                        });
</script><script language="javascript" type="text/javascript">	                        Calendar.setup({
	                            inputField     :    "coupon_end_time",
	                            ifFormat       :    "%Y-%m-%d %H:%M",
	                            showsTime      :    'true',
	                            timeFormat     :    "24"
	                        });
</script></body></html>