<x-backend.layouts.master>
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ route('product.index') }}" class="btn btn-primary">Product List</a>
            <x-slot:title>
                Trash List
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
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
               
                <tbody>

                    @foreach ($trash as $product )
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->categroy->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td><img src="{{asset('storage/products').'/'.$product->image}}" width="150" height="100" alt="no image"></td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="{{ route('product.restore',$product->id) }}">Restore</a>
                            
                            <form style="display:inline" action="{{ route('product.permanentDelete',$product->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button onclick="alert('Are You Sure ! to DELETE this file Permanently?')" type="submit" class="btn btn-sm btn-danger">Permanently Delete</button>
                                
                            </form>
                        </td>
                    </tr>
                        
                    @endforeach
                      
                </tbody>
            </table>
        </div>
    </div>
  
          @push('js')
          <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
          <script src="{{ asset('ui/backend/js/datatables-simple-demo.js')}}"></script>  
      @endpush
    </x-backend.layouts.master>