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
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h4 class="m-0">Edit User</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Nama -->
                        <div class="form-group">
                            <label for="name" class="font-weight-bold">Nama</label>
                            <input type="text" class="form-control shadow-sm" name="name" id="name" maxlength="200" value="{{ $user->name }}" required />
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email" class="font-weight-bold">Email</label>
                            <input type="email" class="form-control shadow-sm" name="email" id="email" maxlength="200" value="{{ $user->email }}" required />
                        </div>

                        <!-- Contact -->
                        <div class="form-group">
                            <label for="contact" class="font-weight-bold">Contact</label>
                            <input type="text" class="form-control shadow-sm" name="contact" id="contact" maxlength="200" value="{{ $user->profile->contact }}" required />
                        </div>

                  
                        <!-- Submit and Reset Buttons -->
                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" class="btn btn-success shadow-sm mr-2"><i class="fas fa-save"></i> Edit</button>
                            <button type="reset" class="btn btn-secondary shadow-sm"><i class="fas fa-undo"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>

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