@include('layout.app')
            <div class="content">
            <h2 class="text-center">Data Pembayaran Listrik</h2>
            <div class="container-fluid content">
                            <div class="card-body p-0 table-responsive">
                            <table class="table table-striped table-hover mb-0">
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
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
    window.print();
    </script>
            </div>
        </div>


