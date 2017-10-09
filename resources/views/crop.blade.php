@extends('layouts.base')
@section('base_content')
<div id="crops">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row text-center">
                @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                    <h2 class="title">محاصيل</h2>
                @else
                    <h2 class="title">crops</h2>
                @endif
                </div>
                <div class="col-xs-12">
                  <div class="news-details">
                    @foreach($crops as $key => $crop)
                    <?php
                     $arr=json_decode($crop->image,true);
                    ?>
                      @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                      <a href="{{ asset('/crop/'.$crop->id) }}" class="col-xs-2">
                        @if(isset($arr[0]))
                          <div class="thumbnail"> <img src="{{URL('uploads/'.$arr[0])}}" alt="img">
                        @else
                        <div class="thumbnail"> <img src="{{URL('uploads/notfound.png')}}" alt="img">
                        @endif  
                           <div class="caption">
                               <h3>{{$crop->title_ar}}</h3>
                           </div>
                         </div>
                       </a>
                      @elseif( Config::get('languages')[App::getLocale()] == 'English' )
                        <a href="{{ asset('/crop/'.$crop->id) }}" class="col-xs-2">
                        @if(isset($arr[0]))
                          <div class="thumbnail"> <img src="{{URL('uploads/'.$arr[0])}}" alt="img">
                        @else
                        <div class="thumbnail"> <img src="{{URL('uploads/notfound.png')}}" alt="img">
                        @endif  
                            <div class="caption">
                              <h3>{{$crop->title_en}}</h3>
                            </div>
                          </div>
                        </a>
                      @endif
                    @endforeach
                    {{$crops->links()}}
                  </div>
              </div>
          </div>
      </div>
   </div>
</div>
@endsection
