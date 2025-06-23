@extends('back.layout.template')

@section('title','Detail Aricle - Admin')
    
@section('content')
  {{-- Content  --}}
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Detail Articles</h1>
    </div>

    <div class="mt-3">
               
        <table class="table table-strip table-bordered" >
            <tr>
                <th width="250px">Title</th>
                <td> {{ $article->title }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td> {{ $article->Category->name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td> {!! $article->desc !!}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>
                    <a href="{{ asset('storage/back/'.$article->img) }}" target="_blank" rel="noopener noreferer">
                        <img src="{{ asset('storage/back/'.$article->img) }}" alt="" width="40%">
                    </a>
                    
                </td>

                {{-- 
                    Cara bisa di tampilkan, maka folder storage di link ke public 
                    #php artisan storage:link
                    --}}
            </tr>
            <tr>
                <th>Views</th>
                <td> {{ $article->views }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td> 
                    @if ($article->status == 0)
                        <span class="badge bg-danger">Private</span>
                    @else
                        <span class="badge bg-success">Publis</span>
                    @endif
                </td>
            </tr>
            <tr>
                <th>Publis Date</th>
                <td> {{ $article->publish_date }}</td>
            </tr>
            <tr>
                <th>Write</th>
                <td> {{ $article->user->name }}</td>
            </tr>
        </table>

        <div class="float-end">
            <a href="{{ url('articles') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>

    
  </main>

@endsection



   
