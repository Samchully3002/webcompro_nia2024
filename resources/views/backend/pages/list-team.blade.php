@extends('dashboard')
    @section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Front Pages/ About /</span> Our Team</h4>

<div class="row">
  <!-- Basic Badges -->
  <div class="col-lg">
  <div class="card mb-4">
                    <!-- Account -->
                    <div class="card-body">
                    <form id="team_form" method="POST" onsubmit="return false">
                    @csrf
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{asset('backend/assets/img/avatars/default.png')}}" alt="user-avatar" class="d-block rounded"  width="200" id="uploadedAvatar">
                        <div class="button-wrapper right">
                          <label for="upload" class="btn btn-primary btn-sm me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file" id="upload" name="image" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                          </label>
                          <button type="button" class="btn btn-sm btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>
                          <p class="text-muted mb-0" style="font-size: 10 pt;">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                        <div class="row">
                          <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Given Name</label>
                            <input class="form-control" type="text" id="fullname" name="fullname" placeholder="John Doe" autofocus="">
                            <input type="hidden" id="id" name="id"/>
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Position</label>
                            <select id="role" name="role" class="select2 form-select">
                              <option value=1>Accounting Assistant</option>
                              <option value=2>Business Assistant</option>
                              <option value=3>Content Creator</option>
                              <option value=4>IT Developer</option>
                              <option value=5>IT Support</option>
                              <option value=6>Videographer & Editor</option>
                              <option value=7>UI/UX Designer</option>
                              <option value=8>Driver</option>
                              <option value=100 disabled>President Of Indoensia Branch Office</option>
                              <option value=99 disabled>Deputy General Manager</option>
                            </select>
                          </div>
                          <div class="mb-3 col-md-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Quotes</label>
                        <textarea class="form-control" id="quotes" name="quotes" rows="3"></textarea>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">Sequence</label>
                            <select id="sequence" name="sequence" class="select2 form-select">
                              <option value=0>1</option>
                              <option value=1>2</option>
                              <option value=2>3</option>
                              <option value=3>4</option>
                              <option value=4>5</option>
                              <option value=5>6</option>
                              <option value=6>7</option>
                              <option value=7>8</option>
                              <option value=8>9</option>
                              <option value=9>10</option>
                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="language" class="form-label">Show in Landing Pages</label>
                            <select id="landing" name="landing" class="select2 form-select">
                              <option value=1>Yes</option>
                              <option value=0>No</option>
                            </select>
                          </div>
                          <hr class="my-3"/>

                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2" id="team_form_btn">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
  </div>

  <!-- Label Badges -->
  <div class="col-lg">
    <div class="card mb-4">
      <h5 class="card-header">List Employee</h5>
      <div class="card-body">
                  <div class="table-responsive text-nowrap">
                  <div class="table">
                    <table class="table table-striped data-table team-table" id="team-table">
                      <thead class="text-center">
                        <tr>
                          <th>No</th>
                          <th>Full Name</th>
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
  </div>
</div>

@stop