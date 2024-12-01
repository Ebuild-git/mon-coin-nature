<?php
use App\Models\Message;
use App\Models\Category;
use App\Models\PostTag;
use App\Models\PostCategory;
use App\Models\Order;
use App\Models\Wishlist;
use App\Models\Shipping;

use App\Models\Transport;

use App\Models\Coupon;
use App\Models\Cart;
// use Auth;
class Helper{
   
    
   
  

    // Cart Count
    public static function cartCount($user_id=''){
       
        if(Auth::check()){
            if($user_id=="") $user_id=auth()->user()->id;
            return session('cart', [])::where('user_id',$user_id)->sum('quantite');
        }
        else{
            return 0;
        }
    }
    public function montant(){
        $total = $this->frais;
        foreach ($this->contenus as $contenu){
            $total += $contenu->prix_unitaire * $contenu->quantite;
        }
        return $total ?? 0;
    }

    

       // Total amount cart
       public static function totalCartPrice($user_id=''){
        if(Auth::check()){
            if($user_id=="") $user_id=auth()->user()->id;
            return  session('cart', [])::where('user_id',$user_id)->sum('amount');
        }
        else{
            return 0;
        }
    }
    // relationship cart with product
    public function product(){
        return $this->hasOne('App\Models\produits','id','product_id');
    }


   



    public static function shipping(){
        return Transport::orderBy('id','DESC')->get();
    }
}

?>