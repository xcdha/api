<?php /*a:3:{s:66:"/www/wwwroot/api.xcdah.cn/application/admin/view/sort/sortAdd.html";i:1644046912;s:60:"/www/wwwroot/api.xcdah.cn/application/admin/view/header.html";i:1644046912;s:60:"/www/wwwroot/api.xcdah.cn/application/admin/view/footer.html";i:1644046912;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>分类添加 - 后台管理</title>
    <link rel="stylesheet" href="/public/static/mdui/css/mdui.min.css" />
    <link rel="stylesheet" href="/public/static/admin/main.css">
    <script src="/public/static/jquery.min.js"></script>
    <script src="/public/static/admin/chart.min.js"></script>
    <link rel="icon" type="image/png" href="/public/favicon.png">
    <script src="/public/static/admin/public.js"></script>
    <link rel="stylesheet" href="/public/static/editor/css/editormd.css">k
</head>

<body class="mdui-drawer-body-left mdui-loaded">
    <div class="loading">
        <div class="mdui-spinner mdui-spinner-colorful mdui-spinner-dots"></div>
    </div>
    <div class="mdui-appbar-with-toolbar">
        <div class="mc-appbar mdui-appbar mdui-appbar-fixed">
            <div class="mdui-toolbar">
                <button id="toggle" class="drawer mdui-btn mdui-btn-icon mdui-ripple">
                    <i class="mdui-icon material-icons">menu</i>
                </button>
                <a href="javascript:;" class="mdui-typo-headline min-display">Index</a>
                <a href="javascript:;" class="mdui-typo-title min-display">分类添加</a>
                <div class="mdui-toolbar-spacer"></div>
                <div class="mdui-textfield mdui-textfield-expandable mdui-float-right">
                    <button class="mdui-textfield-icon mdui-btn mdui-btn-icon">
                      <i class="mdui-icon material-icons">search</i>
                    </button>
                    <input class="mdui-textfield-input" type="text" id="search" placeholder="Search" />
                    <button class="mdui-textfield-close mdui-btn mdui-btn-icon">
                      <i class="mdui-icon material-icons">close</i>
                    </button>
                </div>
                <a href="javascript:;" class="mdui-btn mdui-btn-icon" id="upDate" mdui-tooltip="{content: '检测更新'}">
                    <i class="mdui-icon material-icons">loop</i>
                </a>
                <button class="mdui-btn mdui-btn-icon" mdui-menu="{target: '#menu'}" mdui-tooltip="{content: '个人信息'}">
                    <i class="mdui-icon material-icons">perm_identity</i>
                </button>
                <ul class="mdui-menu" id="menu">
                    <li class="mdui-menu-item" id="getUserinfo" mdui-dialog="{target: '#userinfo'}">
                        <a href="javascript:;" class="mdui-ripple">个人设置</a>
                    </li>
                    <li class="mdui-divider"></li>
                    <li class="mdui-menu-item">
                        <a href="javascript:;" onclick="logout()" class="mdui-ripple">退出登录</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mdui-dialog" id="userinfo">
        <div class="mdui-dialog-title">用户信息</div>
        <div class="mdui-dialog-content">
            <img class="mdui-img-circle mdui-center mdui-shadow-2" src="https://gravatar.loli.top/avatar/9dd60d36e3c5f1c7ee7c19b7d40af067" />
            <div class="mdui-textfield">
                <label class="mdui-textfield-label">User Name</label>
                <input class="mdui-textfield-input" id="username" type="text" required/>
                <div class="mdui-textfield-error">用户名不能为空</div>
            </div>

            <div class="mdui-textfield">
                <label class="mdui-textfield-label">Email</label>
                <input class="mdui-textfield-input" id="email" type="email" required/>
                <div class="mdui-textfield-error">邮箱格式错误</div>
            </div>

            <div class="mdui-textfield mdui-textfield-floating-label">
                <label class="mdui-textfield-label">Password</label>
                <input class="mdui-textfield-input" id="password" type="password" pattern="^.*(?=.{6,})(?=.*[a-z])(?=.*[A-Z]).*$" required/>
                <div class="mdui-textfield-error">密码至少 6 位，且包含大小写字母</div>
                <div class="mdui-textfield-helper">请输入至少 6 位，且包含大小写字母的密码</div>
            </div>
        </div>
        <div class="mdui-dialog-actions">
            <button class="mdui-btn mdui-ripple" mdui-dialog-close>关闭</button>
            <button class="mdui-btn mdui-ripple" id="putUserinfo">提交</button>
        </div>
    </div>

    <div class="mdui-drawer" id="drawer">
        <div class="mdui-list">
            <a class="mdui-list-item mdui-ripple" href="<?php echo url('index/index'); ?>">
                <i class="mdui-list-item-icon mdui-icon material-icons ">dashboard</i>
                <div class="mdui-list-item-content">仪表盘</div>
            </a>
            <a class="mdui-list-item mdui-ripple" href="<?php echo url('post/postAdd'); ?>">
                <i class="mdui-list-item-icon mdui-icon material-icons">code</i>
                <div class="mdui-list-item-content">文章发布</div>
            </a>
            <a class="mdui-list-item mdui-ripple" href="<?php echo url('post/postList'); ?>">
                <i class="mdui-list-item-icon mdui-icon material-icons">format_list_bulleted</i>
                <div class="mdui-list-item-content">文章列表</div>
            </a>
            <a class="mdui-list-item mdui-ripple" href="<?php echo url('api/apiAdd'); ?>">
                <i class="mdui-list-item-icon mdui-icon material-icons">playlist_add</i>
                <div class="mdui-list-item-content">接口添加</div>
            </a>
            <a class="mdui-list-item mdui-ripple" href="<?php echo url('api/apiList'); ?>">
                <i class="mdui-list-item-icon mdui-icon material-icons">format_list_bulleted</i>
                <div class="mdui-list-item-content">接口列表</div>
            </a>
            <a class="mdui-list-item mdui-ripple" href="<?php echo url('sort/sortAdd'); ?>">
                <i class="mdui-list-item-icon mdui-icon material-icons">playlist_add</i>
                <div class="mdui-list-item-content">分类添加</div>
            </a>
            <a class="mdui-list-item mdui-ripple" href="<?php echo url('sort/sortList'); ?>">
                <i class="mdui-list-item-icon mdui-icon material-icons">format_list_bulleted</i>
                <div class="mdui-list-item-content">分类列表</div>
            </a>
            <a class="mdui-list-item mdui-ripple" href="<?php echo url('index/black'); ?>">
                <i class="mdui-list-item-icon mdui-icon material-icons">filter_drama</i>
                <div class="mdui-list-item-content">请求限制</div>
            </a>
            <a class="mdui-list-item mdui-ripple" href="<?php echo url('index/setup'); ?>">
                <i class="mdui-list-item-icon mdui-icon material-icons">settings</i>
                <div class="mdui-list-item-content">站点信息</div>
            </a>
        </div>
        <div class="copyright">
            <p>©
                <script>
                    document.write(new Date().getFullYear())
                </script> API-Admin</p>
            <p>Powered by
                <a href="https://5ime.cn">iami233</a> &amp;
                <a href="https://github.com/5ime/api-admin">API-Admin</a>
            </p>
        </div>
    </div>
<div class="mdui-container">
    <div class="mdui-col-xs-12">
        <div class="mdui-card">
            <div class="mdui-row">
                <div class="mdui-col-md-1 mdui-col-sm-2">
                    <div class="mdui-textfield" style="overflow: inherit;">
                        <select class="mdui-select" id="sortType" mdui-select="{position: 'bottom'}">
                                <option value="0">接口</option>
                                <option value="1">文章</option>
                              </select>
                    </div>
                </div>
                <div class="mdui-col-md-3 mdui-col-sm-4">
                    <div class="mdui-textfield">
                        <input type="text" id="sortIcon" class="mdui-textfield-input" value="dvr" placeholder="ICON" />
                        <div class="mdui-textfield-helper mdui-typo">
                            <a href="https://www.mdui.org/docs/material_icon" target="_blank">选择图标</a>
                        </div>
                    </div>
                </div>
                <div class="mdui-col-md-8 mdui-col-sm-6">
                    <div class="mdui-textfield">
                        <input type="text" id="sortName" class="mdui-textfield-input" placeholder="填写分类名称" />
                        <div class="mdui-textfield-helper">保持在六个字内</div>
                    </div>
                </div>

                <button id="sortGet" class="mdui-btn mdui-btn-block mdui-btn-raised">提交</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.mdui-container').hide();
    $('.loading').show();
    setTimeout(() => {
        $('.loading').hide();
        $('.mdui-container').show();
    }, 500);
    $('#sortGet').click(function() {
        $(".loading").show();
        var sortName = $('#sortName').val();
        var sortIcon = $('#sortIcon').val();
        var sortType = $('.mdui-select-selected').text();
        var sortType = sortType == '接口' ? 0 : 1;
        var sortData = {
            name: sortName,
            icon: sortIcon,
            type: sortType,
        };
        $.post("/admin/sort/sortPostadd", sortData, function(data) {
            if (data.code == 200) {
                mdui.snackbar({
                    message: data.msg,
                });
                setTimeout(function() {
                    window.location.reload();
                }, 1000);
            } else {
                mdui.snackbar({
                    message: data.msg,
                });
                $(".loading").hide();
            }
            return false;
        });
    });
</script>
<script src="/public/static/mdui/js/mdui.min.js"></script>
<script src="/public/static/admin/main.js"></script>

</body>

</html>