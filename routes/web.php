<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

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

Route::get('/', [ShopController::class, "index"])->name("home");
Route::get('/shop', [ShopController::class, "shop"]);

Route::get('/collection/{collectionId_slug}', [ShopController::class, "collection"])->name("collection");


Route::get('/collection/{collectionId_slug}/sousCollection/{sousCollectionId_slug}', [ShopController::class, "collection"])->name("collection/sousCollection");

Route::get('/collection/{collectionId_slug}/sousCollection/{sousCollectionId_slug}/sousCategorie/{sousCategorieId_slug}', [ShopController::class, "collection"])->name("collection/sousCollection/sousCategorie");

Route::get('/collection/{collectionId_slug}/produit/{produitId_slug}', [ShopController::class, "produit"])->name("produit");
Route::post('ajouterAuPanier/{productId_slug}', [ShopController::class, "ajouterAuPanier"]);


Route::prefix("admin")->middleware(["auth", "isAdmin"])->group(function(){

    Route::get("/products", [ShopController::class,"showProduct"])->name("admin/product");
    Route::get("/products/edit/{product_id_slug}", [ShopController::class,"editProduct"])->name("admin/editProduct");
    Route::get("/products/update/", [ShopController::class,"updateProduct"])->name("admin/updateProduct");
    Route::post("/products/create/", [ShopController::class,"createProduct"])->name("admin/createProduct");
    Route::get("/products/destroy/{product_id_slug}", [ShopController::class,"destroyProduct"])->name("admin/destroyProduct");

    Route::get("/attribute/edit/{attribute_slug}", [ShopController::class,"editAttribute"])->name("admin/editAttribute");
    Route::put("/attribute/update/", [ShopController::class,"updateAttribute"])->name("admin/updateAttribute");

});


Route::get('/panier', [ShopController::class, "panier"])->name("panier");
Route::get('/panier/supprimer/{productId_slug}', [ShopController::class, "panierSupprimer"])->name("panier/supprimer");



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
