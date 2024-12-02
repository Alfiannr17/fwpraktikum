<?php

namespace App\Exports;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProductsPdfExport implements FromView
{
    public function view(): View
    {
        return view('exports.products-pdf', [
            'products' => Product::all() // Mengambil semua data produk
        ]);
    }
}

