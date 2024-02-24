@include('layout.app')
            <!-- Main content -->
            <div class="content">
            <h2 class="text-center">Data Pembayaran Listrik</h2>
            <div class="container-fluid content">
                
                        <!-- <div class="container  col-md-">
                        @if(session()->has('bisa'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('bisa') }}
                        </div>
                        @endif
                        <div class="card-header">
                            @if (auth()->user()->level=="admin")
                        <a class="btn btn-primary" href="/tagihan/create" role="button">Tambah Tagihan</a>
                        @endif
                        </div> -->
                            <div class="card-body p-0 table-responsive">
                            <a class="btn btn-primary  border-0 p-2 d-inline" href="/pembayaran/create" >Tambah</a>
                            <table class="table table-striped table-hover mb-0" id="example">
                                <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Id Pelanggan</th>
                                            <th scope="col">Tanggal Pembayaran</th>
                                            <th scope="col">Jumlah Tagihan</th>
                                            <th scope="col">Jumlah Bayar</th>

                                        </tr>
                                </thead>
                                <tbody>
                                @foreach( $pembayarans as $pembayaran )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pembayaran->name }}</td>
                                            <td>{{ $pembayaran->idpel }}</td>
                                            <td>{{ $pembayaran->bulan }}</td>
                                            <td>Rp. {{ $pembayaran->jmltagihan }}</td>
                                            <td>Rp. {{ $pembayaran->jmlbayar }}</td>
                                            @if (auth()->user()->level=="admin")
                                            <td>
                                            <a class="badge bg-warning  border-0 p-2 d-inline" href="/pembayaran/{{ $pembayaran->id }}/edit" >Update</a>
                                            <a class="badge bg-warning  border-0 p-2 d-inline" href="/pembayaran/{{ $pembayaran->id }}/cetak" >cetak</a>
                                            <form action="/pembayaran/{{ $pembayaran->id }}" method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="badge bg-danger border-0 p-2" onclick="return confirm(' Are Yout Sure Delete ')">Delete</button>
                                            </form>
                                            </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


