<x-backend.layouts.master>
    <x-slot:title>
      post Page
   </x-slot>
   <a href="{{ route('post.index') }}">list</a>
   <div class="container mt-5">
       <div class="row justifay-content-center">
           <div class="col-lg-6">
               <div class="card">
                <div class="card-header">post Details</div>
                   <div class="card-body">
                    
                    <div>
                      <label for=""><h5>post Description:</h5></label>
                      <p>{{$post->description}}</p>
                    </div>
                      
                       
                   </div>
               </div>
               
           </div>
       </div>
   </div>
  </x-backend.layouts.master>