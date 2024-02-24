@include('layout.app')

            <!-- Main content -->
            <div class="content">
            <div class="container-fluid content">
                        <div class="container  col-md-">
                        <div class="card-body col-lg-8">
                            <form  class="form-valide" action="/datatagihan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">name</label>
                                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Judul ..." required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">idpel</label>
                                    <input type="text" class="form-control" name="idpel" id="exampleFormControlInput1" placeholder="Judul ..." required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">bulan</label>
                                    <input type="date" class="form-control" name="bulan" id="exampleFormControlInput1" placeholder="Judul ..." required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jumlah Tagihan</label>
                                    <input type="text" class="form-control" name="jmltagihan" id="exampleFormControlInput1" placeholder="Judul ..." required>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
            <!-- /.content -->


