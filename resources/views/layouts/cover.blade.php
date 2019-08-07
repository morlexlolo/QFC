
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <marquee onMouseOver="this.stop()" onMouseOut="this.start()">
            <ul>
                <li> JP/KES: <span>Buy:100</span>,<span>Sell:1.29.50</span></li>
                <li> US/KES: <span>Buy:100</span>,<span>Sell:103.2</span></li>
                <li> EU/KES: <span>Buy:100</span>,<span>Sell:106.5</span></li>
                <li> JP/KES: <span>Buy:1000</span>,<span>Sell:1.29.50</span></li>
                <li> JP/KES: <span>Buy:1000</span>,<span>Sell:1.29.50</span></li>
            </ul>
       </marquee>
      
     @forelse ($sliders as $key => $slider)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
        <img src="{{ Voyager::image( $slider->image)}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>{{ $slider->title }}</h5>
           <button type="button" class="btn  btn-outline-light"><a href="{{ route('services.show',$slider->slug) }}">Read More</a></button>
        </div>
      </div>
     @empty

     @endforelse
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
