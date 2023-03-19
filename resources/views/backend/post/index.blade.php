<x-backend.layouts.master>
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ route('post.create') }}" class="btn btn-primary">create</a>
            <x-slot:title>
                post List
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
                        <th>Topic Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
               
                <tbody>
                    @foreach ($posts as $post )
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->topic_id }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route('post.show',$post->id) }}">View</a>
                            <a class="btn btn-sm btn-warning" href="{{ route('post.edit',$post->id) }}">Edit</a>
                            <form style="display:inline" action="{{route('post.delete',$post->id)}}" method="POST">
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
  
          @push('js')
          <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
          <script src="{{ asset('ui/backend/js/datatables-simple-demo.js')}}"></script>  
      @endpush
    </x-backend.layouts.master>