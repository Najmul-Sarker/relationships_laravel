<x-backend.layouts.master>
    <x-slot:title>
      topic Page
   </x-slot>
   <a href="{{ route('topic.index') }}">list</a>
   <div class="container mt-5">
       <div class="row justifay-content-center">
           <div class="col-lg-6">
               <div class="card">
                <div class="card-header">topic Details</div>
                   <div class="card-body">
                    <div>
                      <label for=""><h5>topic Title:</h5></label>
                      <p>{{ $topic->title }}</p>
                    </div>
                    <div>
                      <label for=""><h5>topic Description:</h5></label>
                      <p>{{$topic->description}}</p>
                    </div>
                      
                       
                   </div>
               </div>
               
           </div>
       </div>
   </div>
  </x-backend.layouts.master>