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
                <form action="{{ url('books'), $books->id  }}" method="POST">
                        @csrf
                        <div class="form-group mb 3">
                        <label class="form-label">Title</label>
                        <input type="text" name = "title" class="form-control" value="{{ $books->title }}">
                        </div>
                        <div class="form-group mb 3">
                        <label class="form-label">Author</label>
                        <input type="text" name = "author" class="form-control" value="{{ $books->author }}">
                        </div>
                        <div class="form-group mb 3">
                        <label class="form-label">Description</label>
                        <input type="text" name = "description" class="form-control" value="{{ $books->description }}">
                        </div>
                        <div class="form-group mb 3">
                        <label class="form-label">ISBN</label>
                        <input type="text" name = "isbn" class="form-control" value="{{ $books->isbn }}">
                        </div>
                        <div class="form-group mb 3">
                        <label class="form-label">Published Year</label>
                        <input type="date" name = "published_year" class="form-control" value="{{ $books->published_year }}">
                        </div>

                        <div class="form-group mt-3 mb-3">
                            <button class="btn btn-success">Save Changes</button>
                        </div>

                 </form>
                </div>
             </div>
        </div>
    </div>


</body>
</html>