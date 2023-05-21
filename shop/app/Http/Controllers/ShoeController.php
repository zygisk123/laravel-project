<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Shoe;
use App\Models\Brand;

class ShoeController extends Controller
{
    function showAll()
    {
        $data = Shoe::all();
        $brands = array();
        foreach ($data as $shoe) {
            $id = $shoe->id;
            $brand = Shoe::find($id)->getBrand;
            $brands[] = $brand->name;
        }

        return view('all', compact('brands', 'data'));
    }

    function addShoe(Request $req)
    {
        $shoe = new Shoe;
        $shoe->name = $req->shoesName;
        $shoe->price = $req->shoesPrice;
        $shoe->brand_id = $req->shoesBrand;
        $shoe->save();

        return redirect('all');
    }

    function showShoe(Request $req)
    {
        $currentUrl = $req->url();
        $shoeId = $req->route('id');
        $shoe = Shoe::find($shoeId);
        $selectedBrand = $shoe->getBrand;
        if (Str::contains($currentUrl, 'show')) {
            return view('show', compact('shoe', 'selectedBrand'));
        } else {
            $brands = Brand::all();
            return view('edit', compact('shoe', 'selectedBrand', 'brands'));
        }
    }

    function deleteShoe(Request $req)
    {
        $shoeId = $req->input('id');
        echo $shoeId;
        $shoe = Shoe::find($shoeId);
        $shoe->delete();
        return redirect('all');
    }

    function updateShoe(Request $req)
    {
        echo $req->shoesName;
        // die;
        $shoeId = $req->route('id');
        $shoe = Shoe::find($shoeId);
        $shoe->name = $req->shoesName;
        $shoe->price = $req->shoesPrice;
        $shoe->brand_id = $req->shoesBrand;
        $shoe->save();
        return redirect('all');
    }
}
