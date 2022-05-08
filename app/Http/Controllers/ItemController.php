<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use App\Models\Designer;
use App\Models\Post;
use App\Models\Wish;
use Illuminate\Support\Facades\Auth;


class ItemController extends Controller
{
    //
     public function show_men($gender,$categories = 'none', $designers = 'none')
    {
        if ($categories == 'none' and $designers == 'none'){
            $items =Item::where('gender', $gender)->latest('created_at')->paginate(21);;
        }
        elseif( $designers == 'none' and $categories != 'none'){
            if ($categories == 'ACCESSORIES') {
                $items = Item::where('categories', ["Belts & Suspenders", "Dog Accessories", "Eyewear", "Face Masks", "Gloves", "Hats", "Jewelry", "Keychains", "Pocket Squares & Tie Bars", "Scarves", "Socks", "Tech", "Ties", "Umbrellas", "Wallets & Card Holders", "Watches"])->where('gender', "men's")->paginate(21);;
            } elseif ($categories == "BAGS") {
                $items = Item::where('categories', ["Backpacks", "Briefcases", "Duffle Bags", "Messenger Bags", "Pouches & Document Holders", "Tote Bags", "Travel Bags"])->where('gender', "men's")->paginate(21);;
            } elseif ($categories == "CLOTHINGS") {
                $items = Item::where('categories', ["Jackets & Coats", "Jeans", "Pants", "Shirts", "Shorts", "Suits & Blazers", "Sweaters", "Swimwear", "Tops", "Underwear & Loungewear"])->where('gender', "men's")->paginate(21);;
            } elseif ($categories == "SHOES") {
                $items = Item::where('categories', ["Boat Shoes & Moccasins", "Boots", "Espadrilles", "Lace Ups & Oxfords", "Monkstraps", "Sandals", "Slippers & Loafers2", "Sneakers"])->where('gender', "men's")->paginate(21);;
            } else {
                $items = Item::where('categories', $categories)->latest('created_at')->where('gender', "men's")->paginate(21);;
            }
        }
        elseif($designers != 'none' and $categories == 'none'){
            
            $items = Item::where('gender', "men's")->latest('created_at')->where('designers', $designers)->paginate(21);;
        }
        else{
            if ($categories == 'ACCESSORIES') {
                $items = Item::where('categories', ["Belts & Suspenders", "Dog Accessories", "Eyewear", "Face Masks", "Gloves", "Hats", "Jewelry", "Keychains", "Pocket Squares & Tie Bars", "Scarves", "Socks", "Tech", "Ties", "Umbrellas", "Wallets & Card Holders", "Watches"])->where('gender', "men's")->where('designers', $designers)->paginate(21);;
            } elseif ($categories == "BAGS") {
                $items = Item::where('categories', ["Backpacks", "Briefcases", "Duffle Bags", "Messenger Bags", "Pouches & Document Holders", "Tote Bags", "Travel Bags"])->where('gender', "men's")->where('designers', $designers)->paginate(21);;
            } elseif ($categories == "CLOTHINGS") {
                $items[] = Item::where('categories', ["Jackets & Coats", "Jeans", "Pants", "Shirts", "Shorts", "Suits & Blazers", "Sweaters", "Swimwear", "Tops", "Underwear & Loungewear"])->where('gender', "men's")->where('designers', $designers)->paginate(21);;
            } elseif ($categories == "SHOES") {
                $items[] = Item::where('categories', ["Boat Shoes & Moccasins", "Boots", "Espadrilles", "Lace Ups & Oxfords", "Monkstraps", "Sandals", "Slippers & Loafers2", "Sneakers"])->where('gender', "men's")->where('designers', $designers);;
            } else {
                $items[] = Item::where('categories', $categories)->where('gender', "men's")->latest('created_at')->where('designers', $designers)->paginate(21);;
            }
        }
        
        $inform['gender'] = $gender;
        $inform['designers'] = $designers;
        $inform['categories'] = $categories;
        $designers = Designer::get();
        return view('list', compact('items', 'inform', 'designers'));
    }
    
    
    public function item_search(request $request){
        $data = $request->all();
        $keyword =  $request->input('keyword');
        $keyword_men = $request->input('keyword_men');
        $keyword_women = $request->input('keyword_women');
        $query = Item::query();
        if(!empty($keyword_men )) {
           $query->latest('created_at')->where('gender', "men's")
            ->where(function($query) use($keyword_men){
                $query->orWhere('name', 'LIKE', "%{$keyword_men}%")
                ->orWhere('categories', 'LIKE', "%{$keyword_men}%")
                ->orWhere('made_in', 'LIKE', "%{$keyword_men}%")
                ->orWhere('designers', 'LIKE', "%{$keyword_men}%")
                ->orWhere('material', 'LIKE', "%{$keyword_men}%");
            });
            
        }elseif(!empty($keyword_women)){
        $query->latest('created_at')->where('gender', "women's")
            ->where(function($query) use($keyword_women){
                $query->orWhere('name', 'LIKE', "%{$keyword_women}%")
                ->orWhere('categories', 'LIKE', "%{$keyword_women}%")
                ->orWhere('made_in', 'LIKE', "%{$keyword_women}%")
                ->orWhere('designers', 'LIKE', "%{$keyword_women}%")
                ->orWhere('material', 'LIKE', "%{$keyword_women}%");
            });
            
        }elseif(!empty($keyword)){
                $query->latest('created_at')->orWhere('name', 'LIKE', "%{$keyword}%")
                ->orWhere('categories', 'LIKE', "%{$keyword}%")
                ->orWhere('made_in', 'LIKE', "%{$keyword}%")
                ->orWhere('designers', 'LIKE', "%{$keyword}%")
                ->orWhere('material', 'LIKE', "%{$keyword}%");
            
        }else{
          
            $inform['gender'] = "none";
            $inform['designers'] ="none" ;
            $inform['categories'] = "none";
            $designers = Designer::get();
            $items[] = null;
            return view('list', compact('items', 'inform', 'designers')); 
        }

        $items = $query->get();
        $inform['gender'] = "none";
        $inform['designers'] ="none" ;
        $inform['categories'] = "none";
        $designers = Designer::get();
        return view('list', compact('items', 'inform', 'designers'));   
    }
    
