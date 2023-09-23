<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section {
            margin: 3em auto;
            max-width: 48rem;
            background-color: rgb(43, 44, 45);
            padding: 2rem;
            border-radius: 0.3rem;
            height: 24rem;

            display: grid;
            grid-template-columns: repeat(4, auto);
            gap: 2rem 1rem;
            justify-content: space-between;
            align-content: space-around;
        }

        img {
            width: 4.4rem;
            border-radius: 0.3rem;
        }

        h3 {
            color: rgb(179, 234, 243);
            margin: 0 auto;
        }

        p {
            font-size: 0.8rem;
            color: white;
            margin: 0 auto;
        }

        span {
            color: #999;
            font-size: 0.8rem;
        }

        .price {
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
        }

        .desc {

            font-size: 15px;
            margin: 0 auto;


        }

        .quan {
            color: white;
        }

        .img {
            width: 4.4rem;
            border-radius: 0.3rem;
        }
    </style>
</head>

<body>
    {{-- @foreach($product as $item) --}}
    {{-- @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @dd(session('cart'))
            @endforeach
    @endif --}}
        <section>
            <img src="/products/{{ $product->image }}" alt="">
            <div class="card-body">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <span>#368798</span>
            </div>
            <div class="quan">Quantity:1</div>
            <div class="price">Price: ${{ $product->price }}
            </div>
        </section>
    {{-- @endforeach --}}
</body>

</html>
