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
        <a href="{{ url('articles/create') }}" class="btn btn-success mb-2">Create</a>

        
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

          {{-- @if (session('success'))
            <div class="my-3">
              <div class="alert alert-success">
                  <ul>
                    {{ session('success') }}
                  </ul>
              </div>
            </div>
          @endif
         --}}

         {{-- Gunakan sweetalert2 --}}
         <div class="swal" data-swal="{{ session('success') }}"></div>
        
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
                        
          </tbody>
        </table>
    </div>

    
  </main>

@endsection

@push('js')
 
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  {{-- alert success --}}

  <script>
    const swal = $('.swal').data('swal');
    if(swal){     
      Swal.fire({
        title: "Success",
        text: "Data article has been update",
        icon: "success",
        showConfirmationButton: false,
        'timer': 2000
      });
    }

             
    function deleteArticle(e){
        let id = e.getAttribute('data-id');

        Swal.fire({
          title: "Delete",
          text: "You sure delete this!",
          icon: "question",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Delete!",
          cancelButtonText: "Cancel"
        }).then((result) => {
          if (result.value) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'DELETE',
                url: '/articles/'+ id,
                dataType: "json",
                success: function(response) {
                  Swal.fire({
                    title: "Success",
                    text: response.message,
                    icon: "success",
                  }).then((result) => {
                    window.location.href = '/articles';
                  })                  
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" +thrownError);
                }
            });            
          }
        })
    }
  </script>


  {{-- datatable --}}

  <script>
    //new DataTable('#dataTable');
    $(document).ready(function() {
        // $('#dataTable').DataTable();
        $('#dataTable').DataTable({
            processing: true,
            serverside: true,
            ajax: '{{ url()->current() }}',
            columns: [
              { data: 'DT_RowIndex', data: 'DT_RowIndex' },
              { data: 'title', data: 'title'},
              { data: 'category_id', data: 'category_id'},
              { data: 'views', data: 'views'},
              { data: 'status', data: 'status'},
              { data: 'publish_date', data: 'publish_date'},
              { data: 'button', data: 'button'},
              
            ]
        });
    });
  </script>
@endpush


   
