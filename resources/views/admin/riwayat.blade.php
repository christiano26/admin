@extends('admin.index')
@section('title', 'Riwayat')
@section('content-title', 'Riwayat')

@section('konten')

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel pengembalian</h6>
            </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">jurusan</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">No Telp</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>christiano juan rafael</td>
                        <td>RPL</td>
                        <td>12</td>
                        <td>081336031560</td>
                        <td>23-01-2023</td>
                        <td>Sudah Dikembalikan</td>
                        <td><button class="btn btn-sm btn-warning">Edit</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Triaji Pangestu Luhur</td>
                        <td>RPL</td>
                        <td>12</td>
                        <td>081336031560</td>
                        <td>23-01-2023</td>
                        <td>Sudah Dikembalikan</td>
                        <td><button class="btn btn-sm btn-warning">Edit</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
</div>
@endsection