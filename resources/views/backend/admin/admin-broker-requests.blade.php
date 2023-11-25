@include('navbar')

<div class="container-fluid">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Broker Request </h5>
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
                                    <h6 class="fw-semibold mb-0">Contact No.</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Skpye Id</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Address</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Country</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Broker Percent</h6>
                                </th>
                                <!-- <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Documents</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Date of Request</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Time of Request</h6>
                </th> -->
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">View</h6>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $reversedBrokerRequest = array_reverse($BrokerRequest);
                            @endphp
                            @foreach($reversedBrokerRequest as $RequestData)
                                @if ($RequestData->inst_amt == null)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">{{ $RequestData->full_name }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $RequestData->email }}</p>
                                        </td>

                                        <td class="border-bottom-0">
                                            <h6 class="fw-normal mb-0">{{ $RequestData->phone }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-normal mb-0">{{ $RequestData->skypeid }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-normal mb-0">{{ $RequestData->address }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-normal mb-0">{{ $RequestData->country }}</h6>
                                        </td>

                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0 fs-4">{{ $RequestData->broker_per }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <a href="{{url('/user-request-'. $RequestData->id)}}"> <span class="badge bg-secondary rounded-3 fw-semibold">View</span></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
