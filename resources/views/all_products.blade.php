@extends('layouts.base')
@section('base_content')
    <div id="new-details">
        <div class="row">
            <div class="col-xs-12">
                <div class="container text-center">
                    <h2 class="title">{{trans('home.products')}}</h2>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                            <div class="new-details1">
                                <div class="container">
                                    <div class="product">
                                        <div class="text-left">
                                            @foreach($categories as $category)
                                                @if( Config::get('languages')[App::getLocale()] == 'Arabic' )

                                                <h1>{{$category->title_ar}}</h1>
                                                    @elseif( Config::get('languages')[App::getLocale()] == 'English' )
                                                    <h1>{{$category->title_en}}</h1>
                                                @endif
                                                    <div class="col-xs-12">
                                                        @if(Config::get('languages')[App::getLocale()] == 'Arabic')
                                                            <p>{!!  $category->desc_ar !!}</p>
                                                        @elseif(Config::get('languages')[App::getLocale()] == 'English')
                                                            <p>{!! $category->desc_en!!}</p>
                                                        @endif
                                                            <br />
                                                <br />
                                            </div>
                                             @foreach($category->technologies as $technology)
                                            <div class="col-xs-12">
                                                @if(Config::get('languages')[App::getLocale()] == 'Arabic')
                                                    <h4 style="display:inline-block; min-width:15%;">{{ $technology->title_ar }}</h4>
                                                @elseif(Config::get('languages')[App::getLocale()] == 'English')
                                                    <h4 style="display:inline-block; min-width:15%;">{{$technology->title_en }}</h4>
                                                @endif
                                                @foreach($technology->products as $product)
                                                <ul class="list-unstyled">
                                                    @if(Config::get('languages')[App::getLocale()] == 'Arabic')
                                                        <li><a href="/public/product/{{$product->id}}"><i class="fa fa-angle-double-right"></i> {{$product->title_ar}}</a></li>
                                                    @elseif(Config::get('languages')[App::getLocale()] == 'English')
                                                        <li><a href="/public/product/{{$product->id}}"><i class="fa fa-angle-double-right"></i> {{$product->title_en}}</a></li>
                                                    @endif
                                                </ul>
                                                @endforeach
                                            </div>
                                            @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection