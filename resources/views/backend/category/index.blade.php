<x-backend.layouts.master>
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ route('category.create') }}" class="btn btn-primary">create</a>
            <x-slot:title>
                Category List
            </x-slot>
        </div>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
            {{session('success')}}
            </div>    
        @endif
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Ser</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
               
                <tbody>
                    @foreach ($categories as $category )
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route('category.show',$category->id) }}">View</a>
                            <a class="btn btn-sm btn-warning" href="{{ route('category.edit',$category->id) }}">Edit</a>
                            <form style="display:inline" action="{{route('category.delete',$category->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button onclick="alert('Are You Sure ! to DELETE this file?')" type="submit" class="btn btn-sm btn-danger">Delete</button>
                                
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                    
                    
                </tbody>
            </table>
        </div>
    </div>
  {{-- <x-slot:title>
                Category List
            </x-slot>
      <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><h2>All Category</h2></div>
                    <div><a class="btn btn-sm btn-success m-1" href="{{ route('category.create') }}">Create</a></div>
                          <div class="card-body">
                                        <table id="datatablesSimple">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Title</th>
                                                            <th>Description</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Men's Watches</td>
                                                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-primary" href="{{ route('category.show') }}">View</a>
                                                                    <a class="btn btn-sm btn-warning" href="{{ route('category.edit') }}">Edit</a>
                                                                    <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>02</td>
                                                                <td>Women's Watches</td>
                                                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-primary" href="">View</a>
                                                                    <a class="btn btn-sm btn-warning" href="">Edit</a>
                                                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>03</td>
                                                                <td>Kid's Watches</td>
                                                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-primary" href="">View</a>
                                                                    <a class="btn btn-sm btn-warning" href="">Edit</a>
                                                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                                                </td>
                                                            </tr>

                                                    </tbody>
                                        </table>
                              </div>
                        </div>
                    </div>
          </div> --}}
          @push('js')
          <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
          <script src="{{ asset('ui/backend/js/datatables-simple-demo.js')}}"></script>  
      @endpush
    </x-backend.layouts.master>