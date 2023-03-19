<x-backend.layouts.master>
    <x-slot:title>
               topic Page
            </x-slot>
            <a href="{{ route('topic.index') }}">list</a>
            <div class="container mt-5">
                <div class="row justifay-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header"><h3>Create a topic</h3></div>
                            <div class="card-body">
                                <!-- <form action="./index.php" method="" > -->
                                <form  action="{{ route('topic.store') }}"  method="POST"  >

                                    @csrf
                                    <div class="mb-3">
                                        <label for="forum_id">Forum Title:</label>
                                        <select name="forum_id" class="form-select" id="forum_id" aria-label="Default select example">
                                            <option disabled selected>Select Forum</option>
                                            @foreach ($forums as $forum )
                                            <option value="{{ $forum->id }}">{{ $forum->title }}</option>
                                            @endforeach
                                          </select>
                                          @error('forum_id')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                          @enderror
                                    
                                    
                                    </div>
                                    <div class="mb-3">
                                        <label for="title">Topic Title:</label>
                                    <input type="text" class="form-control" name="title" id="title">
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="description">Topic Description:</label>
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