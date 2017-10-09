@extends('layouts.base')
@section('base_content')
    <?php
    $arr = json_decode($product->image,true);
    ?>
<!--start converter-->
<div id="product">
    <div class="row">
        <div class="col-xs-12">
            <div class="row text-center">
                <h2 class="title">{{trans('home.p_details')}}</h2>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="product">
                        <div class="container">
                            <div class="col-md-4 col-xs-12">
                                <?php
                                if (!isset($arr[0])) {
                                    $url = URL('uploads/notfound.png');
                                } else {
                                    $url = URL('uploads/' . $arr[0]);
                                }
                                ?>
                                <img src="{{$url}}" class="img-responsive" />
                            </div>
                            <div class="col-md-8 col-xs-12 text-left">
                                @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                    <h1>{{ $product->title_ar }}</h1>
                                @elseif( Config::get('languages')[App::getLocale()] == 'English' )
                                    <h1>{{ $product->title_en }}</h1>
                                @endif
                                    <?php $arr_files=json_decode($product->attached_files,true); ?>
                                    <div class="pull-right">
                                    	@if(isset($arr_files[0]))
                                        <a href="{{URL('uploads/'.$arr_files[0])}}" download>
                                            <button class="btn btn-default"><i class="fa fa-link"></i>TDS</button>
                                        </a>
                                        @endif
                                        @if(isset($arr_files[1]))
                                        <a href="{{URL('uploads/'.$arr_files[1])}}" download>
                                            <button class="btn btn-default"><i class="fa fa-link"></i>Brochurs</button>
                                        </a>
                                        @endif
                                        @if(isset($arr_files[2]))
                                          <a href="{{URL('uploads/'.$arr_files[2])}}" download>
                                            <button class="btn btn-default"><i class="fa fa-link"></i>MSDS</button>
                                        </a>
                                        @endif
                                    </div>
                            </div>

                            <div class="col-xs-12 text-left">
                                <h1>{{trans('home.p_details')}}</h1>
                                @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                    <p><?= html_entity_decode($product->desc_ar);?></p>
                                @elseif( Config::get('languages')[App::getLocale()] == 'English' )
                                    <p><?= html_entity_decode($product->desc_en);?></p>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
