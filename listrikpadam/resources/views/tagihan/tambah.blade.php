@include('layout.app')

            <!-- Main content -->
            <div class="content">
            <div class="container-fluid content">
                        <div class="container  col-md-">
                        <div class="card-body col-lg-8">
                            <form  class="form-valide" action="/tagihan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Id Pelanggan</label>
                                    <input type="text" class="form-control" name="idpel" id="exampleFormControlInput1" placeholder="Id Pelanggan" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" name="bulan" id="exampleFormControlInput1" placeholder="Tanggal" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jumlah Tagihan</label>
                                    <input type="text" class="form-control" name="jmltagihan" id="exampleFormControlInput1" placeholder="Jumlah Tagihan" required>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
            <!-- /.content -->


