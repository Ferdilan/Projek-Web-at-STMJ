@include('layout.app')

            <!-- Main content -->
            <div class="content">
            <h2 class="text-center">Tambah Transaksi Daftar Ulang</h2>
            <div class="container-fluid content">
                        <div class="container  col-md-">
                        <div class="card-body col-lg-8">
                            <form  class="form-valide" action="/transaksidu" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Ansuran</label>
                                    <input type="text" class="form-control" name="ansuran" id="exampleFormControlInput1" placeholder="Ansuran" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal Bayar</label>
                                    <input type="date" class="form-control" name="tgl_bayar" id="exampleFormControlInput1" placeholder="Tanggal Bayar" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                                    <input type="text" class="form-control" name="jml" id="exampleFormControlInput1" placeholder="Jumlah" required>
                                </div>
                                
                                
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
            <!-- /.content -->


