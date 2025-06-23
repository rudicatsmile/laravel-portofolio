@extends('front.layout.template');

@section('title', 'All Category - Blog Rudi Kurniawan')


@section('content')
    
        <!-- Page content-->
        <div class="container">
                       
            <p>Showing all article with category </p>

            <div class="row">  
                @foreach ($category as $item)
                    <div class="col-4 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="text-center">
                                    <span>
                                        <i class="fa fa-folder-o fa-5x" style="font-size:48px;color:red"></i>
                                    </span>

                                    <h5 class="card-title mt-2">
                                        <a href="{{ url('category/'.$item->slug) }}" class="text-decoration-none text-dark">
                                            {{ $item->name}} ({{ $item->articles_count }})
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- {{ $articles->links() }} --}}
        </div>
        

@endsection