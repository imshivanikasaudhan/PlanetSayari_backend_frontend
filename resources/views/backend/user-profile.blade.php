@include('components/navbar')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="main-body">
    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="backend\assets\images\profile\user-1.jpg" alt="Customer" width="150" height="150"
                class="rounded-circle">
              <div class="mt-3">
                <h4 class="text fs-10">
                  User Name </h4>
                <p class="text fs-15">
                  User Type : <span>Broker</span> </p>
                <button type="button" class="btn rounded-pill btn-info" data-bs-toggle="modal"
                  data-bs-target="#EditModal">Edit
                  Profile</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card mb-3 p-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-8">
                <h5 style="color:black">Personal Details</h5>
              </div>
            </div>
            <div class="row border rounded p-3 mb-3">

              <div class="col-sm-9 text-secondary mb-2">
                <h6 style="display:inline-block; margin-right:20px">Name:</h6>
                user admin
              </div>
              <div class="col-sm-9 text-secondary mb-2">
                <h6 style="display:inline-block; margin-right:20px ">Email:</h6>
                useradmin979@gmail.com
              </div>
              <div class="col-sm-9 text-secondary mb-2">
                <h6 style="display:inline-block; margin-right:20px">Mobile:</h6>
                9555249281
              </div>
              <div class="col-sm-9 text-secondary mb-2">
                <h6 style="display:inline-block; margin-right:15px">Gender:</h6>
                Male
              </div>
              <div class="col-sm-9 text-secondary mb-2">
                <h6 style="display:inline-block; margin-right:15px">Skype:</h6>@planetsayari
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container card overflow-hidden">
        <div class="row gx-5 my-4">

          <div class="col">
            <div class="p-3 ">
              <h5 class="d-flex align-items-center mb-3" style="color:black">Your address</h5>
              <div class="row border rounded p-3 mb-3">
                <div class="col-sm-3 mb-2">
                  <h6 class="mb-0">Full Address</Address>
                  </h6>
                </div>
                <div class="col-sm-9 text-secondary mb-2">
                  xyz </div>
                <div class="col-sm-3 mb-2">
                  <h6 class="mb-0">City</h6>
                </div>
                <div class="col-sm-9 text-secondary mb-2">
                  xyz </div>
                <div class="col-sm-3 mb-2">
                  <h6 class="mb-0">Pincode</Address>
                  </h6>
                </div>
                <div class="col-sm-9 text-secondary mb-2">
                  2547457</div>
                <div class="col-sm-3 mb-2">
                  <h6 class="mb-0">Country</h6>
                </div>
                <div class="col-sm-9 text-secondary mb-2">
                  India </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3">
              <h5 class="d-flex align-items-center mb-3" style="color:black">Password
              </h5>
              <div class="row border  rounded p-3 " style="padding-bottom:50px !important;">
                <div class="col-sm-6 mb-2">
                  <h6 class="mb-0">Current Password </h6>
                </div>
                <div class="col-sm-6 text-secondary mb-2">
                  xxxxxx </div>
                <div class="col-sm-6 mb-2">
                  <h6 class="mb-0">New password: </h6>
                </div>
                <div class="col-sm-6 text-secondary mb-2">
                  xxxxx</div>
                <div class="col-sm-6 mb-2">
                  <h6 class="mb-0">Confirm new password:</h6>
                </div>
                <div class="col-sm-6 text-secondary mb-2">
                  xxxxx </div>
              </div>
            </div>
          </div>

        </div>
        <div class="modal" tabindex="-1">
        </div>

        <!-- Edit Modal -->
        <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="POST">
                  <div class="mb-3">
                    <label for="inputname" class="form-label">Name</label>
                    <input type="name" class="form-control" id="inputname" aria-describedby="emailHelp">
                    <div id="name" class="form-text"></div>
                  </div>
                  <div class="mb-3">
                    <label for="InputEmail1" class="form-label">Email Address</label>
                    <input value="" type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                    <label for="InputEmail1" class="form-label">Mobile
                      number</label>
                    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                  </div>
                  <div class="mb-3">
                    <label for="InputEmail1" class="form-label">Gender</label>
                    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                  </div>
                  <div class="mb-3">
                    <label for="InputPassword1" class="form-label">Skype</label>
                    <input type="password" class="form-control" id="InputPassword1">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn rounded-pill btn-dark" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn rounded-pill btn-info">Save
                  changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="DeactivateModal" tabindex="-1" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Deactivate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">
                <p>Are you sure want to delete account</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn rounded-pill btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="text" name="deactivated" value="0">
                <input type="submit" name="deactivate" value="Deactivate" class="btn rounded-pill btn-danger ">
              </div>
            </div>
          </div>
        </div>
        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
          <div class="container-xxl flex-wrap text-center py-2 ">

          </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
      </div>
      <!-- Content wrapper -->
    </div>

    @include('footer')