@extends('layouts.base')
@section('base_content')
<div id="crops">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row text-center">
                 @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                    <h2 class="title">حلول</h2>
                 @else
                    <h2 class="title">solutions</h2>
                @endif
                </div>
                <div class="col-lg-12">
                  <div class="news-details">
                    @foreach($solutions as $key => $solution)
                      @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                      <a href="{{ asset('/solution/'.$solution->id) }}" class="col-md-2">
                          <div class="thumbnail"> <img src="{{URL('/'.$solution->image)}}" alt="img">
                           <div class="caption">
                               <h3>{{$solution->title_ar}}</h3>
                           </div>
                         </div>
                       </a>
                      @elseif( Config::get('languages')[App::getLocale()] == 'English' )
                        <a href="{{ asset('/solution/'.$solution->id) }}" class="col-md-2">
                          <div class="thumbnail"> <img src="{{URL('/'.$solution->image)}}" alt="img">
                            <div class="caption">
                              <h3>{{$solution->title_en}}</h3>
                            </div>
                          </div>
                        </a>
                      @endif
                    @endforeach
                  </div>
              </div>
          </div>
      </div>
   </div>
</div>
@endsection
