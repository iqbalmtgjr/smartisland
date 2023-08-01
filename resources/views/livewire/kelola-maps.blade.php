<div>
    {{-- @push('header')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    @endpush --}}
    {{-- @livewire('map-create') --}}
    @if (Session::has('sukses'))
        <?php toastr()->success(session('sukses'), 'Sukses'); ?>
    @endif
    @if (Session::has('gagal'))
        <?php toastr()->error(session('gagal'), 'Gagal'); ?>
    @endif
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card m-b-30">
                <div class="card-body table-responsive">
                    <button class="btn btn-primary mb-2 float-right" data-toggle="modal" data-target="#tambah">+
                        Tambah Data Gis</button>
                    {{-- <h5 class="header-title">Data GIS Livewire</h5> --}}
                    <div class="">
                        <table id="datatable2" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lokasi</th>
                                    {{-- <th>Geojson</th> --}}
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_lokasi }}</td>
                                        {{-- <td>{{ $item->geojson }}</td> --}}
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>
                                            <button data-toggle="modal" data-target="#edit"
                                                wire:click="edit({{ $item->id }})"
                                                class="btn btn-success">Edit</button>
                                            <?php $locationId = $item->id; ?>
                                            <button class="btn btn-danger delete"
                                                wire:click="$emit('triggerDelete',<?= $locationId = $item->id ?>)">Hapus</button>
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
    @push('footer')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                @this.on('triggerDelete', locationId => {
                    Swal.fire({
                        title: 'Yakin?',
                        text: "Mau Hapus Data Ini?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya',
                    }).then((result) => {
                        //if user clicks on delete
                        if (result.value) {
                            // calling destroy method to delete
                            @this.call('delete', locationId)
                        }
                    });
                });
            })
        </script>
    @endpush
    @include('admin/kelolamaps/modaltambah')
    @include('admin/kelolamaps/modaledit')
</div>
