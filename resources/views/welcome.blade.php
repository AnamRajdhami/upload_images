<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card mt-3">
                    <div class="card-header">
                        <h5>Upload image</h5>
                    </div>

                    <!-- <img src="{{asset('/storage/images/X58bWjoTgt13Ka0FXTxAxgdtQPfm5jIWtJrmmdov.jpg')}}" alt=""> -->
                    <div class="card-body">
                        <form action="{{route('uploadImages')}}" method="post" enctype="multipart/form-data">
                            @csrf
                           <input type="file" name="image-upload" class="form-control"> 
                           <button class="mt-2 btn btn-primary" type="submit">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
