<!-- $Id: wxch_qr_limitscene.html 2013-12-23 10:30:26Z djks $ -->
<?php echo $this->fetch('wxch_pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../data/static/js/utils.js,./js/selectzone.js,./js/colorselector.js')); ?>
<script type="text/javascript" src="../data/static/js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../data/static/js/calendar/calendar.css" rel="stylesheet" type="text/css" />

<!-- start goods form -->
<div class="tab-div">
    <!-- tab bar -->
    <div class="tab-div">
        <div id="tabbar-div">
            <p>
                <span class="tab-front" id="one-table">推荐信息</span>
            </p>
        </div>
        <div id="tabbody-div">
            <form enctype="multipart/form-data" action="" method="post" name="theForm" >
                <!-- 通用信息 -->
                <table width="90%" id="one-table" align="center">
                    <tr>
                        <td class="label">推荐人：</td>
                        <td>
                            <input type="text" name="scene" value="<?php echo $this->_var['data']['scene']; ?>" style="float:left;" size="30" />
                            <span class="require-field">*</span><span class="notice-span" >  推荐填写会员名称或者真实姓名</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">推荐人会员ID：</td>
                        <td>
                            <input type="text" name="affiliate" value="<?php echo $this->_var['data']['affiliate']; ?>" style="float:left;" size="30" />
                            <span class="require-field">*</span><span class="notice-span" >  会员编号</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">有效时间：</td>
                        <td>
                            <input type="text" name="endtime" value="<?php echo $this->_var['data']['endtime']; ?>" style="float:left;" size="30" />
                            <span class="require-field">*</span><span class="notice-span" >（时间单位：小时，留空则是不做时间限制）在此时间内通过微信进入微商城都是该推荐人介绍</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">功能：</td>
                        <td>
                            <input type="text" name="function" value="<?php echo $this->_var['data']['function']; ?>" style="float:left;" size="30" />
                            <span class="require-field">*</span><span class="notice-span" >  可以调用“功能变量”、“关键词自动回复”中的关键词</span>
                        </td>
                    </tr>


                </table>
        </div>
    </div>


    <div class="button-div">
        <input type="hidden" name="id" value="<?php echo $this->_var['data']['qid']; ?>" />
        <input type="hidden" name="action_name" value="QR_LIMIT_SCENE" />
        <input type="submit" value="保存" class="button" />
        <input type="reset" value="重置" class="button" />
    </div>


</div>
</form>
<!-- end keywords form -->
<?php echo $this->fetch('wxch_pagefooter.htm'); ?>
