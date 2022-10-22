      <?php
      /*
By Ivan Hanloth
Easy-Send
Github:https://github.com/IvanHanloth/Easy-Send
Gitee:https://gitee.com/IvanHanloth/Easy-Send
2022/10/16
*/
      tem_require_head()?>
  <body>
      <?php tem_require_header()?>
<h1>
    <img src="<?php echo $logo?>" width="120" height="120"/></h1>
<p id="name"class="web-font"> <?php echo $webname?> </p>
<P id="des">简约跨平台数据传输</P>
  <!-- 操作功能按钮 -->
  <div id="button">
    <div class="button layui-hide" id="send-box">
        <button id="file-tab" class="button tab-b button-l"><b>文&nbsp;件</b></button>
        <button id="text-tab" class="button tab-b button-r"><b>文&nbsp;本</b></button>
    </div>
    <button id="send-tab" class="button tab-b"><b>发&nbsp;送</b></button>
    <button id="get-tab" class="button tab-w"><b>接&nbsp;收</b></button>
  </div>
  
  <!-- 文件面板 -->
  <div id="file_panel" class="panel layui-anim layui-anim-upbit" data-anim="layui-anim-down">
    <p class="panel_title">文件传输<br></p>
    <div id="file-panel-choose">
        <div id="file-panel-choose-send">
            <h2>中 转</h2>
        </div>
        <div id="file-panel-choose-room">
            <h2>直 传</h2>
        </div>
    </div>
            <div class="layui-hide" id="file-panel-send">
            <?php tem_file_drag_box()?>
            </div>
            <div class="layui-hide" id="file-panel-room">
            <?php tem_room_default()?>
            </div>
    <b class="close"><span style="font-size: 20px;" class="iconfont icon-close_cricle"></span></b>
  </div>  
  <!-- 文件面板 -->
  <div id="text_panel" class="panel layui-anim layui-anim-upbit" data-anim="layui-anim-down">
    <p class="panel_title">文本传输<br></p>

        <?php tem_text_textarea()?>
    <b class="close"><span style="font-size: 20px;" class="iconfont icon-close_cricle"></span></b>
  </div>  
  <!-- 提取面板 -->
  <div id="get_panel" class="panel layui-anim layui-anim-upbit" data-anim="layui-anim-down">
    <p class="panel_title">数据提取<br></p>

        <?php tem_get_default()?>
    <b class="close"><span style="font-size: 20px;" class="iconfont icon-close_cricle"></span></b>
  </div>
  <!-- 全局蒙版遮罩 -->
  <div id="fixed"></div>
<footer>
    <?php tem_require_footer()?>
</footer>
<script src="/theme/blue/static/js/main.js"></script>
<?php
if($_REQUEST['key']!=""){
?>
<script>
planecss($("#get_panel"))
$("#get_panel").addClass("layui-show")
$("#fixed").addClass("layui-show")
</script>
<?php } ?>
  </body>
</html>