<?php echo $this->fetch('library/new_page_header.lbi'); ?>
<div class="con">
	<div class="ect-bg">
		<header class="dis-box header-menu b-color color-whie"><a class="" href="javascript:history.go(-1)"><i class="iconfont icon-jiantou"></i></a>
			<h3 class="box-flex">新增收货地址</h3>
			<p><i class="iconfont icon-pailie j-nav-box"></i></p>
		</header>
	<div class="j-nav-content">
		<ul class="dis-box new-footer-box">
			<li class="box-flex">
				<a href="<?php echo url('index/index');?>" class="nav-cont"><i class="nav-box"><img src="__TPL__/statics/img/home.png"></i><span style="margin-top:0rem;">首页</span></a>
			</li>
			<li class="box-flex">
				<a href="<?php echo url('category/top_all');?>" class="nav-cont"><i class="nav-box"><img src="__TPL__/statics/img/cate.png"></i><span style="margin-top:0rem;">分类</span></a>
				<li class="box-flex"><a href="javascript:;" class="nav-cont j-search-input"><i class="nav-box"><img src="__TPL__/statics/img/search.png"></i><span style="margin-top:0rem;">搜索</span></a></li>
				<li class="box-flex"><a href="<?php echo url('flow/cart');?>" class="nav-cont"><i class="nav-box"><img src="__TPL__/statics/img/flow.png"></i><span style="margin-top:0rem;">购物车</span></a></li>
				<li class="box-flex"><a href="<?php echo url('user/index');?>" class="nav-cont"><i class="nav-box"><img src="__TPL__/statics/img/user.png"></i><span style="margin-top:0rem;">用户中心</span></a></li>
		</ul>
	</div>
	</div>
	<section class="ect-text-style">
		
		<?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
		<form action="<?php echo url('flow/consignee');?>" method="post" name="theForm" id="theForm" onSubmit="return checkConsignee(this)">
			<?php echo $this->fetch('library/consignee.lbi'); ?>
		</form>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</section>
</div>
<script type="text/javascript" src="__PUBLIC__/script/region.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/shopping_flow.js"></script> 
<script type="text/javascript">
	region.isAdmin = false;
	<?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
	onload = function() {
	      if (!document.all)
	      {
	        document.forms['theForm'].reset();
	      }
	}
	
</script>