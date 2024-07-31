<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body>
    <div>
        <div class="container my-5">
             <div class="row">
                <div class="col-md-6 mx-auto d-grip gap-2">
                <form action="{{ url('books')  }}" method="POST">
                        @csrf
                        <div class="form-group mb 3">
                        <label class="form-label">Title</label>
                        <input type="text" name = "title" class="form-control">
                        </div>
                        @error ('title')
                        <div>{{$message}}</div>
                        @enderror
                        <div class="form-group mb 3">
                        <label class="form-label">Author</label>
                        <input type="text" name = "author" class="form-control">
                        </div>
                        @error ('author')
                        <div>{{$message}}</div>
                        @enderror
                        <div class="form-group mb 3">
                        <label class="form-label">Description</label>
                        <input type="text" name = "description" class="form-control">
                        </div>
                        @error ('description')
                        <div>{{$message}}</div>
                        @enderror
                        <div class="form-group mb 3">
                        <label class="form-label">ISBN</label>
                        <input type="text" name = "isbn" class="form-control">
                        </div>
                        @error ('isbn')
                        <div>{{$message}}</div>
                        @enderror
                        <div class="form-group mb 3">
                        <label class="form-label">Published Year</label>
                        <input type="date" name = "published_year" class="form-control">
                        </div>
                        @error ('published_year')
                        <div>{{$message}}</div>
                        @enderror
                        <div class="form-group mt-3 mb-3">
                            <button class="btn btn-success">Save Changes</button>
                        </div>
                        @if (session('success'))
                            <div>{{ session('success') }}</div>
                        @endif 
                    </form>
                </div>
             </div>
        </div>
    </div>

    
</body>
</html>