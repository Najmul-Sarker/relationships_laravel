<x-backend.layouts.master>

   
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <x-backend.layouts.partials.elements.primary/>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Warning Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <x-backend.layouts.partials.elements.success/>
                </div>
                <div class="col-xl-3 col-md-6">
                    <x-backend.layouts.partials.elements.danger/>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <x-backend.layouts.partials.elements.area-chart/>
                </div>
                <div class="col-xl-6">
                    <x-backend.layouts.partials.elements.bar-chart/>
                </div>
            </div>

    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('ui/backend/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{ asset('ui/backend/assets/demo/chart-bar-demo.js')}}"></script>
          
    @endpush

</x-backend.layouts.master>
