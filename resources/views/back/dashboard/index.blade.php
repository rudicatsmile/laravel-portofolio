@extends('back.layout.template')
@section('title','Dashboard - Admin')

@section('content')
  {{-- Content  --}}
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>      
    </div>

    <div class="row">
      <div class="col-6">
        <div class="card text-bg-primary mb-3" style="max-width: 100%;">
          <div class="card-header">Total Aricles</div>
          <div class="card-body">
            <h5 class="card-title">{{ $total_articles }} articles</h5>
            <p class="card-text"><a href="{{ url('articles') }}" class="text-white">View</a></p>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="card text-bg-secondary mb-3" style="max-width: 100%;">
          <div class="card-header">Total Categories</div>
          <div class="card-body">
            <h5 class="card-title">{{ $total_categories }} categories</h5>
            <p class="card-text"><a href="{{ url('categories') }}" class="text-white">View</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-6">
        <h4>Latest Articles</h4>
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <td>No</td>
                <td>Title</td>
                <td>Category</td>
                <td>Views</td>
                <td>Action</td>
              </tr>
            </thead>

            <tbody>
              @foreach ($latest_article as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->title }}</td>
                  <td>{{ $item->Category->name }}</td>
                  <td>{{ $item->views }}</td>
                  <td class="text-center">
                    <a href="{{ url('articles/'.$item->id) }}" class="btn btn-sm btn-secondary">Detail</a>
                  </td>
                </tr>                  
              @endforeach
              
            </tbody>
        </table>
      </div>

      <div class="col-6">
        <h4>Popular Articles</h4>
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <td>No</td>
                <td>Name</td>
                <td>Slug</td>
                <td>Created at</td>
                <td>Action</td>
              </tr>
            </thead>

            <tbody>
              @foreach ($popular_article as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->title }}</td>
                  <td>{{ $item->Category->name }}</td>
                  <td>{{ $item->created_at }}</td>
                  <td class="text-center">
                    <a href="{{ url('articles/'.$item->id) }}" class="btn btn-sm btn-secondary">Detail</a>
                  </td>
                </tr>                   
              @endforeach
              
            </tbody>
        </table>
      </div>
    </div>

    
  </main>

@endsection
   
