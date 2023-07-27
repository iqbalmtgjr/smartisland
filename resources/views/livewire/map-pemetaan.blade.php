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

        // map.on('click', (e) => {
        //     const longtitude = e.lngLat.lng
        //     const lattitude = e.lngLat.lat

        //     console.log({longtitude, lattitude});
        // })

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

        // var cities = L.layerGroup([littleton, denver, aurora, golden]);
        // var map = L.map('map').setView([0.7690416, 108.687467], 13);
        var map = L.map('map', {
            center: [0.7690416, 108.687467],
            zoom: 13,
            layers: [peta2]
        });

        peta2.addTo(map);
        
        var baseMaps = {
            // "<span style='color: red'>My Layer</span>": peta1,
            // "<p>Grayscale</p>": peta1,
            // "<p>Satellite</p>": peta2,
            // "<p>Streets</p>": peta3,
            // "<p>Dark</p>": peta4
            "Grayscale": peta1,
            "Satellite": peta2,
            "Streets": peta3,
            "Dark": peta4
        };

        // var overlayMaps = {
        //     "Cities": cities
        // };

        L.control.layers(baseMaps).addTo(map);

        var marker = L.marker([0.7689279335312733, 108.70722883110494]).addTo(map);

        marker.bindPopup("<b>Pri oi!</b><br>Tuk dh muncol titik e wkwkwk.").openPopup();
    </script>
@endpush
