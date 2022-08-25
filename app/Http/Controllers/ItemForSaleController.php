<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemForSaleRequest;
use App\Http\Requests\UpdateItemForSaleRequest;
use App\Models\ItemForSale;
use App\Models\Photos;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use function redirect;
use function route;
use function view;

class ItemForSaleController extends Controller
{
    
    
    public function __construct() {
        $this->middleware('auth')->except(['index', 'show', 'search']);
    }
    
    public function indexOwn(Request $request){
        $thisUserItemsForSale = $request->user()->itemsForSale;
        
        return view('item_for_sale.index', ['items_for_sale' => $thisUserItemsForSale]);
    }
    
    public function search(Request $request) {
        $query = $request->input('q');
        if(!$query) {
            return redirect()->action([ItemForSaleController::class, 'index']);
        }
        
        $filteredItems = ItemForSale::where('name', 'LIKE', '%'.$query.'%')
                            ->orWhere('description', 'LIKE', '%'.$query.'%')
                            ->get();
        if(!$filteredItems) {
            $filteredItems = [];
        }
        return view('item_for_sale.index', ['items_for_sale' => $filteredItems]);
        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('item_for_sale.index', ['items_for_sale' => ItemForSale::with(["photos"])->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('item_for_sale.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreItemForSaleRequest  $request
     * @return Response
     */
    public function store(StoreItemForSaleRequest $request)
    {
        DB::transaction(function() use($request){
                $itemForSale = ItemForSale::create(array(
                "name" => $request->name,
                "price" => $request->price,
                "description" => $request->description
                        
            ));
                
            $itemForSale->user()->associate($request->user());
            
            $this->savePhotos($request->photos, $itemForSale);
            
            $itemForSale->save();
        });
        
        return redirect(route('item_for_sale.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  ItemForSale  $itemForSale
     * @return Response
     */
    public function show(ItemForSale $itemForSale)
    {
        return view('item_for_sale.show', ['item_for_sale' => $itemForSale]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  ItemForSale  $itemForSale
     * @return Response
     */
    public function edit(ItemForSale $itemForSale)
    {
        return view('item_for_sale.edit', ['item_for_sale' => $itemForSale]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateItemForSaleRequest  $request
     * @param  ItemForSale  $itemForSale
     * @return Response
     */
    public function update(UpdateItemForSaleRequest $request, ItemForSale $itemForSale)
    {
        $itemForSale->name = $request->name;
        $itemForSale->price = $request->price;
        $itemForSale->description = $request->description;
        
        $this->savePhotos($request->photos, $itemForSale);
        
        $itemForSale->update();
        return redirect(route('item_for_sale.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  ItemForSale  $itemForSale
     * @return Response
     */
    public function destroy(ItemForSale $itemForSale)
    {
        $photos = $itemForSale->photos;
        $itemForSale->delete();
        foreach ($photos as $photo) {
            File::delete($photo->path);
        }
        
        
        return redirect(route('item_for_sale.index'));
    }
    
    private function savePhotos($photos, ItemForSale $itemForSale) {
        if($photos == null) {
            return;
        }
        foreach ($photos as $uploadedPhoto) {
            $photoPath = $uploadedPhoto->store("images/" . $itemForSale->id);
            $photo = new Photos();
            $photo->path = $photoPath;
            $itemForSale->photos()->save($photo);
        }
    }
}
