@extends('dashboard')
    @section('content')
    <div class="row gy-3">
                <div class="col-md-6 col-lg-4">
                  <div class="demo-inline-spacing">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Contact Us / </span> List Message</h4>
                      </div>  
                </div>
              </div>
  
                <hr class="my-5">
  
                <!-- Striped Rows -->
                <div class="card">
                    <div class="card-body">
                    <div class="table-responsive">
                    <div class="table">
                    <table class="table table-striped message-table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Sender</th>
                          <th>Email</th>
                          <th>Content</th>
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
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
                          <div class="offcanvas-header">
                            <h5 id="offcanvasEndLabel" class="offcanvas-title">New Message </h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                          </div>
                          <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                          <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label"> Name</label>
                        <input type="text" class="form-control" id="sender" placeholder="John Doe" aria-describedby="defaultFormControlHelp" disabled>
                      </div>
                      <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label"> Email</label>
                        <input type="text" class="form-control" id="email" placeholder="John Doe" aria-describedby="defaultFormControlHelp" disabled>
                      </div>
                      <div class="mb-3">
                      <label for="defaultFormControlInput" class="form-label"> Message</label>
                      <p class="text-justify" id="content-message">

                      </p>
                      </div>

                        </div>
                <hr class="my-5">
    @stop