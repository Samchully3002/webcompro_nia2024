@extends('dashboard')
    @section('content')
    <div class="row gy-3">
                <div class="col-md-6 col-lg-4">
                  <div class="demo-inline-spacing">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">List User(s)/</span> Admin</h4>
                    <button class="edit btn btn-primary"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">Create</button>      
                </div>  
                </div>
              </div>
  
                <hr class="my-5">
  
                <!-- Striped Rows -->
                <div class="card">
                    <div class="card-body">
                    <div class="table-responsive">
                    <div class="table">
                    <table class="table table-striped admins-table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Fullname</th>
                          <th>Email</th>
                          <!-- <th>Password</th> -->
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
                            <h5 id="offcanvasEndLabel" class="offcanvas-title">New Admin </h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                          </div>
                          <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                          <form id="form_admin" name="form_admin" method="POST" onsubmit="return false">
                          @csrf
                          <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Fullname</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="" aria-describedby="defaultFormControlHelp">
                        <input type="hidden" name="id" id="id" placeholder="" />
                      </div>
                      <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="" aria-describedby="defaultFormControlHelp">
                      </div>
                      <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label"> Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="********" aria-describedby="defaultFormControlHelp">
                      </div>

                      <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Re: Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="********" aria-describedby="defaultFormControlHelp" autocomplete="new-password">
                      </div>

                      <button type="button" id="btn_form_admin" class="btn btn-primary mb-2 d-grid w-100">Save</button>
                      <button type="button" id="btn_reset" class="btn btn-default mb-2 d-grid w-100" 
                      onClick="(function(){
    document.getElementById('form_admin').reset();
    return false;
})();return false;"
                      >Clear Form</button>

</form>
                        </div>
                <hr class="my-5">
    @stop