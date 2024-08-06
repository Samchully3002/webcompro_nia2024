@extends('dashboard')
    @section('content')
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">News /</span> Update News</h4>

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
              <label class="col-sm-2 col-form-label" for="basic-default-name">News Title [en]</label>
              <div class="col-sm-10">
                <input type="text" value="{{$news->title}}" class="form-control" id="basic-default-name" placeholder="" id="title" name="title">
                <input type="hidden" name="id" id="id" placeholder="" value="{{$news->id}}">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">News Title [kr]</label>
              <div class="col-sm-10">
                <input type="text" value="{{$news->title_kr}}" class="form-control" id="basic-default-name" placeholder="" id="title_kr" name="title_kr">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">News Title [id]</label>
              <div class="col-sm-10">
                <input type="text" value="{{$news->title_id}}" class="form-control" id="basic-default-name" placeholder="" id="title_id" name="title_id">
              </div>
            </div>
            <div class="row mb-3">
            <label for="firstName" class="col-sm-2 col-form-label">News Language</label>
                <div class="col-sm-10">
                <select id="news_lang" name="news_lang" class="select2 form-select">
                <option value="{{$news->news_lang}}" selected>{{$news->news_lang}}</option>
                              <option value="English">English</option>
                              <option value="Indonesia">Indonesia</option>
                              <option value="Korea">Korea</option>
                            </select>
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
