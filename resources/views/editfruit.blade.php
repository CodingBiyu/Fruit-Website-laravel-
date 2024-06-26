@include('layouts.adminheader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Fruit Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      
        body::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5); 
            pointer-events: none; 
            z-index: -1; 
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4 text-dark" style="margin-left: 38px;">Edit Fruit Item</h2>
                <form action="{{ route('update.fruit', $fruit->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        @if($fruit->file_name)
                            <img src="{{ asset('storage/'.$fruit->file_name) }}" alt="Current Image" style="max-width: 300px; max-height: 300px;margin-left: 170px;">
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="delete_image" name="delete_image">
                                <label class="form-check-label" for="delete_image">
                                    Delete Current Image
                                </label>
                            </div>
                        @endif
                        <input type="file" name="photo" class="form-control mt-2">
                    </div>
                    <div class="mb-3">
                        <label for="item" class="form-label text-dark">Update Item</label>
                        <input type="text" name="item" class="form-control" value="{{ $fruit->item }}">
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label text-dark">Update Quantity</label>
                        <input type="text" name="quantity" class="form-control" value="{{ $fruit->quantity }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label text-dark">Update Price</label>
                        <input type="text" name="price" class="form-control" value="{{ $fruit->price }}">
                    </div>
                    <div class="d-grid gap-2">
                        <input type="submit" class="btn  btn-block" style="background-color:  #4db05f" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>
