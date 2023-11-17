@include('navbar')

<div class="container-fluid">
  <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100 ">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">User Dashboard Query</h5>
        <div class="table-responsive">
          <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
              <tr>

                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Name</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Email Id</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Mobile No.</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Message</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Date</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Time</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">View</h6>
                </th>
              </tr>
            </thead>
            <tbody>
             
              <tr>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-1"> Vishal Saraiwal</h6>
                </td>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">vishalsaraiwal68@gmail.com</p>
                </td>

                <td class="border-bottom-0">
                  <h6 class="fw-normal mb-0">+91 9876543210</h6>
                </td>
                <td class="border-bottom-0">
                  <h6 class="fw-normal mb-0 fs-4">Hello Team</h6>
                </td>
                <td class="border-bottom-0">
                  <h6 class="fw-normal mb-0">02/11/2023</h6>
                </td>
                <td class="border-bottom-0">
                  <h6 class="fw-normal mb-0">10:30:52</h6>
                </td>
                <td class="border-bottom-0">
                  <div class="d-flex align-items-center gap-2">
                    <a href="#"><span class="badge bg-success rounded-3 fw-semibold">View</span></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@include('footer')