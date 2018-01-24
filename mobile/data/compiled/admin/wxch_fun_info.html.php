<!-- $Id: wxch_fun_info.htm 17126 2013-11-16 10:30:26Z djks $ -->
<?php echo $this->fetch('wxch_pageheader.htm'); ?>
<script type="text/javascript" src="../data/static/js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../data/static/js/calendar/calendar.css" rel="stylesheet" type="text/css" />

<!-- start keywords form -->
<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab"><?php echo $this->_var['lang']['tab_general']; ?></span>
      </p>
    </div>

    <!-- tab body -->
    <div id="tabbody-div">
      <form enctype="multipart/form-data" action="" method="post" name="theForm" >
        <!-- 通用信息 -->
        <table width="90%" id="general-table" align="center">
            <tr>
                <td class="label">功能名称：</td>
                <td>
                    <?php echo $this->_var['data']['name']; ?>
                </td>
            </tr>
            <tr>
                <td class="label">变形词：</td>
                <td>
                    <input type="text" name="command" value="<?php echo $this->_var['data']['command']; ?>" style="float:left;" size="30" />
                    <span class="notice-span" style="display:block" >多个变形词使用空格 隔开；、多个示例:xk 新款</span>
                </td>
            </tr>
            <tr>
                <td class="label">关键词：</td>
                <td>
                    <span><?php echo $this->_var['data']['function']; ?></span>
                </td>
            </tr>
            
        </table>


        <div class="button-div">
          <input type="hidden" name="id" value="<?php echo $this->_var['data']['id']; ?>" />
          <input type="submit" value="保存" class="button" />
          <input type="reset" value="重置" class="button" />
        </div>
      </form>
    </div>
</div>
<!-- end keywords form -->

<?php echo $this->fetch('wxch_pagefooter.htm'); ?>
