<nav class="navbar navbar-expand-lg navbar-cyan bg-cyan">
    <div class="nav m-auto row align-items-center justify-content-between">
        <div class="col col-auto">
            <ul class="navbar-nav">
                <li class="nav-item @if(Request::route()->named('index')) active @endif">
                    <a class="nav-link" href="{{ route('index') }}">首&nbsp;&nbsp;&nbsp;&nbsp;页</a>
                </li>
                <li class="nav-item
                    @if( Request::route()->named('jobs')
                    || Request::route()->named('jobs.show') )
                        active
                    @endif">
                    <a class="nav-link" href="{{ route('jobs') }}">职位招聘</a>
                </li>
                <li class="nav-item @if(Request::route()->named('service')) active @endif">
                    <a class="nav-link" href="{{ route('service') }}">服务内容</a>
                </li>
                <li hidden class="nav-item @if(Request::route()->named('workplace')) active @endif">
                    <a class="nav-link" href="{{ route('index') }}">职场攻略</a>
                </li>
                <li hidden class="nav-item @if(Request::route()->named('company')) active @endif">
                    <a class="nav-link" href="{{ route('index') }}">公司动态</a>
                </li>
                <li class="nav-item @if(Request::route()->named('aboutus')) active @endif">
                    <a class="nav-link" href="{{ route('aboutus') }}">企业简介</a>
                </li>
                <li class="nav-item @if(Request::route()->named('contact')) active @endif">
                    <a class="nav-link" href="{{ route('contact') }}">联系我们</a>
                </li>
            </ul>
        </div>
        <div class="col col-auto">
            <a class="btn btn-href" href="#">
                <i class="iconfont icon icon-round icon-miniapp"></i>
                <span>当会直聘小程序</span>
            </a>
            <a class="btn btn-radius btn-outline-red-white" href="#">企业登录</a>
            <a class="btn btn-radius btn-outline-red-white" href="#">个人登录</a>
        </div>
    </div>
</nav>