    public function item_show($id){
        
        $item = Item::where('id', $id)->get();;
        return view('item_menu', compact('item'));
    }

    public function insert_cart(request $request){
        
        $data = $request->all();
        $user_id = Auth::id();
        if(isset($user_id)){

            Cart::create(['user_id' => $user_id,
            'item_id' => $data['item_id'],
            'size' => $data['size']
            ]);
            
            
            return redirect()->route('cart');
        }else{
            return Auth::routes();
        }
    }
    
    
     public function to_wish(request $request){
        
        $data = $request->all();
        $user_id = Auth::id();
        if(isset($user_id)){

            Wish::create(['user_id' => $user_id,
            'item_id' => $data['item_id'],
            'size' => $data['size']
            ]);
            
            Cart::where("id", $data['cart_id'])->delete();
            
            return redirect()->route('cart');
            
        }else{
            return Auth::routes();
        }

    }
    
        
    public function insert_wish(request $request){
        
        $data = $request->all();
        $user_id = Auth::id();
        if(isset($user_id)){

            Wish::create(['user_id' => $user_id,
            'item_id' => $data['item_id'],
            'size' => $data['size']
            ]);
            return redirect()->route('wish');
        }else{
            return Auth::routes();
        }

    }


    public function to_cart(request $request){
        
        $data = $request->all();
        $user_id = Auth::id();
        if(isset($user_id)){

            Cart::create(['user_id' => $user_id,
            'item_id' => $data['item_id'],
            'size' => $data['size']
            ]);
            Wish::where("id", $data['wish_id'])->delete();
            
            return redirect()->route('wish');
        }else{
            return Auth::routes();
        }
    }
}
