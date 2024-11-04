@extends('dashboard')
@push('headscript')
<!-- Styles -->

<!-- Scripts -->
<script type="text/javascript">
var tableNews;

$( document ).ready(function() {

      tableNews = $('.news-table').DataTable({
        fixedColumns: true,
         autoWidth: false,
          processing: true,
          serverSide: true,
          ajax: "{{ route('dashboard.list.news') }}",
          columns: [
              {data: 'title', name:'title'},
              {data: 'source', name:'source'},
              {data: 'image', name:'image'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    
});
</script>
@endpush
    @section('content')
    <div class="row gy-3">
                <div class="col-md-6 col-lg-4">
                  <div class="demo-inline-spacing">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Media /</span> News Report</h4>
                        <a  class="btn btn-primary" href="{{url('dashboard/post-news')}}">
                          <span class="tf-icons bx bx-plus-circle me-1"></span>Create
                        </a>
                      </div>  
                </div>
              </div>
  
                <hr class="my-5">
  
                <!-- Striped Rows -->
                <div class="card">
                    <div class="card-body">
                    <div class="table-responsive">
                    <div class="table">
                    <table class="table table-striped news-table">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Source</th>
                          <th>Images</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody class="">

                      </tbody>
                    </table>
                    </div>
                  </div>
                    </div>
                </div>
                <!--/ Striped Rows -->
  
                <hr class="my-5">
                
    @stop