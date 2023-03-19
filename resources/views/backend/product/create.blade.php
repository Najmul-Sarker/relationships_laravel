<x-backend.layouts.master>
    <x-slot:title>
               Product Page
            </x-slot>
            <a href="{{ route('product.index') }}">list</a>
            <div class="container mt-5">
                <div class="row justifay-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header"><h3>Create a Product</h3></div>
                            <div class="card-body">
                                
                                <form  action="{{ route('product.store') }}"  method="POST" enctype="multipart/form-data" >

                                    @csrf
                                    <div class="mb-3">Select Category:</div>
                                    <select name="category_id" id="category_id" class="form-select">
                                        <option selected disabled>Select Category</option>
                                        @foreach ($categories as $category )
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            
                                        @endforeach
                                    </select>
                                    <div class="mb-3">
                                        <label for="title">Product Title:</label>
                                    <input type="text" class="form-control" name="title" id="title">
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="description">Description:</label>
                                        <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror 
                                    </div>
                                    <div class="mb-3">
                                        <label for="image">Image</label>
                                    <input type="file" class="form-control" name="image" id="image">
                                    @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror 
                                    </div>
                                    <div class="mb-3">
                                        <label for="price">Price</label>
                                    <input type="number" class="form-control" name="price" id="price">
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" class="form-control btn btn-primary" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
  </x-backend.layouts.master>