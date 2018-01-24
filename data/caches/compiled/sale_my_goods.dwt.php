<?php echo $this->fetch('library/sale_header.lbi'); ?>
<div id="box" class="n-sale-shop-box">
	<section class="padding-all">
		<form action="<?php echo url('sale/my_goods');?>" method="post" id="my_goods">
			<div class="n-sale-tit m-b1 m-t05">
				<span class="f-07 col-4">选择<?php echo $this->_var['custom']; ?>商品</span>
			</div>
			<div class="ect-radio m-b1 m-t05">
				<input type="checkbox" id="checkAll" onClick="check_all()" />
				<label for="checkAll"><span class="f-06 col-7 m-l-05">全选</span><i></i></label>
			</div>
			<div class="sp_box">
				<?php $_from = $this->_var['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'li');if (count($_from)):
    foreach ($_from AS $this->_var['li']):
?>
				<div class="sp_box_div">
					<div class="b-r <?php if ($this->_var['li']['is_select'] == 1): ?>sp_box2<?php else: ?>sp_box1<?php endif; ?> clear check" id="cate_<?php echo $this->_var['li']['cat_id']; ?>" onClick="select_cate('<?php echo $this->_var['li']['cat_id']; ?>')">
						<input type="checkbox" name="cate[]" value="<?php echo $this->_var['li']['cat_id']; ?>" id="input_<?php echo $this->_var['li']['cat_id']; ?>" class="elecheck display-none" <?php if ($this->_var['li']['is_select'] == 1): ?>checked="checked" <?php endif; ?> />
						<h4 class="sp_title text-c  f-08"><?php echo $this->_var['li']['cat_name']; ?></h4>
						<span>一级分店佣金：<?php echo $this->_var['li']['profit1']; ?>%</span>
						<span>二级分店佣金：<?php echo $this->_var['li']['profit2']; ?>%</span>
						<span>三级分店佣金：<?php echo $this->_var['li']['profit3']; ?>%</span>
					</div>
				</div>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
			<div class="t-a-center n-fixed-box padding-alla">
				<button type="submit" class="n-set-4-submit"><?php echo L('next_step');?></button>
			</div>
		</form>
	</section>
</div>
</body>

</html>