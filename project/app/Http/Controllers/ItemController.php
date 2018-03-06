<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Item;
use App\Models\ItemDetail;

class ItemController extends Controller
{
    public function __construct(Item $item, ItemDetail $itemDetail){
        $this->item = $item;
        $this->itemDetail = $itemDetail;
    }

    public function addItem(Request $request){
        $newItem = [
            'cat_id' => $request->cat_id,
            'qty' => $request->qty,
            'name' => $request->name,
            'summary' => $request->summary,
            'price' => $request->price,
            'imgUrl' => $request->imgUrl,
        ];

         $newItem = $this->item->create($newItem);

         if ($newItem != null){
             var_dump($newItem);
         }else{
             echo 'fail';
         }
    }

    public function updateItem(Request $request){
        $updateItem = Item::where('id', $request->id)
            ->update([
                'cat_id' => $request->cat_id,
                'qty' => $request->qty,
                'name' => $request->name,
                'summary' => $request->summary,
                'price' => $request->price,
                'imgUrl'=> $request->imgUrl,
            ]);
    }

    public function addItemDetail(Request $request){
        $newItemDetail = [
            'item_id'=>$request->itemId,
            'key'=>$request->key,
            'value'=>$request->value,
            ];

        $newItemDetail = $this->itemDetail->create($newItemDetail);

        if ($newItemDetail != null){
            var_dump($newItemDetail);
        }else{
            echo 'fail';
        }
    }

    public function updateItemDetail(Request $request){
        $updateItemDetail = ItemDetail::where('id', $request->id)
            ->update([
                'item_id'=>$request->itemId,
                'key'=>$request->key,
                'value'=>$request->value,
            ]);
    }

    public function getItemDetail($id){
        $getItemDetail = ItemDetail::where('item_id', $id)->get();
        return $getItemDetail;
    }

    public function getItemByGenre($genre){
        $getItemDetails = ItemDetail::where('value', $genre)->get();
        $itemArray = array();
        foreach ($getItemDetails as $getItemDetail){
            $getItemByGenre = Item::where('id', $getItemDetail->item_id)->get();
            array_push($itemArray, $getItemByGenre);
        }
        return $itemArray;
    }
}
