@include('components/navbar')

<div class="container-fluid">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Request Deal Status</h5>
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>

                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Full Name</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Email Id</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Mobile No.</h6>
                                </th>

                                @if (Auth::user()->user_type == 1)
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Investment Value</h6>
                                    </th>
                                @else
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Broker Amount</h6>
                                    </th>
                                @endif
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Skype ID</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Documents</h6>
                                </th>

                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Address</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Country</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Status</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($statusDeal as $Status)
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-1">{{ $Status->full_name }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">{{ $Status->email }}</p>
                                    </td>

                                    <td class="border-bottom-0">
                                        <h6 class="fw-normal mb-0">{{ $Status->phone }}</h6>
                                    </td>
                                    @if (Auth::user()->user_type == 1)
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0 fs-4">${{ $Status->inst_amt }} M</h6>
                                        </td>
                                    @else
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0 fs-4">{{ $Status->broker_per }} </h6>
                                        </td>
                                    @endif
                                    <td class="border-bottom-0">
                                        <h6 class="fw-normal mb-0">{{ $Status->skypeid }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <a href="#" target="_blank"> <span
                                                    class="badge bg-secondary rounded-3 fw-semibold">View</span></a>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-normal mb-0">{{ $Status->address }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-normal mb-0">{{ $Status->country }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge bg-success rounded-3 fw-semibold">In Touch</span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
