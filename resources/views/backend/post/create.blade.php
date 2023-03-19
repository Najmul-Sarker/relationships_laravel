<x-backend.layouts.master>
    <x-slot:title>
               post Page
            </x-slot>
            <a href="{{ route('post.index') }}">list</a>
            <div class="container mt-5">
                <div class="row justifay-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header"><h3>Create a post</h3></div>
                            <div class="card-body">
                                <!-- <form action="./index.php" method="" > -->
                                <form  action="{{ route('post.store') }}"  method="POST"  >

                                    @csrf
                                    <div class="mb-3">
                                        <label for="topic_id">topic Title:</label>
                                        <select name="topic_id" class="form-select" id="topic_id" aria-label="Default select example">
                                            <option disabled selected>Select topic</option>
                                            @foreach ($topics as $topic )
                                            <option value="{{ $topic->id }}">{{ $topic->title }}</option>
                                            @endforeach
                                          </select>
                                          @error('topic_id')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                          @enderror
                                    
                                    
                                    </div>
                                    
                                    
                                    <div class="mb-3">
                                        <label for="description">post Description:</label>
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