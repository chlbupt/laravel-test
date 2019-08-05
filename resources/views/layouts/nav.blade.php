<nav class="shadow-sm bg-white">
    <div class="container">
        {{--<form action="" method="get">--}}
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a class="blog-nav-item " href="/home">首页</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right" style="height:50px;line-height:50px;">
                <li class="dropdown">
                    <div>
                        <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ \Auth::user()->name }}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:;" onclick="layer_show('Show User', '/user/me/setting', '', 350)">个人设置</a></li>
                            {{--<li><a href="/logout">登出</a></li>--}}
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        {{--</form>--}}
    </div>
</nav>