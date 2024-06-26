@include('layouts.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Fruit</title>
   <style>
       
    </style>
</head>
<body>
    <section id="popular-product">
        @if(session('status'))
            <div class="alert alert-success mt-3">
                {{ session('status') }}
            </div>
        @endif
        <div class="product-heading">
            
            <h2>Buy Popular Products</h2>
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
            <form action="{{ route('purchase.fruit', $fruit->id) }}" method="post">
                @csrf
                @method('delete')
              
                <a class="cart-btn"><i class="fas fa-shopping-bag"></i> Add Cart</a>
            </form>
          
        </div>
        @endif
        @endforeach
    </div>
    </section>
       
    </div>

    @include('layouts.footer')
</body>
</html>

