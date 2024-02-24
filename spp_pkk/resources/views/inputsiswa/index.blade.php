@include('layout.app')
            <!-- Main content -->
            <div class="content">
                <h2 class="text-center">Data Siswa</h2>
            <div class="container-fluid content">
                
                            <div class="card-body p-0 table-responsive" id="example">
                            <a class="btn btn-primary" href="/inputsiswa/create" >Tambah</a>
                            <table class="table table-striped table-hover mb-0" >
                                <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nis</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Jurusan</th>
                                            <th scope="col">Tahun Masuk</th>
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach( $murids as $murid )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $murid->nis }}</td>
                                            <td>{{ $murid->nama }}</td>
                                            <td>{{ $murid->kls }}</td>
                                            <td>{{ $murid->jurusan }}</td>
                                            <td>{{ $murid->thmasuk }}</td>
                                            <td>
                                            <!-- <a class="badge bg-warning  border-0 p-2 d-inline" href="/inputsiswa/{{ $murid->nis }}/edit" >Update</a> -->
                                            <form action="/inputsiswa/{{ $murid->bulan }}" method="post" class="d-inline">
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


