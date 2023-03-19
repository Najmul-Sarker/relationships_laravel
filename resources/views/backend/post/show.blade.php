<x-backend.layouts.master>
    <x-slot:title>
      Forum Page
   </x-slot>
   <a href="{{ route('forum.index') }}">list</a>
   <div class="container mt-5">
       <div class="row justifay-content-center">
           <div class="col-lg-6">
               <div class="card">
                <div class="card-header">Forum Details</div>
                   <div class="card-body">
                    <div>
                      <label for=""><h5>Forum Title:</h5></label>
                      <p>{{ $forum->title }}</p>
                    </div>
                    <div>
                      <label for=""><h5>Forum Description:</h5></label>
                      <p>{{$forum->description}}</p>
                    </div>
                      
                       
                   </div>
               </div>
               
           </div>
       </div>
   </div>
  </x-backend.layouts.master>