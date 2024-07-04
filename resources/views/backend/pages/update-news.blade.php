@extends('dashboard')
    @section('content')
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">News /</span> Post News</h4>
  
  <!-- Form Post New Business -->
  <div class="row">
    <!-- Form Element -->
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Create News</h5>
        </div>
        <div class="card-body">
          <form id="form_news" name="form_news" method="POST" onsubmit="return false">
          @csrf
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">News Title</label>
              <div class="col-sm-10">
                <input type="text" value="{{$news->title}}" class="form-control" id="basic-default-name" placeholder="" id="title" name="title">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Source</label>
              <div class="col-sm-10">
                <textarea id="source"  name="source" class="form-control" placeholder="" aria-label="" aria-describedby="basic-icon-default-message2">{{$news->source}}</textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label for="formFile" class="col-sm-2 col-form-label">Images</label>
              <div class="col-sm-10">
                  <input class="form-control" type="file" id="image" name="image">
              </div> 
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="button" class="btn btn-primary" id="btn_form_news">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    @stop