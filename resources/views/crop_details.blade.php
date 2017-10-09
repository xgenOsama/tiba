@extends('layouts.base')
@section('base_content')
<div id="crop-details">
    <div class="row">
        <div class="col-xs-12">
            <div class="row text-center">
                <h2 class="title">{{trans('home.crop_details')}}</h2> </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="crop-details">
                        <div class="container">
                          <?php
                           $arr_images = json_decode($crop->image,true);
                           $arr_files = json_decode($crop->attached_files,true);
                          ?>
                            <div class="row">
  
                           @if(!isset($arr_images[0]))
 			     <div class="col-md-4 col-xs-12"> <img src="{{ asset('uploads/notfound.png') }}" class="img-responsive" /> </div>
 			   @else	
                            <div class="col-md-4 col-xs-12"> <img src="{{ asset('uploads/'.$arr_images[0]) }}" class="img-responsive" /> </div>
                           @endif
                            <div class="col-md-8 col-xs-12 text-left">
                              @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                <h1>{{$crop->title_ar}}</h1>
                                <p><?= html_entity_decode($crop->desc_ar);?></p>
                              @elseif( Config::get('languages')[App::getLocale()] == 'English' )
                                <h1>{{$crop->title_en}}</h1>
                                <p><?= html_entity_decode($crop->desc_en);?></p>
                              @endif
                            </div>
                            </div>
                            <div class="row pic">
                              @for($i=1 ; $i < sizeof($arr_images) ; $i++)
                                <div class="col-md-4 col-xs-12"> <img src="{{ asset('uploads/'.$arr_images[$i]) }}" class="img-responsive" /> </div>
                              @endfor
                            </div>
                            <div class="row col-xs-12 files">
                              @if(sizeof($arr_files) > 0)
                                <h4>
                                  attached files
                                </h4>
                                @if(array_key_exists(0,$arr_files))
                                <a href="{{ asset('uploads/'.$arr_files[0]) }}">
                                  <button class="btn btn-default"><i class="fa fa-file-pdf-o"></i>{{trans('home.crop_1')}}</button>
                                </a>
                                @endif
                                @if(array_key_exists(1,$arr_files))
                                <a href="{{ asset('uploads/'.$arr_files[1]) }}">
                                  <button class="btn btn-default"><i class="fa fa-file-word-o"></i>{{trans('home.crop_2')}}</button>
                                </a>
                                @endif
                                @if(array_key_exists(2,$arr_files))
                                <a href="{{ asset('uploads/'.$arr_files[2]) }}">
                                  <button class="btn btn-default"><i class="fa fa-file-powerpoint-o"></i>{{trans('home.crop_3')}}</button>
                                </a>
                                @endif
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
