<!doctype html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
    <title>Hello World</title>
    <link href="css/jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css">  
</head>
<body>
    
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js" type="text/javascript"></script>
    <script src="http://g.alicdn.com/ilw/ding/0.7.5/scripts/dingtalk.js"></script>
</body>
    @yield('script')
    
    <script type="text/javascript">
        alert('abcd');
        dd.ready(function() {
            dd.runtime.permission.requestAuthCode({
                corpId: "ding8414637331385d36",
                onSuccess: function(info) {
                    alert(info.code);
                    $.ajax({
                        url: 'https://oapi.dingtalk.com/user/getuserinfo?code=' + info.code,
                        type: 'GET',
                        success: function(data, status, xhr) {
                            var info = JSON.parse(JSON.parse(data));
                            alert(info.userid);
                        },
                        error: function(xhr, errorType, error) {
                            alert(errorType + ', ' + error);
                        }
                    });
                },
                onFail: function(err) {
                    alert('err');
                }
            });
        });
    </script>
</html>