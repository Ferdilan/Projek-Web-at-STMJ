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
                        <div class="card-header">
                        <a class="btn btn-primary" href="/datatagihan/create" role="button">Tambah Catatan</a>
                            </div>
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
                                @foreach( $datatagihans as $datatagihan )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $datatagihan->name }}</td>
                                            <td>{{ $datatagihan->idpel }}</td>
                                            <td>{{ $datatagihan->bulan }}</td>
                                            <td>{{ $datatagihan->jmltagihan }}</td>
                                            
                                            <td>
                                            <a class="badge bg-warning  border-0 p-2 d-inline" href="/datatagihan/{{ $datatagihan->id }}/edit" >Update</a>
                                            <form action="/datatagihan/{{ $datatagihan->id }}" method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="badge bg-danger border-0 p-2" onclick="return confirm(' Are Yout Sure Delete ')">Delete</button>
                                            </form>
                                            </td>
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


