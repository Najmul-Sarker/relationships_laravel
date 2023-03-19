<x-backend.layouts.master>
    <x-slot:title>
               post Page
            </x-slot>
            <a href="{{ route('post.index') }}">list</a>
            <div class="container mt-5">
                <div class="row justifay-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header"><h3>Edit your post</h3></div>
                            <div class="card-body">
                                <!-- <form action="./index.php" method="" > -->
                                <form  action="{{ route('post.update',$post->id) }}"  method="POST"  >

                                    @csrf
                                    <div class="mb-3">
                                        <label for="topic_id">post Title:</label>
                                        <select name="topic_id" id="topic_id" class="form-select">
                                            <option selected disabled>Select post</option>
                                            @foreach ($topics as $topic )
                                            <option value="{{ $topic->id }}"
                                                
                                             {{ $post->topic_id == $topic->id ? 'selected': '' }}   >{{ $topic->title }}</option>
                                                
                                            @endforeach
                                        </select>
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                    </div>
                                    
                                    
                                    <div class="mb-3">
                                        <label for="description">post Description:</label>
                                        <textarea name="description" id="description" class="form-control" rows="5">{{ $post->description }}</textarea>
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror 
                                    </div>
                                    
                                    <div class="mb-3">
                                        <input type="submit" class="form-control btn btn-primary" value="Update">
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
  </x-backend.layouts.master>