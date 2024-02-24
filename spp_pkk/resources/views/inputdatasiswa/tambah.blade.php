@include('layout.app')

            <!-- Main content -->
            <div class="content">
            <h2 class="text-center">Tambah Transaksi SPP</h2>
            <div class="container-fluid content">
                        <div class="container  col-md-">
                        <div class="card-body col-lg-8">
                            <form  class="form-valide" action="/inputdatasiswa" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">NIS</label>
                                    <input type="text" class="form-control" name="nis" id="exampleFormControlInput1" placeholder="NIS" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                                    <input type="text" class="form-control" name="kls" id="exampleFormControlInput1" placeholder="Kelas" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan" id="exampleFormControlInput1" placeholder="Jurusan" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tahun Masuk</label>
                                    <input type="text" class="form-control" name="thmasuk" id="exampleFormControlInput1" placeholder="Tahun Masuk" required>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
            <!-- /.content -->


