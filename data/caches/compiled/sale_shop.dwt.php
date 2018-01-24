<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta name="Generator" content="ECTouch 2.11.30" />
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="format-detection" content="telephone=no">
	<title><?php if ($this->_var['drp_info']['shop_name']): ?><?php echo $this->_var['drp_info']['shop_name']; ?><?php else: ?><?php echo $this->_var['page_title']; ?><?php endif; ?></title>
	<link rel="stylesheet" type="text/css" href="__TPL__/css/index.css"/>
	<link rel="stylesheet" type="text/css" href="__TPL__/css/search_index.css"/>
	<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/font-awesome.min.css">
	<link rel="stylesheet" href="__TPL__/statics/css/search.css" />
    <script type="text/javascript">var tpl = '__TPL__';</script>
    <style>
    .search {position: relative;padding:0;}
    .text-all{padding:1rem;}
    .input-texts input {font-size: 1.4rem;}
    .search-con p {font-size: 1.4rem;}
    .close-search {font-size: 1.5rem;}
    .btn-submit {font-size: 1.42rem;}
    .history-search {padding:0 1.3rem;}
    .search .btn-submit {height: 3.6rem;}
    .input-texts input {height: 3rem;line-height: 3rem;}
    .a-text-more span {font-size: 1.4rem;}
    .a-text-more span {line-height: 2.6rem;}
    .a-text-one span {line-height: 0rem;}
    </style>
    <script type="text/javascript" >var tpl = '__TPL__';</script>
</head>
<body>
<div class="con">
<div class="index-max-box">
<?php if (! $this->_var['subscribe']): ?>
<div class="ect-attention dis-box" >
	<div class="attention-text box-flex">
		<p style="font-size: 1rem;"><span style="color:#fff">欢迎进入</span><span style="color:#57C850"> 微商城</span></p>
		<p style="font-size: 1rem;"><span style="color:#fff">关注公众号,享专属服务</span></p>
	</div>
	<div class="attention-button" style="  padding-top:0.8rem;">
		<a class='lizhuanz'><button class="button">立即关注</button></a>
	</div>
</div>
<?php endif; ?>
</div>

<div class="index-main comWidth" >
<div class="share-div">
    <Img src="__TPL__/sale/images/share-index.png"></Img>
</div>

<div class="ect-index-header">
    <div class="ect-index-info ">
        <a href="<?php echo url('user/index');?>" class="ect-index-detail">
            <img src="<?php echo $this->_var['drp_info']['headimgurl']; ?>" />
        </a><div class="ect-index-name">
        <a> <h1><?php echo $this->_var['drp_info']['shop_name']; ?></h1></a>
    </div>
    </div>
    <img src="<?php if ($this->_var['drp_info']['shop_img']): ?><?php echo $this->_var['drp_info']['shop_img']; ?><?php else: ?>__TPL__/sale/images/index_bg.jpg<?php endif; ?>" class="fl"/>
</div>

<div class="index-guanz-t">
    <div class="index-guanz-show">
        <img src="__TPL__/images/guanzm.png">
        <p><span class="left">长按二维码关注公众号</span><span class="right index-show-close">关闭</span></p>
    </div>
    <div class="index-guanz-bg"></div>
</div>

<div class="ect-index-menu">
    <ul>
        <li></li>
        <li>
            <a href="javascript:void(0);">
                <h3><?php echo $this->_var['news_goods_num']; ?></h3>
                <h4>上新</h4>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);">
                <h3><?php echo $this->_var['promotion_goods_num']; ?></h3>
                <h4>促销</h4>
            </a>
        </li>
        <li class="ect-index-share">
            <a href="javascript:void(0);">
                <div class="ect-index-menu-share">
                    <div class="menu-share-pic"></div>
                </div>
                <h4>分享</h4>
            </a>
        </li>
    </ul>
</div>

    <div class="index-theme" style="display:none">
        <ul class="index-more-list"  style="background-color: #F3F4F5;">
        <?php echo $this->fetch('library/cat_goods.lbi'); ?>
        </ul>
    </div>

	<div class="index-more" style="background:#fff">
      <ul class="index-more-list" id="J_ItemList">
        <div class="single_item"></div>
        <a href="javascript:;" style="text-align:center" class="get_more"></a>
      </ul>
  </div>
</div>
	
<footer class="footer-nav dis-box">
                <a href="<?php echo url('index/index');?>" class="box-flex nav-list active">
                    <i class="nav-box i-home"></i><span>首页</span>
                </a>
                <a href="<?php echo url('category/top_all');?>" class="box-flex nav-list">
                    <i class="nav-box i-cate"></i><span>分类</span>
                </a>
                <a href="javascript:;" class="box-flex nav-list j-search-input ">
                    <i class="nav-box i-search"></i><span>搜索</span>
                </a>
                
                <a href="<?php echo url('flow/cart');?>" class="box-flex position-rel nav-list">
                    <i class="nav-box i-flow"></i><span>购物车</span>
                </a>
                <a href="<?php echo url('sale/index');?>" class="box-flex nav-list">
                    <i class="nav-box i-shop"></i><span>微店管理</span>
                </a>
        </footer>
</div>
<?php echo $this->fetch('library/new_search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript">
get_asynclist("<?php echo url('index/ajax_goods', array('type'=>'best'));?>" , '__TPL__/images/loader.gif');
</script>
<script type="text/javascript" src="__TPL__/statics/js/jquery.lazyload.min.js"></script>
<script>
	/*立即关注*/
	$(function($) {
	  $(".lizhuanz").click(function(){
		 $(".index-guanz-t").addClass("active");
	  });
	  $(".index-show-close").click(function()	{
		 $(".index-guanz-t").removeClass("active");
	  });
	});
	if($(".ect-attention").hasClass("ect-attention")){
	$(".index-main").css({"marginTop":"4rem"})
	}else{
		 $(".index-main").css({"marginTop":"0rem"})
		}

    $(function($) {
        $(".ect-index-share").click(function(){

            $(".share-div").addClass("active");
        });
    });
    $(".share-div").click(function(){
        $(".share-div").removeClass("active");
    })

</script>
</body>
</html>