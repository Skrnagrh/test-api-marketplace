<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MarketplaceController extends Controller
{
    public function index()
    {
        return view('marketplace.index');
    }

    // Api Marketplace kalo sudah daftar lewat rapidapi.com
    // Ini API berbayar jadi tidak digunakan
    // public function search(Request $request)
    // {
    //     $query = $request->input('q');

    //     $response = Http::withHeaders([
    //         'X-RapidAPI-Key' => 'e2d9d2065bmshac9b4e281021e32p16254ajsn1c649ce50c58', // <-- pakai yang ini
    //         'X-RapidAPI-Host' => 'shopee-e-commerce-data.p.rapidapi.com', // sesuaikan host API kamu
    //     ])->get('https://shopee-e-commerce-data.p.rapidapi.com/item_search', [
    //         'query' => $query,
    //     ]);
    //     dd($response->json());

    //     $products = $response->json()['items'] ?? [];

    //     return view('marketplace.index', compact('products', 'query'));
    // }

    // Ini API gratis dari dummyjson.com
    public function search(Request $request)
    {
        // Mengambil input dari form pencarian dengan nama 'q'
        $query = $request->input('q');

        // Mengirim request HTTP GET ke API dummyjson.com untuk mencari produk berdasarkan query
        $response = Http::get("https://dummyjson.com/products/search", [
            'q' => $query // parameter pencarian yang dikirim ke API
        ]);

        // Mengambil data produk dari response JSON
        // Jika key 'products' tidak ada, fallback ke array kosong agar tidak error
        $products = $response->json()['products'] ?? [];

        // Menampilkan view 'marketplace.index' dengan data produk dan query pencarian
        return view('marketplace.index', compact('products', 'query'));
    }

    // https://fakestoreapi.com/products (Untuk melihat data JSON di web browser)

}

