@extends('dashboard')
    @section('content')
    <div class="row gy-3">
                <div class="col-md-6 col-lg-4">
                  <div class="demo-inline-spacing">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Comunity /</span> List Notice</h4>
                        <a  class="btn btn-primary" href="{{url('dashboard/post-notices')}}">
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
                    <table class="table table-striped notice-table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Content</th>
                          <th>Date</th>
                          <th>Display</th>
                          <th>Actions</th>
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
  
                <hr class="my-5">
    @stop