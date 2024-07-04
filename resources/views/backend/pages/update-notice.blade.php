@extends('dashboard')
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
              <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
              <div class="col-sm-10">
                <input type="text" name="title" class="form-control" id="title" placeholder="" require="" value="{{$notice->title}}">
                <input type="hidden" name="id" id="id" placeholder="" value="{{$notice->id}}">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
              <div class="col-sm-10">
                <input type="file" name="image" class="form-control" id="image" placeholder="">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Content</label>
              <div class="col-sm-10">
                <textarea id="content"  rows="9" name="content" class="form-control" placeholder="" aria-label="" >{{$notice->content}}</textarea>
              </div>
            </div>
            <div class="row mb-3" style="margin-top:60px;">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Date Time</label>
              <div class="col-sm-10">
                  <input class="form-control" type="date" name="date" id="date" value="{{$notice->date}}">
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
  <!-- <script>
          // ==== custom editor ===//
      const quill = new Quill('#content', {
          theme: 'snow',
          text : "{{$notice->content}}"
      });
    </script> -->
    @stop