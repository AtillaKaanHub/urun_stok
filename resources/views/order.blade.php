<div style="padding:40px; color:white;">
    <h2>Sipariş Detayı</h2>

    <p><strong>Kod:</strong> {{ $order->order_code }}</p>
    <p><strong>Durum:</strong> {{ $order->status }}</p>
    <p><strong>Toplam:</strong> {{ $order->total_price }} TL</p>

    <h4>Ürünler:</h4>

    <ul>
        @foreach(json_decode($order->items) as $item)
            <li>
                {{ $item->name }} - {{ $item->qty }} adet
            </li>
        @endforeach
    </ul>
</div>