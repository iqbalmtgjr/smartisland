<div>
    @livewire('map-create')
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card m-b-30">
                <div class="card-body table-responsive">
                    {{-- @include('admin/kelolamaps/modaltambah') --}}
                    <button class="btn btn-primary mb-2 float-right" data-toggle="modal" data-target="#tambah">+
                        Tambah Data Gis</button>
                    <h5 class="header-title">Data GIS Livewire</h5>
                    <div class="">
                        <table wire:ignore id="datatable2" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lokasi</th>
                                    <th>Geojson</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_lokasi }}</td>
                                        <td>{{ $item->geojson }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>
                                            <button class="btn btn-success">Edit</button>
                                            <button class="btn btn-danger">Hapus</button>
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
