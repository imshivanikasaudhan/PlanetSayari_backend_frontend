@include('components/navbar')

<div class="container-fluid">
  <div class="">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Need Any Help?</h5>
      <div class="card">
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="Contact_Name" class="form-label">Enter your Name</label>
              <input type="text" class="form-control" id="Contact_Name" aria-describedby="NameHelp"
                placeholder="User Name">
            </div>
            <div class="mb-3">
              <label for="Contact_email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="Contact_email" aria-describedby="emailHelp"
                placeholder="xyz@gmail.com">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="Contact_number" class="form-label">Enter Contact No.</label>
              <input type="number" class="form-control" id="Contact_number" aria-describedby="contactHelp"
                placeholder="+1 189462030">
            </div>
            <div class="mb-5">
              <label for="Contact_Message" class="form-label">Enter your Queries</label>
              <textarea class="form-control" name="Contact_Message" id="Contact_Message" cols="30" rows="8"
                placeholder="Type Query Message ..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@include('footer')