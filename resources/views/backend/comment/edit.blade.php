<x-backend.layouts.master>
    <x-slot:title>
               comment Page
            </x-slot>
            <a href="{{ route('comment.index') }}">list</a>
            <div class="container mt-5">
                <div class="row justifay-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header"><h3>Edit your comment</h3></div>
                            <div class="card-body">
                                <!-- <form action="./index.php" method="" > -->
                                <form  action="{{ route('comment.update',$comment->id) }}"  method="POST"  >

                                    @csrf
                                    <div class="mb-3">
                                        <label for="post_id">comment Title:</label>
                                        <select name="post_id" id="post_id" class="form-select">
                                            <option selected disabled>Select comment</option>
                                            @foreach ($posts as $post )
                                            <option value="{{ $post->id }}"
                                                
                                             {{ $comment->post_id == $post->id ? 'selected': '' }}   >{{ $post->id }}</option>
                                                
                                            @endforeach
                                        </select>
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                    </div>
                                    
                                    
                                    <div class="mb-3">
                                        <label for="description">comment Description:</label>
                                        <textarea name="description" id="description" class="form-control" rows="5">{{ $comment->description }}</textarea>
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