<x-backend.layouts.master>
    <x-slot:title>
               topic Page
            </x-slot>
            <a href="{{ route('topic.index') }}">list</a>
            <div class="container mt-5">
                <div class="row justifay-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header"><h3>Edit your topic</h3></div>
                            <div class="card-body">
                                <!-- <form action="./index.php" method="" > -->
                                <form  action="{{ route('topic.update',$topic->id) }}"  method="POST"  >

                                    @csrf
                                    <div class="mb-3">
                                        <label for="forum_id">topic Title:</label>
                                        <select name="forum_id" id="forum_id" class="form-select">
                                            <option selected disabled>Select Topic</option>
                                            @foreach ($forums as $forum )
                                            <option value="{{ $forum->id }}"
                                                
                                             {{ $topic->forum_id == $forum->id ? 'selected': '' }}   >{{ $forum->title }}</option>
                                                
                                            @endforeach
                                        </select>
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                    </div>
                                    <div class="mb-3">
                                        <label for="title">topic Title:</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{ $topic->title }}">
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="description">topic Description:</label>
                                        <textarea name="description" id="description" class="form-control" rows="5">{{ $topic->description }}</textarea>
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