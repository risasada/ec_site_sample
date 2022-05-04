<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        return view('home');
    }
    
    
    
    
    
    


    public function store(request $request)
    {
        $data = $request->all();
        //dd($data);
        //$request->validate([
            //'img_url1' => 'required|file|image|mimes:png,jpeg'
        //]);
        $upload_image1 = $request->file('img1');
        $path1 = $upload_image1->store('uploads', "public");
        $upload_image2 = $request->file('img1');
        $path2 = $upload_image2->store('uploads', "public");
        $upload_image3 = $request->file('img1');
        $path3 = $upload_image3->store('uploads', "public");
        $upload_image4 = $request->file('img1');
        $path4 = $upload_image4->store('uploads', "public");
        Items::create(['name' => $data['name'],
            'price' => $data['price(not_including_tax)'],
            'gender' => $data['gender'],
            'categories' => $data['categories'],
            'designers' => $data['designers'],
            'made_in' => $data['made_in'],
            'material' => $data['material'],
            'XS' => $data['xs'],
            'S' => $data['s'],
            'M' => $data['m'],
            'L' => $data['l'],
            'LL' => $data['ll'],
            'img_url1' => $path1,
            'img_url2' => $path2,
            'img_url3' => $path3,
            'img_url4' => $path4
        ]);
        return redirect()->route('manage');
        
    }

   

    
}
