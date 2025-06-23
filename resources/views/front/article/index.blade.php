@extends('front.layout.template')

@section('title', 'Article Blog - Rudi Kurniawan')

@section('content')
    
        <!-- Page content-->
        <div class="container">
            <div class="mb-3">
                <form action="{{ route('search') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input class="form-control" name="keyword" type="text" placeholder="Search articles..." />
                        <button class="btn btn-primary" id="button-search" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            @if ($keyword)
                <p>Showing article with keyword : <b>{{ $keyword}}</b></p>
                <a href="{{ url('f-articles') }}" class="btn btn-secondary btn-sm mb-3">Reset</a>
            @endif
            <div class="row">
                
                    @forelse ($articles as $item)
                        <div class="col-4" data-aos="flip-up">
                            <div class="card mb-4 shadow-sm">
                                <a href="{{ url('p/'.$item->slug) }}"><img class="card-img-top post-img" src="{{ asset('storage/back/'.$item->img) }}" alt="..." /></a>
                                <div class="card-body card-height">
                                    <div class="small text-muted">
                                        {{ $item->created_at->format('d-m-Y')  }} |
                                        {{ $item->User->name }} |
                                        <a href="{{ url('categories/'.$item->Category->slug) }}"> {{ $item->Category->name  }} </a>
                                    </div>
                                    <h2 class="card-title h4">{{$item->title}}</h2>
                                    <p class="card-text">{{ Str::limit(strip_tags($item->desc), 200, '...')  }}</p>
                                    <a class="btn btn-primary" href="{{ url('p/'.$item->slug) }}">Read more →</a>
                                </div>
                            </div>
                        </div>
                          
                    @empty
                     <h3>Not found</h3>
                    @endforelse                     

               
            </div>
            {{ $articles->links() }}
        </div>
        

@endsection