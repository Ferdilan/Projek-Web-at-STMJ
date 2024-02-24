@include('layout.app')

               <!-- Main content -->
               <div class="content">
            <div class="container-fluid content">
                        <div class="container  col-md-">
                        <div class="card-body col-lg-8">
                            <form  class="form-valide" action="/datatagihan" method="post">   
                            @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Nama" value="{{ old('name', $datatagihan->name ) }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Id Pelanggan</label>
                                    <input type="text" class="form-control" name="idpel" id="exampleFormControlInput1" placeholder="Idpel" value="{{ old('name', $datatagihan->idpel ) }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" name="bulan" id="exampleFormControlInput1" placeholder="Tanggal" value="{{ old('name', $datatagihan->bulan ) }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jumlah Tagihan</label>
                                    <input type="text" class="form-control" name="jmltagihan" id="exampleFormControlInput1" placeholder="jumlah tagihan" value="{{ old('name', $datatagihan->jmltagihan ) }}" required>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
            <!-- /.content -->
