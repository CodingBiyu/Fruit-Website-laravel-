<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
</head>
<body>
    @include('layouts.adminheader')

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4 text-dark">Upload New Fruit Gig</h2>
                <form action="{{ route('add.fruit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="photo" class="form-label ">Upload File</label>
                        <input type="file" name="photo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="item" class="form-label ">Item</label>
                        <input type="text" name="item" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="text" name="quantity" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label ">Price</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <div class="d-grid gap-2">
                        <input type="submit" class="btn  btn-block" value="Upload" style="background-color: #4db05f">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <section id="popular-product">
        @if(session('status'))
            <div class="alert alert-success  " style="background-color: #4eb060;">
                {{ session('status') }}
            </div>
        @endif
        <div class="product-heading">
            <h3>Popular Product</h3>
            <span>All</span>
        </div>
        <div class="product-container">
        
            @foreach($fruits as $fruit)
                @if($fruit)
        <div class="product-box">
            <img src="{{ asset('storage/'.$fruit->file_name) }}" alt="" />
            <strong>{{ $fruit->item }}</strong>
            <span class="quantity">{{ $fruit->quantity }}</span>
            <span class="price">{{ $fruit->price }}</span>
            <form action="{{ route('delete.fruit', $fruit->id) }}" method="post">
                @csrf
                @method('delete')
               <button type="submit" class="cart-btn">Delete</button>
               </form>
                <a href="{{ route('edit.fruit', $fruit->id) }}" class="cart-btn">Update</a>
             </div>  
        @endif
        @endforeach
    </div>
    </section>
    @include('layouts.footer')      

</body>
</html>
