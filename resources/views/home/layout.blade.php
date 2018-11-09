<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
     <!-- Bootstrap 3.3.7 -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Ionicons -->
    <link href="https://cdn.bootcss.com/ionicons/4.0.0-9/css/ionicons.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ url('css/home/layout.css') }}"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @section('other_css')
            
    @show

</head>
<body>
<!--导航条-->
<header id="header">
    <div class="topbar clearfix">
        <div class="col-sm-2">
            <a href="{{url('/')}}"><img class="som-logo" src="{{ url('img/images/som-index-logo.jpg') }}" alt="首页图片"></a>
        </div>
        <div class="col-xs-6 som-nav">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('/') }}">首页</a></li>
                    <li><a href="#">导师</a></li>
                    <li><a href="#">活动</a></li>
                    <li><a href="#">赛事</a></li>
                    <li><a href="#">展览</a></li>
                    <li><a href="#">会员</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-4 clearfix som">
            <div class="dropdown pull-right personal-center">
                <img class="users-logo" src="{{ url(user('pic')) }}" alt="头像">
                <button type="button" class="btn dropdown-toggle" id="dropdownMenu1"
                        data-toggle="dropdown">
                    {{ user('name') }}
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="{{ url('user') }}">个人中心</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1"  href="{{ url('admin') }}">管理员后台</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="{{ url('rater/room') }}">评委评审室</a>
                    </li>

                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="#">修改密码</a>
                    </li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="{{ url('logout') }}">退出</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown pull-right language-switch">
                <img class="chinese-logo" src="{{ url('img/images/chinese.jpg') }}" alt="中国图标">
                <button type="button" class="btn dropdown-toggle" id="dropdownMenu1"
                        data-toggle="dropdown">
                    中文
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="#">中文版</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="#">国际版</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>


    @section('body')
            
    @show
    
<!--尾部-->
<footer id="footer">
    <div class="about">
        <ul class="aboutus text-center">
            <li class="footer-logo">
                <a href="#"><img src="{{ url('img/images/som-footerlogo.jpg') }}" alt=""></a>
            </li>
            <li class="contactus">
                <ul>
                    <li>
                        <h4>关于我们</h4>
                        <p>案例精选</p>
                        <p>团队介绍</p>
                    </li>
                    <li>
                        <h4>联系我们</h4>
                        <p>上海</p>
                        <p>北京</p>
                        <p>广州</p>
                        <p>杭州</p>
                    </li>
                    <li>
                        <h4>美学动态</h4>
                        <p>美学世界</p>
                        <p>新品鉴赏</p>
                        <p>大师灵感</p>
                    </li>
                    <li>
                        <h4>用户协议</h4>
                        <p>服务说明</p>
                        <p>用户行为</p>
                        <p>禁止事项</p>
                    </li>
                    <li>
                        <h4>企业服务</h4>
                        <p>文化推广</p>
                        <p>媒体友人</p>
                        <p>项目合作</p>
                    </li>
                </ul>
            </li>
            <li class="blogroll">
                <span><i class="fa fa-facebook"></i></span>
                <span><i class="fa fa-twitter"></i></span>
                <span><i class="fa fa-qq"></i></span>
                <span><i class="fa fa-weibo"></i></span>
            </li>
        </ul>
    </div>
    <div class="som-message">
        <div class="licence">
            <span>网络文化经营许可证 京网文[2016]6173-844号</span>
            <span>网络文化经营许可证 京网文[2016]6173-844号</span>
            <span>网络文化经营许可证 京网文[2016]6173-844号</span>
        </div>
        <div class="som-name">
            <span>公司名称:SOM特想有限文化公司</span>
            <span>电话:020-123456</span>
        </div>
        <div class="address">
            <span>公司地址:广州天河区科韵中路</span>
        </div>
    </div>
</footer>
<!-- jQuery 3 -->
<script src="{{ url('lib/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap 3.3.7 -->
<script src="{{ url('lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/home/layout.js') }}"></script>
<!-- 图片上传 -->
<script src="{{ URL::asset('js/spark-md5.min.js') }}"></script><!--需要引入spark-md5.min.js-->
<script src="{{ URL::asset('js/aetherupload.js') }}"></script><!--需要引入aetherupload.js-->
<script>
    var a ='{{ session("msg") }}';
    if(a) alert(a);
</script>
    @section('other_js')
            
    @show
</body>
</html>
