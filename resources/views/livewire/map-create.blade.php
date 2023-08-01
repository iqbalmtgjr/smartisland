<div>
    <div class="card  mb-2">
        <div class="card-body">
            <form wire:submit.prevent='store'>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 ms-auto">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama Lokasi</label>
                                <input wire:model='nama_lokasi' type="text" class="form-control" name=""
                                    value="" placeholder="Masukkan nama lokasi.">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Geojson</label>
                                <textarea wire:model="geojson" placeholder="Masukkan data geojson." class="form-control" name="" id=""
                                    cols="30" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Deskripsi</label>
                                <textarea wire:model="deskripsi" placeholder="Masukkan data geojson." class="form-control" name="" id=""
                                    cols="30" rows="5"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
