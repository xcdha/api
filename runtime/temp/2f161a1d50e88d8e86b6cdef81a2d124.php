<?php /*a:1:{s:65:"/www/wwwroot/api.xcdah.cn/application/admin/view/login/index.html";i:1644046912;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录</title>
    <link rel="stylesheet" href="/public/static/login/css/icon.css">
    <link rel="stylesheet" href="/public/static/mdui/css/mdui.min.css">
    <link rel="stylesheet" href="/public/static/login/css/style.css">
    <script src="/public/static/jquery.min.js"></script>
</head>

<body>
    <div class="card">
        <h2>Login</h2>
        <div class="form-group">
            <p class="name">登录名</p>
            <input name="username" type="text" placeholder="请输入登录名" required>
            <i class="iconfont icon-user"></i>
        </div>
        <div class="form-group">
            <p class="name">用户密码</p>
            <input name="password" type="password" placeholder="请输入密码" required>
            <i class="iconfont icon-lock"></i>
        </div>
        <div class="form-group">
            <p class="name">验证码</p>
            <div class="checkcode">
                <img src="/verify" height="40" id='yzm' onclick="this.src=this.src+'?'+Math.random()" />
                <input name="checkcode" id="code" type="text" placeholder="请输入验证码" required>
            </div>
        </div>
        <button type="submit" id="post">登录</button>
    </div>
    <div class="copy">
        <p>Powered By <a href="https://github.com/5ime/api-admin" target="_blank">API-Admin</a></p>
    </div>
    <script src="/public/static/mdui/js/mdui.min.js"></script>
    <script>
        $(document).keyup(function(event) {
            if (event.keyCode == 13) {
                $("#post").click();
            }
        });

        $('#post').click(function() {
            var username = $('input[name=username]').val();
            var password = $('input[name=password]').val();
            var checkcode = $('input[name=checkcode]').val();
            var check = $('#check').val();
            $.ajax({
                url: "<?php echo url('login/index'); ?>",
                type: 'post',
                data: {
                    username: username,
                    password: password,
                    checkcode: checkcode,
                },
                success: function(res) {
                    if (res.code == 200) {
                        mdui.snackbar({
                            message: res.msg,
                            onOpen: function() {
                                setTimeout(function() {
                                    window.location.href = '/admin';
                                }, 1000);
                            }
                        });
                    } else {
                        mdui.snackbar({
                            message: res.msg,
                            onOpen: function() {
                                setTimeout(function() {
                                    $('#yzm').click();
                                }, 1000);
                            }
                        });
                    }
                }
            })
        })
    </script>
</body>

</html>