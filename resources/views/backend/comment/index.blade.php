<x-backend.layouts.master>
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ route('comment.create') }}" class="btn btn-primary">create</a>
            <x-slot:title>
                Comment List
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
                        <th>Post Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
               
                <tbody>
                    @foreach ($comments as $comment )
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->post_id }}</td>
                        <td>{{ $comment->description }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route('comment.show',$comment->id) }}">View</a>
                            <a class="btn btn-sm btn-warning" href="{{ route('comment.edit',$comment->id) }}">Edit</a>
                            <form style="display:inline" action="{{route('comment.delete',$comment->id)}}" method="comment">
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