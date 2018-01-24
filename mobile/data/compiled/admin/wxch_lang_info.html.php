<!-- $Id: wxch_lang_info.htm 17126 2013-11-28 20:30:26Z djks $ -->
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
                <td class="label"><?php echo $this->_var['data']['lang_name']; ?>：</td>
                <td>
                    <label><textarea name="lang_value" rows="5" cols="40"><?php echo $this->_var['data']['lang_value']; ?></textarea></label>
                </td>
            </tr>
            
        </table>


        <div class="button-div">
          <input type="hidden" name="lang_id" value="<?php echo $this->_var['data']['lang_id']; ?>" />
          <input type="submit" value="保存" class="button" />
          <input type="reset" value="重置" class="button" />
        </div>
      </form>
    </div>
</div>
<!-- end keywords form -->

<?php echo $this->fetch('wxch_pagefooter.htm'); ?>
