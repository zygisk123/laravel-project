<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Shoe;

class ShoeController extends Controller
{
    function showAll()
    {
        $data = Shoe::all();
        echo $data;
        
        return view('all', compact('data'));
    }

    function addShoe(Request $req)
    {
        $shoe = new Shoe;
        $shoe->name = $req->shoesName;
        $shoe->price = $req->shoesPrice;
        $shoe->brand = $req->shoesBrand;
        $shoe->save();

        return redirect('all');
    }

    function showShoe(Request $req)
    {
        $currentUrl = $req->url();
        $shoeId = $req->route('id');
        $shoe = Shoe::find($shoeId);
        if (Str::contains($currentUrl, 'show')) {
            return view('show', compact('shoe'));
        } else {
            return view('edit', compact('shoe'));
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
        $shoe->brand = $req->shoesBrand;
        $shoe->save();
        return redirect('all');
    }
}
