<?php

use App\Http\Controllers\ProfileController;
use App\Models\Address;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

$my_address = null;

function main(){
    global $my_address;
    $products = Product::all();
    $users = User::all();
    $addresses = Address::all();
    $my_address = Address::where('user_id', Auth::user()->id)->first();
    return ['my_address' => $my_address, 'products' => $products, 'users'=>$users, 'addresses'=>$addresses];
}


Route::get('/', function () {
    return view('index');
});

Route::get('/forget-password', function (){
    return view('auth.forgot-password');
});

Route::get('/shop-details', function (){
    $products = Product::all();
    return view('shop-full-width-sidebar', main());
});

Route::get('/product/{id}', function (Request $request){
    $product = Product::where('id', $request->id)->first();
    return view('shop-details', ['product'=>$product]);
});

Route::get('/editProduct/{id}', function (Request $request){
    $product = Product::where('id', $request->id)->first();
    return view('editorProduct', ['product'=>$product]);
});

Route::post('/changeAddress', function(Request $request){
    $address = new Address();
    $address->user_id = Auth::user()->id;
    $address->postcode = $request->postcode;
    $address->address = $request->address;
//    dd($address);
    Address::where('user_id', Auth::user()->id)->update($address->getAttributes());

    return view('profile.edit', main());
});

Route::post('/updateProduct/{id}', function(Request $request){
    $product = new Product();
    $product->name = $request->name;
    $product->description = $request->description;
    $product->cost = $request->cost;
    $product->preview = $request->preview;

    Product::where('id', $request->id)->update($product->getAttributes());

    return view('profile.edit', main());
});

Route::post('/addProduct', function (Request $request) {
//    dd()
    $confirm_address = Address::where('user_id', Auth::user()->id)->first();
    $product = new Product();
    $product->name = $request->name;
    $product->description = $request->description;
    $product->cost = $request->cost;
    $product->preview = $request->preview;
    $product->name_shop = Auth::user()->name;
    $product->save();

    $products = Product::all();

    return view('profile.edit', main());
});

Route::post('/deleteProduct', function (Request $request){
    Product::where('id', $request->id)->delete();
    $confirm_address = Address::where('user_id', Auth::user()->id)->first();
    $products = Product::all();
    return view('profile.edit', main());
});

Route::post('/deleteUser', function (Request $request){
    User::where('id', $request->id)->delete();
    Address::where('user_id', $request->id)->delete();
    return view('profile.edit', main());
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profile', function (){

        if (!isset($my_address)){
            global $my_address;
            $address = new Address();
            $address->user_id = Auth::user()->id;
            $address->address = null;
            $address->postcode = null;
            $address->save();

            $my_address = Address::where('user_id', Auth::user()->id)->first();
        }
        return view('profile.edit', main());
    });
});

require __DIR__.'/auth.php';
