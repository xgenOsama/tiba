@extends('layouts.base')
@section('base_content')

<div id="partener-details">
    <div class="row">
        <div class="col-xs-12">
            <div class="row text-center">
                <h2 class="title">{{trans('home.partners_details')}}</h2> </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="partener-details">
                        <div class="container">
                          <div class="row">
                          <div class="col-md-4 col-xs-12">
                                <img src="{{ asset('/'.$partener->image) }}" class="img-responsive" />
                           </div>
                            <div class="col-md-8 col-xs-12 text-left">
                              @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                <h1>{{$partener->name_ar}}</h1>
                                <p>{!! $partener->desc_ar !!}</p>
                              @elseif(Config::get('languages')[App::getLocale()] == 'English')
                                <h1>{{$partener->name_en}}</h1>
                                <p><?= html_entity_decode($partener->desc_en);?></p>
                              @endif
                              <?php
                               $links=json_decode($partener->links,true);
                              ?>
                              @foreach($links as $link)
                                  @if($link != '')
                              <p><a href="{{$link }}"><i class="fa fa-angle-double-right">{{$link}}</i></a></p>
                                  @endif
                              @endforeach
                            </div>
                            </div>
                            <div class="row pic">
                              @if(sizeof($products) > 0)
                                @foreach($products as $product)
                                <div class="col-md-4 col-xs-12">
                                     <img src="{{asset('/'.$product->image)}}" class="img-responsive" />
                                     @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                     <h2>{{$product->title_ar}}</h2>
                                     @elseif(Config::get('languages')[App::getLocale()] == 'English')
                                     <h2>{{$product->title_en}}</h2>
                                     @endif
                                  </div>
                                @endforeach
                              @endif
                            </div>
                            <br /><br /><br />
                            <div class="row text-left">
                              @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                              <p>{!! $partener->add_desc_ar !!}</p>
                              @elseif(Config::get('languages')[App::getLocale()] == 'English')
                              <p>{!! $partener->add_desc_en !!}</p>
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
