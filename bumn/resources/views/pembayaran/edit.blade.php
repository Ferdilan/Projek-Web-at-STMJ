@include('layout.app')

               <!-- Main content -->
               <div class="content">
            <div class="container-fluid content">
                        <div class="container  col-md-">
                        <div class="card-body col-lg-8">
                            <form  class="form-valide" action="/pembayaran/{{ $pembayaran->id }}" method="post">  
                            @method('put')
                            @csrf
                                <div class="mb-3">
                                    <label for=" exampleFormControlInput1" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="name" value="{{ old('name', $pembayaran->name ) }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal Pembayaran</label>
                                    <input type="date" class="form-control" name="bulan" id="exampleFormControlInput1" placeholder="tanggal" value="{{ old('bulan', $pembayaran->bulan ) }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jumlah Tagihan</label>
                                    <input type="text" class="form-control" name="jmltagihan" id="exampleFormControlInput1" placeholder="Tanggal" value="{{ old('jmltagihan', $pembayaran->jmltagihan ) }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jumlah Bayar</label>
                                    <input type="text" class="form-control" name="jmlbayar" id="exampleFormControlInput1" placeholder="jumlah tagihan" value="{{ old('jmlbayar', $pembayaran->jmlbayar ) }}" required>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
            <!-- /.content -->
