@extends('layouts.app')
@section('content')
@include('layouts.header')
<section class="">
    <div class="container">
        <div class="row">
            <marquee onMouseOver="this.stop()" onMouseOut="this.start()">
                <ul>
                    @forelse ($markets as $item)
                      <li> {{ $item->name1 }}/ {{ $item->name2 }}: <span>Buy: {{ $item->buy }}</span> , <span>Sell: {{ $item->sell }}</span></li>
                    @empty
                       <li> Coming <span> Soon</span></li>
                    @endforelse
                </ul>
            </marquee>
        </div>
    </div>

</section>
<section class="category">
    <div class="row">
       @forelse ($servicesCat as $item)
            <div class="col-sm">
            <div class="card ">
                <img class="img-fluid rounded mx-auto" src="{{Voyager::image($item->thumbnail('cropped'))}}"
                    alt="category">
                <div class="card-body">
                    <a href="{{ route('services.cat',$item->slug) }}">
                        <h2>{{ $item->title }}</h2>
                    </a>
                    <p>{!! $item->description !!}<a href="{{ route('services.cat',$item->slug) }}">Read More <i class="fa fa-chevron-right"></i></a></p>
                </div>
            </div>
        </div>
       @empty
       @endforelse
    </div>
</section>
<section class="market">
    <div class="row">
        <div class="col">
            <div class="col-md-12 text-center">
                    <h4>Local Market</h4>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Top Gainers</th>
                                <th scope="col">Price(KES)</th>
                                <th scope="col">Change(%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($gainers as $gg)
                            <tr>
                                <td>{{ $gg->name }}</td>
                                <td>{{ $gg->price }}</td>
                                <td><span class="badge badge-success">+ {{ $gg->percentage}}</span> <i
                                        style="color:green" class="fa fa-angle-up fa-lg"></i></td>
                            </tr>
                            @empty
                            <p>No gainers at the moment.</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Lossers</th>
                                <th scope="col">Price(KES)</th>
                                <th scope="col">Change(%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($loosers as $ll)
                            <tr>
                                <td>{{ $ll->name }}</td>
                                <td>{{ $ll->price }}</td>
                                <td><span class="badge badge-danger">- {{ $ll->percentage }} </span> <i
                                        style="color:red" class="fa fa-angle-down fa-lg"></i></td>
                            </tr>
                            @empty
                            <p>No loosers at the moment.</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="col-md-12 text-center">
                    <h4>International Market</h4>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Movers</th>
                                <th scope="col">Price</th>
                                <th scope="col">Change(%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($international as $ii)
                            <tr>
                                <td>{{ $ii->name }}</td>
                                <td>$ {{ $ii->price }}</td>
                                <td>{{ $ii->percentage }} %</td>
                            </tr>

                            @empty
                            <p>No international companies at the moment.</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Index</th>
                                <th scope="col">Price</th>
                                <th scope="col">Change(%)</th>
                                <th scope="col">Region</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($indices as $index)
                            <tr>
                                <td>{{ $index->name }}</td>
                                <td>{{ $index->price }}</td>
                                <td>{{ $index->percentage }} %</td>
                                <td>{{ $index->region }}</td>
                            </tr>
                            @empty
                            <p>No international companies at the moment.</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="news">
    <div class="container">
        <div class="col-md-12 text-center">
            <div class="section-title">
                <h2>Latest news in Business</h2>
            </div>
        </div>
        <div class="row">
            <div class="news-slider">
                @forelse ($news as $item)
                    <div class="item">
                    <div class="card article_card">
                        <a href="{{ route('news.show',$item->slug) }}">
                            <img src="{{ Voyager::image( $item->image)}}" alt="news image" class="img-fluid">
                            <div class="article_date">
                                <span class="article_day">{{ $item->created_at->format('d') }}</span>
                                <span class="article_month">{{ $item->created_at->format('M') }}</span>
                            </div>
                            <div class="card-body p-0">
                                <p class="card-text">
                                    {{ $item->title }}
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                @empty

                @endforelse
            </div>
        </div>
</section>
<!--====== QUOTES AREA =====-->
<div class="quotes-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="quotes-content text-center">
                    <h3>Well get in touch with you</h3>
                    <p>Let us choose the most suitable solution for you.</p>
                    <a class="scroll-btn btn theme-color" href="{{ route('contact') }}">Contact us</a>
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</div>
<!--====== END QUOTES AREA =======-->
@include('layouts.footer')
@endsection
