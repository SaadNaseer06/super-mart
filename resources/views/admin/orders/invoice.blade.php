<div>
    <h2>Name</h2>
    <p>{{ $order->firstname }}</p>
</div>
<div>
    <h2>Address</h2>
    <p>{{ $order->address }}</p>
</div>
<div>
    <h2>City, State ZIP Code</h2>
    <p>{{ $order->state }}</p>
</div>
<div>
    <h2>Telephone</h2>
    <p>{{ $order->contact }}</p>
</div>
<div>
    @foreach ($order->products as $item)
        <h2>Name</h2>
        <p>{{ $item->product->name }}</p>
        <h2>Image</h2>
        <img src="{{ public_path('products/' . $item->product->image) }}" alt="" style="height: 60px;">
        <h2>Quantity</h2>
        <p>{{ $item->quantity }}</p>
    @endforeach
    <div>
        <h2>Total</h2>
        <p>{{ $total }}</p>
    </div>
</div>