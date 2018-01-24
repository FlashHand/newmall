<?php echo $this->fetch('library/sale_header.lbi'); ?>

<div id="box">
	<div class="n-sale-bg">
		<header class="p-bt  n-m-b">
			<ul class="dis-box">
				<li class="n-sale-left-box">
					<div class="n-sale-headerimg-box"> 
						<a href="<?php echo url('sale/shop_config');?>">
						<?php if ($this->_var['info']['avatar']): ?>
						<img class="index_image2" src="<?php echo $this->_var['info']['avatar']; ?>" />
						<?php else: ?>
						<img class="index_image2" src="__TPL__/images/member-photo-img2.jpeg" />
						<?php endif; ?>
						</a>
					</div>
				</li>
				<li class="box-flex">
					<div class="n-sale-right-box">
						<h4><?php echo $this->_var['info']['name']; ?></h4>
						<p><?php echo $this->_var['sale']['shop_name']; ?></p>
						<?php if ($this->_var['info']['parent_name']): ?>
						<p>推荐人：<?php echo $this->_var['info']['parent_name']; ?></p>
						<?php endif; ?>
						<time class="color-whie f-03">开店时间：<?php echo $this->_var['sale']['time']; ?></time>
				</li>
				<li class="sale-right-width">
					<a href="<?php echo url('sale/shop_config');?>">
						<div class="n-sale-icon-size"><span><i class="iconfont icon-shezhi is-n-sezhi-size"></i></span></div>
					</a>
				</li>
			</ul>
		</header>
		<div class="padding-all n-sale-nav">
			<ul class="dis-box">
				<li class="box-flex">
					<p>总销售额（元）</p>
					<h4><?php echo $this->_var['sale_money_order']; ?></h4>
				</li>
				<li class="box-flex">
					<p>佣金总额（元）</p>
					<h4><?php echo $this->_var['sale_money']; ?></h4>
				</li>
				<li class="box-flex">
					<p>今日收入（元）</p>
					<h4><?php echo $this->_var['sale_money_today']; ?></h4>
				</li>
			</ul>
		</div>
		</div>

		<section class="n-sale-list-box">
			
			<a href="<?php echo url('store/index', array('drp_id'=> $this->_var['sale']['id']));?>">
				<ul class="int-nav-box-1 my-new-m padding-all shop-b">
					<li>
						<label class="cate-shop-box"><i class="iconfont icon-dianpu"></i><span>我的微店</span></label>
						<span class="t-jiantou f-r"><i class="iconfont icon-jiantou1 tf-180 jian-top"></i></span>
					</li>
				</ul>
			</a>
			
			<a href="<?php echo url('sale/my_goods');?>">
				<ul class="int-nav-box-1 my-new-m padding-all shop-b">
					<li>
						<label class="cate-shop-box"><i class="iconfont icon-quanbushangpin"></i><span>我的商品</span></label>
						<span class="t-jiantou f-r"><i class="iconfont icon-jiantou1 tf-180 jian-top"></i></span>
					</li>
				</ul>
			</a>
			
			<ul class="int-nav-box-a my-new-m padding-all shop-b">
				<li>
					<label class="cate-shop-box"><i class="iconfont icon-fenxiao a_left n-is--icont-1"></i><span>我的<?php echo $this->_var['custom']; ?></span></label>
					<span class="t-jiantou fr n-sect-i"><i class="iconfont icon-jiantou1 tf-180 jian-top int-jt-box"></i></span>
				</li>
			</ul>
			<a href="<?php echo url('sale/order_list');?>">
				<div class="int-cont-a padding-all shop-b" style="display: none;">
					<lable class="two-shop-tit">本店订单</lable>				
				</div>
			</a>
			<a href="<?php echo url('sale/my_shop_info');?>">
				<div class="int-cont-a padding-all shop-b" style="display: none;">
					<lable class="two-shop-tit">我的分店</lable>				
				</div>
			</a>
			
			<ul class="int-nav-box-b my-new-m padding-all shop-b">
				<li>
					<label class="cate-shop-box"><i class="iconfont icon-gonggaofuzhi a_left n-is--icont-1"></i><span>我的会员</span></label>
					<span class="t-jiantou fr n-sect-i"><i class="iconfont icon-jiantou1 tf-180 jian-top int-jt-box"></i></span>
				</li>
			</ul>
			<a href="<?php echo url('sale/user_list',array('key'=>'wfk'));?>">
				<div class="int-cont-b padding-all shop-b" style="display: none;">
					<lable class="two-shop-tit">下单未付款会员</lable>				
				</div>
			</a>
			<a href="<?php echo url('sale/user_list',array('key'=>'yfk'));?>">
				<div class="int-cont-b padding-all shop-b" style="display: none;">
					<lable class="two-shop-tit">下单已付款会员</lable>				
				</div>
			</a>
			<a href="<?php echo url('sale/user_list',array('key'=>'gz'));?>">
				<div class="int-cont-b padding-all shop-b" style="display: none;">
					<lable class="two-shop-tit">关注公众号会员</lable>				
				</div>
			</a>
			<a href="<?php echo url('sale/user_list',array('key'=>'fk'));?>">
				<div class="int-cont-b padding-all shop-b" style="display: none;">
					<lable class="two-shop-tit">访客</lable>				
				</div>
			</a>

			
			<ul class="int-nav-box-c my-new-m padding-all shop-b">
				<li>
					<label class="cate-shop-box"><i class="iconfont icon-jinbichongzhi a_left n-is--icont-2"></i><span>我的佣金</span></label>
					<span class="t-jiantou fr n-sect-i"><i class="iconfont icon-jiantou1 tf-180 jian-top int-jt-box"></i></span>
				</li>
			</ul>
			<a href="<?php echo url('sale/my_commission');?>">
				<div class="int-cont-c padding-all shop-b" style="display: none;">
					<lable class="two-shop-tit">我的佣金</lable>
					
				</div>
			</a>
			<a href="<?php echo url('sale/account_detail');?>">
				<div class="int-cont-c padding-all shop-b" style="display: none;">
					<lable class="two-shop-tit">佣金明细</lable>					
				</div>
			</a>
			<a href="<?php echo url('sale/account_raply');?>">
				<div class="int-cont-c padding-all shop-b" style="display: none;">
					<lable class="two-shop-tit">佣金提现</lable>				
				</div>
			</a>

			
			<ul class="int-nav-box-d my-new-m padding-all shop-b">
				<li>
					<label class="cate-shop-box"><i class="iconfont icon-mingpian a_left n-is--icont-3"></i><span>我的名片</span></label>
					<span class="t-jiantou fr n-sect-i"><i class="iconfont icon-jiantou1 tf-180 jian-top int-jt-box"></i></span>
				</li>
			</ul>
			<a href="<?php echo url('sale/spread');?>">
				<div class="int-cont-d padding-all shop-b" style="display: none;">
					<lable class="two-shop-tit">推广二维码</lable>				
				</div>
			</a>
			<a href="<?php echo url('sale/store');?>">
				<div class="int-cont-d padding-all shop-b" style="display: none;">
					<lable class="two-shop-tit">店铺二维码</lable>				
				</div>
			</a>
			
			<a href="<?php echo url('sale/ranking_list');?>">
				<ul class="int-nav-box-1 my-new-m padding-all shop-b">
					<li>
						<label class="cate-shop-box"><i class="iconfont icon-iconfontpaihangbang"></i><span><?php echo $this->_var['custom']; ?>排行榜</span></label>
						<span class="t-jiantou f-r"><i class="iconfont icon-jiantou1 tf-180 jian-top"></i></span>
					</li>
				</ul>
			</a>
		</section>		
	</div>
	</body>
	<script>
		/*个人店铺手风琴*/
		$(function($) {
			$(".int-nav-box-a").click(function() {
				$(this).find(".int-jt-box").toggleClass("current");
				$(this).parent().find(".int-cont-a").slideToggle();
			});
			$(".int-nav-box-b").click(function() {
				$(this).find(".int-jt-box").toggleClass("current");
				$(this).parent().find(".int-cont-b").slideToggle();
			});
			$(".int-nav-box-c").click(function() {
				$(this).find(".int-jt-box").toggleClass("current");
				$(this).parent().find(".int-cont-c").slideToggle();
			});
			$(".int-nav-box-d").click(function() {
				$(this).find(".int-jt-box").toggleClass("current");
				$(this).parent().find(".int-cont-d").slideToggle();
			});
		})
	</script>

	</html>