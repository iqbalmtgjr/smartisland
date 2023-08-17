<div>
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
                    <div>
                        <div class="row ml-1">
                            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambah">+
                                Tambah Data Gis</button>
                        </div>
                        <div class="row">
                            <div class="col">
                                <select wire:model="paginate" name="" id=""
                                    class="form-control form-control-sm sm w-auto">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="text" wire:model="search"
                                    class="form-control form-control-sm w-auto float-right" placeholder="Cari">
                            </div>
                        </div>
                        <hr>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Nama Lokasi</th>
                                    {{-- <th>Geojson</th> --}}
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($locations as $index => $item)
                                    <tr>
                                        <td>{{ $locations->firstItem() + $index }}</td>
                                        <td>
                                            @if ($item->gambar->isNotEmpty())
                                                {{-- <button data-toggle="modal" data-target="#gambar"
                                            wire:click="gambar({{ $item->id }})"> --}}
                                                <img width="150" class="img-thumbnail"
                                                    src="/storage/gambar/{{ $item->gambar->first()->nama_gambar }}"
                                                    alt="gambar" loading="lazy">
                                                {{-- </button> --}}
                                            @else
                                                Belum Ada Gambar
                                            @endif
                                        </td>
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
                        <div class="d-flex">
                            {{ $locations->links() }}
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
        @include('admin/kelolamaps/modalgambar')
    </div>
