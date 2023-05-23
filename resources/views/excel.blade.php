<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 mt-5">
                <div class="p-5 border-2 border-secondary rounded">
                    <h2>User Data</h2>
                    <form action="{{ route('import-user') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="file">Select File</label>
                        <input type="file" name="file" id="" class="form-control">
                        <div class="mt-5">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <a href="{{ route('export-user') }}" class="btn btn-primary float-right">Export</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
