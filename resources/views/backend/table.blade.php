<x-backend.layouts.master>
    <div class="card mb-4">
        <div class="card-header">
            <a href="" class="btn btn-primary">create</a>
            <x-slot:title>
                User List
            </x-slot>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Ser</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
               
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Tiger Nixon</td>
                        <td>System Architect Lorem ipsum dolor sit amet.</td>
                        <td>
                            <a href="" class="btn btn-info">view</a>
                            <a href="" class="btn btn-warning">edit</a>
                            <a href="" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
    {{-- @push('css')

    <style>
        .card{
            background-color: rgb(164, 178, 216);
        }
    </style>
        
    @endpush --}}

    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('ui/backend/js/datatables-simple-demo.js')}}"></script>  
    @endpush
</x-backend.layouts.master>
