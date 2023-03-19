<x-backend.layouts.master>
  <x-slot:title>
    Category Page
 </x-slot>
 <a href="{{ route('category.index') }}">list</a>
 <div class="container mt-5">
     <div class="row justifay-content-center">
         <div class="col-lg-6">
             <div class="card">
              <div class="card-header">Category Details</div>
                 <div class="card-body">
                  <div>
                    <label for=""><h5>Category Title:</h5></label>
                    <p>{{ $category->title }}</p>
                  </div>
                  <div>
                    <label for=""><h5>Category Description:</h5></label>
                    <p>{{$category->description}}</p>
                  </div>
                    
                     
                 </div>
             </div>
             
         </div>
     </div>
 </div>
</x-backend.layouts.master>