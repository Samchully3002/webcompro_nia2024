@extends('dashboard')
@push('headscript')
<!-- Styles -->

<!-- Scripts -->
<script type="text/javascript">
var tableTag;

$( document ).ready(function() {

  tableTag = $('.tags-table').DataTable({
          fixedColumns: true,
          processing: true,
          serverSide: true,
          ajax: "{{ route('dashboard.list.tags') }}",
          columns: [
              {data: 'pages', name:'pages'},
              {data: 'url', name:'url'},
              {data: 'title', name:'title'},
              {data: 'desc', name:'desc'},
              {data: 'keyword', name:'keyword'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ],
        'columnDefs': [
            {
            "targets": 5,
            "width": "20%",
            "className": "text-center",
            }
          ]
      });
    
});
</script>
@endpush
    @section('content')
    <div class="row gy-3">
                <div class="col-md-6 col-lg-4">
                  <div class="demo-inline-spacing">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">SEO  Area /</span> List Meta Tag</h4>
                    <button onclick="showTagById('.$row->id.')" class="edit btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">Create</button>      
                </div>  
                </div>
              </div>
  
                <hr class="my-5">
  
                <!-- Striped Rows -->
                <div class="card">
                    <div class="card-body">
                    <div class="table-responsive">
                    <div class="table">
                    <table class="table table-striped tags-table">
                      <thead class="text-center">
                        <tr>
                          <th>Page Name</th>
                          <th>URL</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Keywords</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">

                      </tbody>
                    </table>
                    </div>
                  </div>
                    </div>
                </div>
                <!--/ Striped Rows -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
                          <div class="offcanvas-header">
                            <h5 id="offcanvasEndLabel" class="offcanvas-title">New Pages </h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                          </div>
                          <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                          <form id="form_tags" name="form_tags" method="POST" onsubmit="return false">
                          @csrf
                          <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label"> Page Name</label>
                        <input type="text" class="form-control" id="pages" name="pages" placeholder="" aria-describedby="defaultFormControlHelp">
                        <input type="hidden" name="id" id="id" placeholder="" />
                      </div>
                      <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label"> URL</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="" aria-describedby="defaultFormControlHelp">
                      </div>
                      <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label"> META TITLE</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="" aria-describedby="defaultFormControlHelp">
                      </div>
                      <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label"> META Description</label>
                        <input type="text" class="form-control" id="desc" name="desc" placeholder="" aria-describedby="defaultFormControlHelp">
                      </div>
                      <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label"> META KEYWORD</label>
                        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="" aria-describedby="defaultFormControlHelp">
                      </div>

                      <button type="button" id="btn_form_tag" class="btn btn-primary mb-2 d-grid w-100">Save</button>

</form>
                        </div>
                <hr class="my-5">
    @stop