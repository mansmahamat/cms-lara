@extends('layouts.app')

@section('content')
<div id="banner-home" class="banner ">
	<div class="container">
	<div class="banner-text">
	    <div class="h1 ">
            @if (Auth::user())
                Heureux de vous revoir {{ Auth::user()->name }} 
            @endif
            
	    </div>
	    <div class="banner-sub-heading h3">
            
	    </div>
	       
	</div>
	</div>

</div>
<div class="container">

    

    <!-- Call to Action Well -->
    <div class="card text-white bg-danger my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">Retrouvez toute l'actualité en continu, en photos et en vidéo sur l'actualité footballistique, avec Laravel Football.  </p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title text-center">
                <img src="{{ URL::to('/assets/img/money.png') }}" alt="" srcset="">
            </h2>
            <p class="card-text">
                Gardez votre argent Laravel Football est totalement gratuit !
            </p>
          </div>
          
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title text-center">
                <img src="{{ URL::to('/assets/img/phone.png') }}" alt="phone">
            </h2>
            <p class="card-text">
                Laravel Football est accessible sur smartphone, tablette & ordinateur.
            </p>
          </div>
          
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title text-center">
                <img src="{{ URL::to('/assets/img/live-news.png') }}" alt="" srcset="">
            </h2>
            <p class="card-text">
                L'actualité en live & en continu 24h/24h
            </p>
          </div>
          
        </div>
      </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  </div>
@endsection