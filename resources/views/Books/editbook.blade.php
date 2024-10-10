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

            <div class="card-body">
                <div class="table-responsive">


                    <div class="body">
                        <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <label for="deskripsi">Titile</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="deskripsi" id="deskripsi" rows="6" class="form-control">{{ $book->title }}</textarea>
                                </div>
                            </div>

                            <input type="submit" name="Edit" value="Edit" />&nbsp;
                            <input type="reset" value="Reset">
                        </form>
                    </div>

                </div>
                <!-- End of Main Content -->
            </div>
            <!-- Footer -->
            @include ('template.footer')
            <!-- End of Footer -->
        </div>


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