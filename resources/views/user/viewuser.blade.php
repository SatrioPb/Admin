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
            @include('template.navbar')
            <div class="container">
                <div class="card shadow-lg mb-4">
                    <div class="card-header py-2 bg-primary text-white">
                        <h6 class="m-0 font-weight-bold">User Profile</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <!-- KTA ID -->
                                <div class="col-md-6 mb-3">
                                    <label for="kta_id" class="form-label">KTA ID</label>
                                    <input class="form-control" type="text" id="kta_id" value="{{ $user->kta_id }}" disabled />
                                </div>
                                <!-- NIP -->
                                <div class="col-md-6 mb-3">
                                    <label for="nip" class="form-label">NIP</label>
                                    <input class="form-control" type="text" id="nip" value="{{ $user->profile->nip }}" disabled />
                                </div>
                            </div>

                            <div class="row">
                                <!-- NIK -->
                                <div class="col-md-6 mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input class="form-control" type="text" id="nik" value="{{ $user->profile->nik }}" disabled />
                                </div>
                                <!-- Nama -->
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input class="form-control" type="text" id="name" value="{{ $user->name }}" disabled />
                                </div>
                            </div>

                            <div class="row">
                                <!-- Email -->
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input class="form-control" type="email" id="email" value="{{ $user->email }}" disabled />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Tanggal Lahir</label>
                                    <input class="form-control" type="text" id="email" value="{{ $user->profile->birthdate }}" disabled />
                                </div>
                                <!-- Contact -->

                            </div>

                            <div class="row">
                                <!-- Alamat -->
                                <div class="col-md-6 mb-3">
                                    <label for="home_address" class="form-label">Alamat</label>
                                    <input class="form-control" type="text" id="home_address" value="{{ $user->profile->home_address }}" disabled />
                                </div>
                                <!-- Provinsi -->
                                <div class="col-md-6 mb-3">
                                    <label for="province" class="form-label">Provinsi</label>
                                    <input class="form-control" type="text" id="province" value="{{ $user->profile->province->name ?? '' }}" disabled />
                                </div>
                            </div>

                            <div class="row">
                                <!-- Kota -->
                                <div class="col-md-6 mb-3">
                                    <label for="city" class="form-label">Kota</label>
                                    <input class="form-control" type="text" id="city" value="{{ $user->profile->cities->name ?? '' }}" disabled />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="contact" class="form-label">Contact</label>
                                    <input class="form-control" type="text" id="contact" value="{{ $user->profile->contact }}" disabled />
                                </div>
                                <!-- User Activated At -->

                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="activated_at" class="form-label">User Activated At</label>
                                    <input class="form-control" type="text" id="activated_at" value="{{ $user->user_activated_at }}" disabled />
                                </div>
                                <!-- User Expired At -->
                                <div class="col-md-6 mb-3">
                                    <label for="expired_at" class="form-label">User Expired At</label>
                                    <input class="form-control" type="text" id="expired_at" value="{{ $user->expired_at }}" disabled />
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <!-- Footer -->
            @include('template.footer')
        </div>

        <!-- End of Main Content -->


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