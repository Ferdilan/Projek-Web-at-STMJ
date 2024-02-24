@include('layout.app')
            <!-- Main content -->
            <div class="content">
                <h2 class="text-center">Data Transaksi Daftar Ulang</h2>
            <div class="container-fluid content">
                
                            <div class="card-body p-0 table-responsive" id="example">
                            <a class="btn btn-primary" href="/transaksidu/create" >Tambah</a>
                            <table class="table table-striped table-hover mb-0" >
                                <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Ansuran</th>
                                            <th scope="col">Tanggal Pembayaran</th>
                                            <th scope="col">Jumlah</th>

                                        </tr>
                                </thead>
                                <tbody>
                                @foreach( $dus as $du )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $du->ansuran }}</td>
                                            <td>{{ $du->tgl_bayar }}</td>
                                            <td>{{ $du->jml }}</td>
                                            <td>
                                            <a class="badge bg-warning  border-0 p-2 d-inline" href="/transaksidu/{{ $du->nis }}/edit" >Update</a>
                                            <form action="/transaksidu/{{ $du->bulan }}" method="post" class="d-inline">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>


