<x-backend.layouts.master>
    <x-slot:title>
               comment Page
            </x-slot>
            <a href="{{ route('comment.index') }}">list</a>
            <div class="container mt-5">
                <div class="row justifay-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header"><h3>Create a comment</h3></div>
                            <div class="card-body">
                                <!-- <form action="./index.php" method="" > -->
                                <form  action="{{ route('comment.store') }}"  method="POST"  >

                                    @csrf
                                    <div class="mb-3">
                                        <label for="post_id">post Title:</label>
                                        <select name="post_id" class="form-select" id="post_id" aria-label="Default select example">
                                            <option disabled selected>Select post</option>
                                            @foreach ($posts as $post )
                                            <option value="{{ $post->id }}">{{ $post->id }}</option>
                                            @endforeach
                                          </select>
                                          @error('post_id')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                          @enderror
                                    
                                    
                                    </div>
                                    
                                    
                                    <div class="mb-3">
                                        <label for="description">comment Description:</label>
                                        <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror 
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