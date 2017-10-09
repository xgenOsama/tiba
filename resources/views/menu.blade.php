<!--start menu-->
    <div id="menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand smoothscroll" href="#header"><img src="{{asset('img/logo.png')}}" /></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                      @if($page_flag == 'outer')
                        <li><a href="#header" class="smoothscroll">{{trans('home.home')}}</a></li>
                        <li><a href="#about" class="smoothscroll">{{trans('home.about')}}</a></li>
                        {{--<li><a href="{{URL('/public/categories')}}">{{trans('home.products')}}</a></li>--}}
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{trans('home.products')}}<b class="caret"></b></a>
                            <ul class="dropdown-menu multi-level">
                                    <li><a href="/public/all_products">{{trans('home.all_products')}}</a></li>
                            @foreach($categories as $category)
                                    @if($category->technologies)
                                            <li class="dropdown-submenu">
                                                @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $category->title_ar }}</a>

                                                @elseif(Config::get('languages')[App::getLocale()] == 'English')
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $category->title_en }}</a>
                                                @endif
                                                <ul class="dropdown-menu">
                                                    @foreach($category->technologies as $technology)
                                                        @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                                            <li><a href="/public/tech/{{$technology->id}}">{{ $technology->title_ar }}</a></li>

                                                        @elseif(Config::get('languages')[App::getLocale()] == 'English')
                                                            <li><a href="/public/tech/{{$technology->id}}">{{ $technology->title_en }}</a></li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                    @else
                                             @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                                    <a href="/public/all_products" class="dropdown-toggle" data-toggle="dropdown">{{ $category->title_ar }}</a>

                                                @elseif(Config::get('languages')[App::getLocale()] == 'English')
                                                    <a href="/public/all_products" class="dropdown-toggle" data-toggle="dropdown">{{ $category->title_en }}</a>
                                                @endif
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#partener" class="smoothscroll">{{trans('home.partners')}}</a></li>
                        <li><a href="#service" class="smoothscroll">{{trans('home.service')}}</a></li>
                        <li><a href="#news" class="smoothscroll">{{trans('home.news')}}</a></li>
                        @elseif($page_flag == 'inner')
                          <li><a href="{{URL('/')}}">{{trans('home.back')}}</a></li>
                        @endif
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
