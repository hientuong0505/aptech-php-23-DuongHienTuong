<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>CKeditor</title>
</head>
<body>
    <form action="{{route('articles.store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            {{--  <label for="title">Title:</label>
            <input type="text" id="title" name="title">  --}}

            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><label for="title">Title:</label></span>
                </div>
                <textarea class="form-control" aria-label="With textarea" type="text" id="title" name="title"></textarea>
            </div>
        </div>

        <div class="mt-5 mb-5">
            {{--  <label for="description">Description:</label>
            <textarea rows="5" cols="50" id="description" name="description"></textarea>  --}}

            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><label for="description">Description</label></span>
                </div>
                <textarea class="form-control" aria-label="With textarea" type="text"rows="5" cols="50" id="description" name="description"></textarea>
            </div>
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea rows="50" cols="50" id="content" name="content"></textarea>
        </div>

        <div>
            <label for="categories">Categories:</label>
            <select name="category" id="categories">
                @foreach($categories as $category)
                <option value="{{$category}}">{{$category}}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-outline-info" type="submit">Submit</button>
    </form>

    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>
</html>