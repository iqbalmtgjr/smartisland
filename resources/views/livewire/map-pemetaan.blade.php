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
            <div class="row justify-content-center">
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
            // const defaultLocation = [108.7096218906035, 0.7652611408009449]
            const defaultLocation = [106.69896789971403, -6.359163593785212]

            mapboxgl.accessToken = "{{ config('app.mapkey') }}";
            var map = new mapboxgl.Map({
                container: 'map',
                center: defaultLocation,
                zoom: 11,
                // zoom: 12,
            });

            map.on('click', (e) => {
                const longitude = e.lngLat.lng
                const lattitude = e.lngLat.lat

                @this.long = longitude
                @this.lat = lattitude
            })

            const geoJson = {
                "type": "FeatureCollection",
                "features": [{
                        "type": "Feature",
                        "geometry": {
                            "coordinates": [
                                "106.73830754205",
                                "-6.2922403995615"
                            ],
                            "type": "Point"
                        },
                        "properties": {
                            "message": "Mantap",
                            "iconSize": [
                                50,
                                50
                            ],
                            "locationId": 30,
                            "title": "Hello new",
                            "image": "1a1eb1e4106fff0cc3467873f0f39cab.jpeg",
                            "description": "Mantap"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "coordinates": [
                                "106.68681595869",
                                "-6.3292244652013"
                            ],
                            "type": "Point"
                        },
                        "properties": {
                            "message": "oke mantap Edit",
                            "iconSize": [
                                50,
                                50
                            ],
                            "locationId": 29,
                            "title": "Rumah saya Edit",
                            "image": "0ea59991df2cb96b4df6e32307ea20ff.png",
                            "description": "oke mantap Edit"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "coordinates": [
                                "106.62490035406",
                                "-6.3266855038639"
                            ],
                            "type": "Point"
                        },
                        "properties": {
                            "message": "Update Baru",
                            "iconSize": [
                                50,
                                50
                            ],
                            "locationId": 22,
                            "title": "Update Baru Gambar",
                            "image": "d09444b68d8b72daa324f97c999c2301.jpeg",
                            "description": "Update Baru"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "coordinates": [
                                "106.72391468711",
                                "-6.3934163494543"
                            ],
                            "type": "Point"
                        },
                        "properties": {
                            "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                            "iconSize": [
                                50,
                                50
                            ],
                            "locationId": 19,
                            "title": "awdwad",
                            "image": "f0b88ffd980a764b9fca60d853b300ff.png",
                            "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "coordinates": [
                                "106.67224158205",
                                "-6.3884963990263"
                            ],
                            "type": "Point"
                        },
                        "properties": {
                            "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                            "iconSize": [
                                50,
                                50
                            ],
                            "locationId": 18,
                            "title": "adwawd",
                            "image": "4c35cb1b76af09e6205f94024e093fe6.jpeg",
                            "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "coordinates": [
                                "106.74495523289",
                                "-6.3642034511073"
                            ],
                            "type": "Point"
                        },
                        "properties": {
                            "message": "awdwad",
                            "iconSize": [
                                50,
                                50
                            ],
                            "locationId": 12,
                            "title": "adawd",
                            "image": "7c8c949fd0499eb50cb33787d680778c.jpeg",
                            "description": "awdwad"
                        }
                    }
                ]
            }

            const loadLocations = () => {
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

                    new mapboxgl.Marker(markerElement)
                        .setLngLat(geometry.coordinates)
                        .addTo(map)
                });
            }
            loadLocations()

            const style = "satellite-v9"
            // version style : streets-v12, dark-v10, outdoors-v12, satellite-v9, light-v10
            map.setStyle(`mapbox://styles/mapbox/${style}`)

            map.addControl(new mapboxgl.NavigationControl())
        });



        // Leaflet Js
        // var peta1 = L.tileLayer(
        //     'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiaXFiYWxtdGdqciIsImEiOiJjbGtqd3EzN2IwdHd0M2ttanZtazc0ejByIn0.T68Hj4RztNTWBTq-nusaog', {
        //         attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        //             '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        //             'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        //         id: 'mapbox/streets-v11'
        //     });

        // var peta2 = L.tileLayer(
        //     'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiaXFiYWxtdGdqciIsImEiOiJjbGtqd3EzN2IwdHd0M2ttanZtazc0ejByIn0.T68Hj4RztNTWBTq-nusaog', {
        //         attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        //             '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        //             'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        //         id: 'mapbox/satellite-v9'
        //     });


        // var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        // });

        // var peta4 = L.tileLayer(
        //     'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiaXFiYWxtdGdqciIsImEiOiJjbGtqd3EzN2IwdHd0M2ttanZtazc0ejByIn0.T68Hj4RztNTWBTq-nusaog', {
        //         attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        //             '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        //             'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        //         id: 'mapbox/dark-v10'
        //     });

        // @foreach ($locations as $datas)
        //     var data{{ $datas->id }} = L.layerGroup();
        // @endforeach

        // var lokasi = L.layerGroup();

        // var map = L.map('map', {
        //     center: [0.7690416, 108.687467],
        //     zoom: 13,
        //     layers: [peta2,
        //         @foreach ($locations as $datas)
        //             data{{ $datas->id }},
        //         @endforeach
        //     ]
        // });



        // var baseMaps = {
        //     "Grayscale": peta1,
        //     "Satellite": peta2,
        //     "Streets": peta3,
        //     "Dark": peta4
        // };

        // var overlayer = {
        //     @foreach ($locations as $datas)
        //         "{{ $datas->nama_lokasi }}": data{{ $datas->id }},
        //     @endforeach
        // };

        // L.control.layers(baseMaps, overlayer).addTo(map);

        // @foreach ($locations as $datas)
        //     L.geoJSON(<?= $datas->geojson ?>).addTo(data{{ $datas->id }}).bindPopup(
        //         'Ini {{ $datas->nama_lokasi }}');
        // @endforeach
    </script>
@endpush
