<div wire:ignore.self class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="tambah"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Lokasi</h5>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 ms-auto">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nama Lokasi</label>
                                    <input wire:model="nama_lokasi" type="text"
                                        class="form-control @error('nama_lokasi') is-invalid @enderror" name=""
                                        placeholder="Masukkan nama lokasi.">
                                    @error('nama_lokasi')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Geojson</label>
                                    <textarea wire:model="geojson" placeholder="Masukkan data geojson."
                                        class="form-control @error('geojson') is-invalid @enderror" name="" id="" cols="30"
                                        rows="5"></textarea>
                                    @error('geojson')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Deskripsi</label>
                                    <textarea wire:model="deskripsi" placeholder="Masukkan data geojson."
                                        class="form-control @error('deskripsi') is-invalid @enderror" name="" id="" cols="30"
                                        rows="5"></textarea>
                                    @error('deskripsi')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- </div> --}}
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
