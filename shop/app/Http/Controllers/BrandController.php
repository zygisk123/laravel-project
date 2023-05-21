<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    function getAllBrands(Request $req)
    {
        $brands = Brand::all();
        $currentUrl = $req->url();
        if (Str::contains($currentUrl, 'add')) {
            return view('add', compact('brands'));
        } else {
            return view('edit', compact('brands'));
        }
    }
}
