<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    @include ('template.head')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.dataTables.css" />


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
            @include('template.navbar')


            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="{{ route('users.index') }}" style="text-decoration: none;">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                User</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $usercount }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="{{ route('articles.index') }}" style="text-decoration: none;">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Article</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $articleCount }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="{{ route('ayhs.index') }}" style="text-decoration: none;">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Ayahs</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $arabcount }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->


                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="{{ route('event.index') }}" style="text-decoration: none;">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Event</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $eventcount }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar-plus fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="{{ route('departement.index') }}" style="text-decoration: none;">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Departement</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $deparcount }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-building fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="{{ route('payment.index') }}" style="text-decoration: none;">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Payment</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $paymentcount }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="{{ route('books.index') }}" style="text-decoration: none;">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Books</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $bookscount }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="{{ route('post.index') }}" style="text-decoration: none;">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Posts</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $postcount }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-upload fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="{{ route('bank.index') }}" style="text-decoration: none;">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Banks</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $bankcount }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-money-check fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>




                    <!-- Earnings (Monthly) Card Example -->


                    <!-- Pending Requests Card Example -->

                </div>
            </div>



            <!-- Footer -->

            <!-- End of Footer -->
        </div>


        <!-- End of Main Content -->




        <!-- End of Content Wrapper -->


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
        <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
        <!-- Bootstrap core JavaScript-->
        @include ('template.script')

</body>

</html>