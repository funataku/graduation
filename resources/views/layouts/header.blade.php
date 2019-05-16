
        <div id="header">
            <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light align-middle">
                
                <!--アイコンとタイトル-->
                <a class="navbar-brand align-middle" href="{{ url('/') }}" >
                    <img src="{{ asset('assets/houseicon.png',true) }}" alt="logo" width="30" height="30" class="d-inline-block align-middle" alt="">
                    Share House Hoppers
                </a>
                <!--縮小するとハンバーガー-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        
                        <!--<li class="nav-item">-->
                        <!--    <a class="nav-link" href="{{ route('login') }}">ログイン</a>-->
                        <!--</li>-->
                    
                        <!--<li class="nav-item">-->
                        <!--    <a class="nav-link" href="{{ route('register') }}">新規登録</a>-->
                        <!--</li>-->
                        
                        <li class="nav-item">
                            <a class="nav-link" href="https://gsacademy.tokyo/">G's Academy</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        @endauth
                        
                    </ul>
                    @auth
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    @endauth
                </div>
            </nav>
            </div>
        </div>
