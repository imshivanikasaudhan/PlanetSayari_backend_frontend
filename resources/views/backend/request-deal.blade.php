@include ('components/navbar')

<div class="container-fluid">
  <div class="">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Request Investment Deal</h5>
      <div class="card">
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Contact No.</label>
              <input type="integer" name="Mobile" class="form-control" id="exampleInputPassword1" minlength="9"
                maxlength="12">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Skype ID</label>
              <input type="text" name="Skype" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Full Address</label>
              <input type="text" name="Address" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Country</label>
              <input type="text" name="Country" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Invester Amount</label>
              <input type="integer" name="Investers" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Broker Percentage</label>
              <input type="integer" name="Broker" class="form-control" id="exampleInputPassword1" placeholder="5%"
                disabled>
            </div>
            <div class="mb-3 form-check">
              <!-- <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                      </div> -->
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <button type="submit" class="btn btn-primary">Request Deal</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@include ('footer')