@extends('dashboard')
@push('headscript')
<!-- Styles -->

<!-- Scripts -->
<script type="text/javascript">
   var tableNotice;

   $( document ).ready(function() {
      tinymce.init({
            selector: 'textarea.content'
         });
});

$("#notice_form_btn").click(function(e) {
        e.preventDefault();

        let form = $('#notice_form')[0];
        let data = new FormData(form);
      
        $.ajax({
          url: "{{ route('dashboard.post.notice.ajax') }}",
          type: "POST",
          data: data,
          dataType: "JSON",
          processData: false,
          contentType: false,
          success: function(response) {
            $('#notice_form')[0].reset();
            dispNotif('Saving Data Success', response.message, 'success');
        },
        error: function(xhr, status, error) {
          dispNotif('', 'error saving data', 'error');
          }

        });

      });
</script>
@endpush 
@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Coumunity /</span> Post Notice</h4>
<!-- Form Post New Business -->
<div class="row">
   <!-- Form Element -->
   <div class="col-xxl">
      <div class="card mb-4">
         <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Create Notice</h5>
         </div>
         <div class="card-body">
            <form id="notice_form" action="POST">
               @csrf
               <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                  <div class="col-sm-10">
                     <input type="file" name="image" class="form-control" id="image" placeholder="">
                  </div>
               </div>
               <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Date Time</label>
                  <div class="col-sm-10">
                     <input class="form-control" type="date" name="date" id="date">
                  </div>
               </div>
               <div class="nav-align-top mb-4 mt-4">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item">
                        <button
                           type="button"
                           class="nav-link active"
                           role="tab"
                           data-bs-toggle="tab"
                           data-bs-target="#navs-top-home"
                           aria-controls="navs-top-home"
                           aria-selected="true">
                        English
                        </button>
                     </li>
                     <li class="nav-item">
                        <button
                           type="button"
                           class="nav-link"
                           role="tab"
                           data-bs-toggle="tab"
                           data-bs-target="#navs-top-profile"
                           aria-controls="navs-top-profile"
                           aria-selected="false">
                        Korea
                        </button>
                     </li>
                     <li class="nav-item">
                        <button
                           type="button"
                           class="nav-link"
                           role="tab"
                           data-bs-toggle="tab"
                           data-bs-target="#navs-top-messages"
                           aria-controls="navs-top-messages"
                           aria-selected="false">
                        Indonesia
                        </button>
                     </li>
                  </ul>
                  <div class="tab-content" style="box-shadow:0px 0px; !important">
                     <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Title [en]</label>
                          <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" id="title" placeholder="" require="">
                            <input type="hidden" name="id" id="id" placeholder="">
                          </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Content [en]</label>
                          <div class="col-sm-10">
                            <textarea id="content" name="content" class="content form-control txt-content" placeholder="" aria-label=""></textarea>
                          </div>
                      </div>
                     </div>
                     <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                     <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Title [kr]</label>
                          <div class="col-sm-10">
                            <input type="text" name="title_kr" class="form-control" id="title_kr" placeholder="" require="">
                          </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Content [kr]</label>
                          <div class="col-sm-10">
                            <textarea id="content_kr" name="content_kr" class="content form-control txt-content" placeholder="" aria-label=""></textarea>
                          </div>
                      </div>
                     </div>
                     <div class="tab-pane fade" id="navs-top-messages" role="tabpanel">
                     <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Title [id]</label>
                          <div class="col-sm-10">
                            <input type="text" name="title_id" class="form-control" id="title_id" placeholder="" require="">
                          </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Content [id]</label>
                          <div class="col-sm-10">
                            <textarea id="content_id" name="content_id" class="content form-control txt-content" placeholder="" aria-label=""></textarea>
                          </div>
                      </div>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-end">
                  <div class="col-sm-10">
                     <button type="submit" class="btn btn-primary" id="notice_form_btn">Save</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

@endsection


