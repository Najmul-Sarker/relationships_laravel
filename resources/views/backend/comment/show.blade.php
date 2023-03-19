<x-backend.layouts.master>
    <x-slot:title>
      comment Page
   </x-slot>
   <a href="{{ route('comment.index') }}">list</a>
   <div class="container mt-5">
       <div class="row justifay-content-center">
           <div class="col-lg-6">
               <div class="card">
                <div class="card-header">comment Details</div>
                   <div class="card-body">
                    
                    <div>
                      <label for=""><h5>comment Description:</h5></label>
                      <p>{{$comment->description}}</p>
                    </div>
                      
                       
                   </div>
               </div>
               
           </div>
       </div>
   </div>
  </x-backend.layouts.master>