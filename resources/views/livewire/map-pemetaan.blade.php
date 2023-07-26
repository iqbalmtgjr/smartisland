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
        <div class="container text-center">
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
        const defaultLocation = [108.7096218906035, 0.7652611408009449]

        mapboxgl.accessToken = "{{ config('app.mapkey') }}";
        const map = new mapboxgl.Map({
            container: 'map',
            center: defaultLocation,
            zoom: 12,
        });

        const style = "satellite-v9"
        // version style : streets-v12, dark-v10, outdoors-v12, satellite-v9, light-v10
        map.setStyle(`mapbox://styles/mapbox/${style}`)

        map.addControl(new mapboxgl.NavigationControl())

        map.on('click', (e) => {
            const longtitude = e.lngLat.lng
            const lattitude = e.lngLat.lat

            console.log({longtitude, lattitude});
        })
    </script>
@endpush
