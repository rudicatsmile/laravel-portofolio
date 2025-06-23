@extends('back.layout.template')

@push('css')
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css"> --}}
  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css"> --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endpush

@section('title','List Aricle - Admin')
    

@section('content')
  {{-- Content  --}}
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Articles</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        
      </div>


    </div>

    <div class="mt-3">
        <button class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#modalCreate">Create</button>

        
          @if ($errors->any())
            <div class="my-3">
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            </div>
          @endif

          @if (session('success'))
            <div class="my-3">
              <div class="alert alert-success">
                  <ul>
                    {{ session('success') }}
                  </ul>
              </div>
            </div>
          @endif
        
        
        <table class="table table-strip table-bordered" id="dataTable">
          <thead>
            <tr>
              <th>No</th>
              <th>Titel</th>
              <th>Category</th>
              <th>Views</th>
              <th>Status</th>
              <th>Publish date</th>
              <th>Function</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($articles as $item)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->title }}</td>
                  <td>{{ $item->Category->name }}</td>
                  <td>{{ $item->views }}</td>
                  
                  @if ($item->status == 0)
                      <td><span class='badge bg-danger'>Private</span></td>
                  @else
                      <td><span class='badge bg-success'>Published</span></td>                      
                  @endif

                  <td>{{ $item->publish_date }}</td>
                  <td>
                      <div class="text-center">
                          <button class="btn btn-secondary" >Detail</button>
                          <button class="btn btn-primary" >Edit</button>
                          <button class="btn btn-danger" >Delete</button>
                      </div>
                  </td>
              </tr>
          @endforeach
            
          </tbody>
        </table>
    </div>

    
  </main>

@endsection

@push('js')
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  
  <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>
  <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script> --}}
  {{-- <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script> --}}

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script>
    //new DataTable('#dataTable');
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
  </script>
@endpush


   
