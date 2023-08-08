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
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    {{-- <h5>Map</h5> --}}
                    <div wire:ignore id='map' style='width: 100%; height: 500px;'></div>
                </div>
                {{-- <div class="col-lg-4">
                    <img src="" alt="">
                </div> --}}
            </div>
        </div>
    </div>
</div>
@push('footer')
    <script>
        // Mapbox //
        // const defaultLocation = [108.7096218906035, 0.7652611408009449]

        // mapboxgl.accessToken = "{{ config('app.mapkey') }}";
        // const map = new mapboxgl.Map({
        //     container: 'map',
        //     center: defaultLocation,
        //     zoom: 12,
        // });

        // const style = "satellite-v9"
        // // version style : streets-v12, dark-v10, outdoors-v12, satellite-v9, light-v10
        // map.setStyle(`mapbox://styles/mapbox/${style}`)

        // map.addControl(new mapboxgl.NavigationControl())

        var peta1 = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiaXFiYWxtdGdqciIsImEiOiJjbGtqd3EzN2IwdHd0M2ttanZtazc0ejByIn0.T68Hj4RztNTWBTq-nusaog', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11'
            });

        var peta2 = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiaXFiYWxtdGdqciIsImEiOiJjbGtqd3EzN2IwdHd0M2ttanZtazc0ejByIn0.T68Hj4RztNTWBTq-nusaog', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/satellite-v9'
            });


        var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });

        var peta4 = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiaXFiYWxtdGdqciIsImEiOiJjbGtqd3EzN2IwdHd0M2ttanZtazc0ejByIn0.T68Hj4RztNTWBTq-nusaog', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/dark-v10'
            });

        @foreach ($locations as $datas)
            var data{{ $datas->id }} = L.layerGroup();
        @endforeach

        var lokasi = L.layerGroup();

        var map = L.map('map', {
            center: [0.7690416, 108.687467],
            zoom: 13,
            layers: [peta2,
                @foreach ($locations as $datas)
                    data{{ $datas->id }},
                @endforeach
            ]
        });



        var baseMaps = {
            "Grayscale": peta1,
            "Satellite": peta2,
            "Streets": peta3,
            "Dark": peta4
        };

        var overlayer = {
            @foreach ($locations as $datas)
                "{{ $datas->nama_lokasi }}": data{{ $datas->id }},
            @endforeach
        };

        L.control.layers(baseMaps, overlayer).addTo(map);

        @foreach ($locations as $datas)
            L.geoJSON(<?= $datas->geojson ?>).addTo(data{{ $datas->id }}).bindPopup(
                'Ini {{ $datas->nama_lokasi }}');
        @endforeach

        // map.on('click', (e) => {
        //     const longtitude = new leaflet.LatLng(loc.latitude, loc.longitude);

        //     console.log({
        //         longtitude,
        //     });
        // })
    </script>
@endpush
