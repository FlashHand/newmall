<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo $this->_var['lang']['cp_home']; ?></title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="ECTouch Team">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Bootstrap core CSS -->
<link href="__TPL__/css/bootstrap.min.css" rel="stylesheet">
<link href="__TPL__/css/bootstrap-reset.css" rel="stylesheet">
<link href="__PUBLIC__/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<!-- Custom styles for this template -->
<link href="__TPL__/css/style.css" rel="stylesheet">
<link href="__TPL__/css/style-responsive.css" rel="stylesheet" />
<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
<script src="__TPL__/js/html5shiv.js"></script>
<script src="__TPL__/js/respond.min.js"></script>
<![endif]-->
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>
<script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
<?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
//-->
</script>
</head>

<body>

<?php if ($this->_var['form_act'] == "forget_pwd"): ?>
<div class="login-bg">
  <header>
    <div class="login-header"> <?php echo $this->_var['lang']['get_newpassword']; ?> </div>
  </header>
  <section>
    <form method="post" action="get_password.php" name="submitAdmin" onsubmit="return validate()">
      <div class="login-con">
        <input name="user_name" type="text" placeholder="<?php echo $this->_var['lang']['user_name']; ?>">
        <input name="email" class="text-email" type="text" placeholder="<?php echo $this->_var['lang']['email']; ?>">
        <div class="login-con-code">
          <input name="captcha" type="text" placeholder="<?php echo $this->_var['lang']['label_captcha']; ?>">
          <img src="index.php?act=captcha&<?php echo $this->_var['random']; ?>" onclick="this.src='index.php?act=captcha&'+Math.random();" title="<?php echo $this->_var['lang']['click_for_another']; ?>" class="cursor" />
        </div>
        <div style="overflow:hidden;">
        	<span class="pull-left"><a href="__ROOT__"><?php echo $this->_var['lang']['back_home']; ?></a></span>
            <span class="pull-right"><a href="index.php"><?php echo $this->_var['lang']['back_login']; ?></a></span>
        </div>
        <button class="btn ect-btn-login ect-clear" onClick="this.submit"><?php echo $this->_var['lang']['click_button']; ?></button>
      </div>
      <input type="hidden" name="action" value="get_pwd" />
      <input type="hidden" name="act" value="forget_pwd" />
    </form>
  </section>
</div>
<?php endif; ?>
<?php if ($this->_var['form_act'] == "reset_pwd"): ?>
<div class="login-bg">
  <header>
    <div class="login-header"> <?php echo $this->_var['lang']['get_newpassword']; ?> </div>
  </header>
  <section>
    <form method="post" action="get_password.php" name="submitPwd" onsubmit="return validate2()">
      <div class="login-con">
        <input type="hidden" name="action" value="reset_pwd" />
        <input type="hidden" name="act" value="forget_pwd" />
        <input type="hidden" name="adminid" value="<?php echo $this->_var['adminid']; ?>" />
        <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
        <input name="password" type="password" placeholder="<?php echo $this->_var['lang']['enter_admin_pwd']; ?>">
        <input name="confirm_pwd" type="password" placeholder="<?php echo $this->_var['lang']['confirm_admin_pwd']; ?>">
        <div class="get_password">
          <button class="btn btn-danger cpull-left"><?php echo $this->_var['lang']['click_button']; ?></button>
          <button class="btn btn-default pull-right"><?php echo $this->_var['lang']['reset_button']; ?></button>
        </div>
      </div>
    </form>
  </section>
</div>
<?php endif; ?>
<footer>
  <div class="login-footer"><?php echo $this->_var['lang']['copyright']; ?></div>
</footer>
<div class="passport-bg"></div>

<script type="text/javascript">
<!--
/**
* 检查表单输入的数据
*/
function validate()
{
  validator = new Validator("submitAdmin");
  validator.required("user_name", user_name_empty);
  validator.required("email", email_empty, 1);
  validator.isEmail("email", email_error);

  return validator.passed();
}

function validate2()
{
  validator = new Validator("submitPwd");
  validator.required("password",            admin_pwd_empty);
  validator.required("confirm_pwd",         confirm_pwd_empty);
  if (document.forms['submitPwd'].elements['confirm_pwd'].value.length > 0)
  {
    validator.eqaul("password","confirm_pwd", both_pwd_error);
  }

  return validator.passed();
}
//-->
</script>

</body>
</html>