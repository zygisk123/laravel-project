<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoe;
use App\Models\Size;
use App\Models\Brand;
use App\Models\User;

class ORMController extends Controller
{
    public function ormRel ()
    {
        // return brand HasOne
        // $shoe = Shoe::find(10);
        // return $shoe->getBrand;

        // return users shoe
        // $user = User::find(2);
        // return $user->shoe;

        // return user
        // $shoe = Shoe::find(11);
        // return $shoe->getUser;

        //return all shoes with same brand
        // $brand = Brand::find(2);
        // return $brand->shoes;

        // return brand belongTo
        // $shoe = Shoe::find(10);
        // return $shoe->brand;

        // return user through Shoe class
        // $brand = Brand::find(1);
        // return $brand->user;

        //return all sizes for specific shoe
        // $shoe= Shoe::find(12);
        // return $shoe->sizes;

        //return all shoes that have same size
        // $size= Size::find(1);
        // return $size->shoes;
    }
}
