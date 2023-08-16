<div>
    {{-- <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 animated slideInDown mb-4">Pemetaan</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Pemetaan</a></li>
                </ol>
            </nav>
        </div>
    </div> --}}
    @push('header')
        <style>
            .marker {
                background-image: url('{{ asset('titik/titikmerah.png') }}');
                background-size: cover;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                cursor: pointer;
            }
        </style>
    @endpush
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 py-2">
                    <div wire:ignore id='map' style='width: 100%; height: 500px;'></div>
                </div>
                <div class="col-lg-5 py-2">
                    <div class="card">
                        <div class="card-header">Informasi</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Longitude</label>
                                        <input wire:model="long" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Lattitude</label>
                                        <input wire:model="lat" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('footer')
    <script>
        // Mapbox //
        document.addEventListener('livewire:load', () => {
            const defaultLocation = [108.7096218906035, 0.7652611408009449]
            // const defaultLocation = [106.69896789971403, -6.359163593785212]

            mapboxgl.accessToken = "{{ config('app.mapkey') }}";
            var map = new mapboxgl.Map({
                container: 'map',
                center: defaultLocation,
                // zoom: 11,
                zoom: 12,
            });

            map.on('click', (e) => {
                const longitude = e.lngLat.lng
                const lattitude = e.lngLat.lat

                @this.long = longitude
                @this.lat = lattitude
            })



            const loadLocations = (geoJson) => {
                geoJson.features.forEach((location) => {
                    const {
                        geometry,
                        properties
                    } = location

                    const {
                        iconSize,
                        locationId,
                        title,
                        image,
                        description
                    } = properties

                    var imageUrl = "url('/titik/titikmerah.png')"
                    let markerElement = document.createElement('div')
                    // markerElement.className = 'marker' + locationId
                    markerElement.className = 'marker'
                    markerElement.id = locationId
                    // markerElement.style.backgroundImage = 'url({{ asset('titik/titikmerah.png') }})'
                    // markerElement.style.backgrounSize = 'cover'
                    // markerElement.style.width = '50px'
                    // markerElement.style.height = '50px'
                    // markerElement.style.borderRadius = '50%'

                    const content = `
                    <div style="overflow-y, auto;max-height:400px,width:100%">
                        <table border=2>
                            <tbody>
                                <tr>
                                    <td>Nama Lokasi</td>
                                    <td>: ${title}</td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>: ${description}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    `

                    const popUp = new mapboxgl.Popup({
                        offset:25
                    }).setHTML(content).setMaxWidth('400px')

                    new mapboxgl.Marker(markerElement)
                        .setLngLat(geometry.coordinates)
                        .setPopup(popUp)
                        .addTo(map)
                });
            }

            loadLocations({!! $geoJson !!})

            const style = "satellite-v9"
            // version style : streets-v12, dark-v10, outdoors-v12, satellite-v9, light-v10
            map.setStyle(`mapbox://styles/mapbox/${style}`)

            map.addControl(new mapboxgl.NavigationControl())
        });
    </script>
@endpush
