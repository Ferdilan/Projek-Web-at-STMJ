@include('layout.app')
            <!-- Main content -->
            <div class="content">
            <div class="container-fluid content">
                        <div class="container  col-md-">
                        @if(session()->has('bisa'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('bisa') }}
                        </div>
                        @endif
                            <div class="card-body p-0 table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Id Pelanggan</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Jumlah Tagihan</th>
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach( $tagihans as $tagihan )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $tagihan->name }}</td>
                                            <td>{{ $tagihan->idpel }}</td>
                                            <td>{{ $tagihan->bulan }}</td>
                                            <td>{{ $tagihan->jmltagihan }}</td>
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


