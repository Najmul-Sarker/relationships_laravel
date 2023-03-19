<x-backend.layouts.master>
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ route('forum.create') }}" class="btn btn-primary">create</a>
            <x-slot:title>
                Forum List
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
                    @foreach ($forums as $forum )
                    <tr>
                        <td>{{ $forum->id }}</td>
                        <td>{{ $forum->title }}</td>
                        <td>{{ $forum->description }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route('forum.show',$forum->id) }}">View</a>
                            <a class="btn btn-sm btn-warning" href="{{ route('forum.edit',$forum->id) }}">Edit</a>
                            <form style="display:inline" action="{{route('forum.delete',$forum->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button onclick="alert('Are You Sure ! to DELETE this file?')" type="submit" class="btn btn-sm btn-danger">Delete</button>
                                
                            </form>
                        </td>
                        
                        
                       
                    </tr>
                    @endforeach
                  
                </tbody>
            </table>
            <br>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                @foreach ($forums as $forum )
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        {{ $forum->title }}
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">{{ $forum->topic->title ?? '' }}</div>
                  </div>
                </div>
                {{-- <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Accordion Item #2
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Accordion Item #3
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                  </div>
                </div> --}}
                @endforeach
            </div>
        </div>
    </div>
  
          @push('js')
          <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
          <script src="{{ asset('ui/backend/js/datatables-simple-demo.js')}}"></script>  
      @endpush
    </x-backend.layouts.master>