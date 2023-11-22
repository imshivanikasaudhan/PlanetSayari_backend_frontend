@include ('navbar')
<div class="container-fluid">
  <!--  Row 1 -->
  <div class="row">
    <div class="col-lg-8 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="mb-3 mb-sm-0">
              <h5 class="card-title fw-semibold">Sales Overview</h5>
            </div>
            <div>
              <select class="form-select">
                <option value="1">March 2023</option>
                <option value="2">April 2023</option>
                <option value="3">May 2023</option>
                <option value="4">June 2023</option>
              </select>
            </div>
          </div>
          <div id="chart"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="row">
        <div class="col-lg-12">
          <div class="card overflow-hidden">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold">Total Investors</h5>
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 class="fw-semibold mb-3">14</h4>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card overflow-hidden">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold">Total Brokers</h5>
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 class="fw-semibold mb-3">07</h4>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="row alig n-items-start">
                <div class="col-8">
                  <h5 class="card-title mb-9 fw-semibold"> Total Deal Request </h5>
                  <h4 class="fw-semibold mb-3">09</h4>
              </div>
            </div>
            {{-- <div id="earning"></div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    {{-- <div class="col-lg-4 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <div class="mb-4">
            <h5 class="card-title fw-semibold">Recent Transactions</h5>
          </div>
          <ul class="timeline-widget mb-0 position-relative mb-n5">
            <li class="timeline-item d-flex position-relative overflow-hidden">
              <div class="timeline-time text-dark flex-shrink-0 text-end">09:30</div>
              <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                <span class="timeline-badge-border d-block flex-shrink-0"></span>
              </div>
              <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John Doe of $385.90</div>
            </li>
            <li class="timeline-item d-flex position-relative overflow-hidden">
              <div class="timeline-time text-dark flex-shrink-0 text-end">10:00 am</div>
              <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                <span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
                <span class="timeline-badge-border d-block flex-shrink-0"></span>
              </div>
              <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a href="javascript:void(0)"
                  class="text-primary d-block fw-normal">#ML-3467</a>
              </div>
            </li>
            <li class="timeline-item d-flex position-relative overflow-hidden">
              <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
              <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                <span class="timeline-badge-border d-block flex-shrink-0"></span>
              </div>
              <div class="timeline-desc fs-3 text-dark mt-n1">Payment was made of $64.95 to Michael</div>
            </li>
            <li class="timeline-item d-flex position-relative overflow-hidden">
              <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
              <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                <span class="timeline-badge-border d-block flex-shrink-0"></span>
              </div>
              <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a href="javascript:void(0)"
                  class="text-primary d-block fw-normal">#ML-3467</a>
              </div>
            </li>
            <li class="timeline-item d-flex position-relative overflow-hidden">
              <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
              <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                <span class="timeline-badge-border d-block flex-shrink-0"></span>
              </div>
              <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New arrival recorded
              </div>
            </li>
            <li class="timeline-item d-flex position-relative overflow-hidden">
              <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
              <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
              </div>
              <div class="timeline-desc fs-3 text-dark mt-n1">Payment Done</div>
            </li>
          </ul>
        </div>
      </div>
    </div> --}}
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">Recent Deal Request</h5>
          <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
              <thead class="text-dark fs-4">
                <tr>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">SNo.</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Name</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Name</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Status</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Investment</h6>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">1</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                  </td>
                  <td class="border-bottom-0">
                    <p class="mb-0 fw-normal">Elite Admin</p>
                  </td>
                  <td class="border-bottom-0">
                    <div class="d-flex align-items-center gap-2">
                      <span class="badge bg-primary rounded-3 fw-semibold">Low</span>
                    </div>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">$3.9 M</h6>
                  </td>
                </tr>
                <tr>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">2</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">Andrew McDownland</h6>
                  </td>
                  <td class="border-bottom-0">
                    <p class="mb-0 fw-normal">Real Homes WP Theme</p>
                  </td>
                  <td class="border-bottom-0">
                    <div class="d-flex align-items-center gap-2">
                      <span class="badge bg-secondary rounded-3 fw-semibold">Medium</span>
                    </div>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">$24.5k</h6>
                  </td>
                </tr>
                <tr>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">3</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">Christopher Jamil</h6>
                  </td>
                  <td class="border-bottom-0">
                    <p class="mb-0 fw-normal">MedicalPro WP Theme</p>
                  </td>
                  <td class="border-bottom-0">
                    <div class="d-flex align-items-center gap-2">
                      <span class="badge bg-danger rounded-3 fw-semibold">High</span>
                    </div>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">$12.8k</h6>
                  </td>
                </tr>
                <tr>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">4</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                  </td>
                  <td class="border-bottom-0">
                    <p class="mb-0 fw-normal">Hosting Press HTML</p>
                  </td>
                  <td class="border-bottom-0">
                    <div class="d-flex align-items-center gap-2">
                      <span class="badge bg-success rounded-3 fw-semibold">Critical</span>
                    </div>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">$2.4k</h6>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ======footer =========== -->
  <div class="py-6 px-6 text-center">
    <p class="mb-0 fs-4">Design and Developed by <a href="https://www.avtarspace.com">Avtar Space Technology</a></p>
  </div>
  @include('footer')
  