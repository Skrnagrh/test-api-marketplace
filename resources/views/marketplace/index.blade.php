<!DOCTYPE html>
<html>

<head>
    <title>Marketplace Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Cari Produk Marketplace</h1>

        <form method="GET" action="{{ route('marketplace.search') }}" class="input-group mb-4">
            <input type="text" name="q" class="form-control" placeholder="Cari produk..." value="{{ $query ?? '' }}">
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>

        @isset($products)
            <h2 class="mb-4">Hasil Pencarian:</h2>

            @if (count($products) > 0)
                <div class="row row-cols-2 row-cols-md-4 g-4">
                    @foreach ($products as $product)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ $product['thumbnail'] ?? $product['images'][0] ?? 'https://via.placeholder.com/150' }}" class="card-img-top" alt="{{ $product['title'] }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product['title'] }}</h5>
                                    <p class="card-text mb-1"><strong>Harga:</strong> ${{ $product['price'] }}</p>
                                    <p class="card-text mb-1"><strong>Kategori:</strong> {{ $product['category'] }}</p>
                                    <p class="card-text"><strong>Rating:</strong> {{ $product['rating'] }} / 5</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-warning" role="alert">
                    Produk tidak ditemukan.
                </div>
            @endif
        @endisset
    </div>
</body>

</html>
