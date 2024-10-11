<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    @include ('template.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include ('template.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('template.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Payment Success</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $paymentcount }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DataTables Example -->
                    <div class="card shadow-lg mb-4">
                        <div class="card-header py-2 bg-primary text-white">
                            <h6 class="m-0 font-weight-bold">Payment Success Data</h6>
                        </div>
                        <div class="card-body">
                            <!-- Filter Dropdown -->
                            <form method="GET" action="{{ route('payment.filter') }}">
                                <div class="form-row">
                                    <!-- Filter by Province -->
                                    <div class="col-md-3 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                            </div>
                                            <select class="form-control" id="province_filter" name="province_id">
                                                <option value="">All Provinces</option>
                                                @foreach($provinces as $province)
                                                <option value="{{ $province->id }}" {{ request('province_id') == $province->id ? 'selected' : '' }}>
                                                    {{ $province->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Filter by City -->
                                    <div class="col-md-3 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-city"></i></span>
                                            </div>
                                            <select class="form-control" id="city_filter" name="city_id">
                                                <option value="">All Cities</option>
                                                @foreach($cities as $city)
                                                <option value="{{ $city->id }}" {{ request('city_id') == $city->id ? 'selected' : '' }}>
                                                    {{ $city->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Filter by Start Date -->
                                    <div class="col-md-3 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ request('start_date') }}">
                                        </div>
                                    </div>

                                    <!-- Filter by End Date -->
                                    <div class="col-md-3 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ request('end_date') }}">
                                        </div>
                                    </div>

                                    <!-- Filter by Value -->
                                    <div class="col-md-3 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                            </div>
                                            <select class="form-control" id="value_filter" name="value">
                                                <option value="">All Values</option>
                                                <option value="35000" {{ request('value') == '35000' ? 'selected' : '' }}>35000</option>
                                                <option value="65000++" {{ request('value') == '65000++' ? 'selected' : '' }}>Above 65000</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Filter and Reset Buttons -->
                                    <div class="col-md-3 mb-3">
                                        <div class="form-row">
                                            <div class="col">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    <i class="fas fa-filter"></i> Apply Filters
                                                </button>
                                            </div>
                                            <div class="col">
                                                <a href="{{ route('payment.filter') }}" class="btn btn-secondary btn-block">
                                                    <i class="fas fa-undo"></i> Reset Filters
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="table-responsive mt-4">
                                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Province</th>
                                            <th>Kota</th>
                                            <th>Status</th>
                                            <th>Value</th>
                                            <th>Midtrans ID</th>
                                            <th>Tanggal transaksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Province</th>
                                            <th>Kota</th>
                                            <th>Status</th>
                                            <th>Value</th>
                                            <th>Midtrans ID</th>
                                            <th>Tanggal transaksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($payment as $pay)
                                        <tr>
                                            @if($pay->user)
                                            <td>{{ $pay->user->name }}</td>
                                            @else
                                            <td>Tidak ada user</td>
                                            @endif

                                            <td>{{ $pay->user && $pay->user->profile && $pay->user->profile->province ? $pay->user->profile->province->name : 'N/A' }}</td>
                                            <td>{{ $pay->user && $pay->user->profile && $pay->user->profile->city ? $pay->user->profile->city->name : 'N/A' }}</td>
                                            <td>{{ $pay->status }}</td>
                                            <td>Rp {{ $pay->value }}</td>
                                            <td>{{ $pay->midtrans_id ?? '-' }}</td>
                                            <td>{{ $pay->created_at ? $pay->created_at->format('d M Y') : '-' }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>










                    <!-- Script for Bootstrap Tooltip -->
                    <script>
                        $(function() {
                            $('[data-toggle="tooltip"]').tooltip();
                        });
                    </script>


                </div>



            </div>
            <!-- Footer -->
            @include ('template.footer')
            <!-- End of Footer -->
        </div>





        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        @include ('template.script')

</body>

</html>