<x-backend.layouts.master>
  <x-slot:title>
    Product Page
 </x-slot>
 <a href="{{ route('product.index') }}">list</a>
 <div class="container mt-5">
     <div class="row justifay-content-center">
         <div class="col-lg-6">
             <div class="card">
              <div class="card-header">Product Details</div>
                 <div class="card-body">
                  <div>
                    <label for=""><h5>Product Title:</h5></label>
                    <p>{{ $product->title }}</p>
                  </div>
                  <div>
                    <label for=""><h5>Product Description:</h5></label>
                    <p>{{ $product->description }}</p>
                  </div>
                  <div>
                    <label for=""><h5>Product Image:</h5></label>
                    <p><img src="" alt="no image"></p>
                  </div>
                  <div>
                    <label for=""><h5>Product Price:</h5></label>
                    <p>{{ $product->price }}</p>
                  </div>
                    
                     
                 </div>
             </div>
             
         </div>
     </div>
 </div>
</x-backend.layouts.master>