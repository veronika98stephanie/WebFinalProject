<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Item;
use App\Models\ItemDetail;
use App\Models\Category;
use App\Models\CatDetail;
use App\ElasticModel\ItemElasticModel;

class ItemController extends Controller
{
    protected $itemElasticModel;
    public function __construct(Item $item, ItemDetail $itemDetail){
        $this->item = $item;
        $this->itemDetail = $itemDetail;
        $this->itemElasticModel = new ItemElasticModel();
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

         return $this->itemElasticModel->add(1 ,$request->cat_id, $request->qty,$request->name,$request->summary,$request->price,$request->imgUrl);
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

    public function getItemByGenre($genre, $page, $itemNumb){
        $getItemDetails = ItemDetail::where('value', $genre)->get();
        $itemArray = array();
        foreach ($getItemDetails as $getItemDetail){
            $getItemByGenre = Item::where('id', $getItemDetail->item_id)->get();
            foreach($getItemByGenre as $itemGenre){
                array_push($itemArray, $itemGenre);
            }
        }
//        $firstData = ($page-1)*$itemNumb;
        $collection = collect($itemArray);
        $chunk = $collection->forPage($page, $itemNumb);

        if($chunk->count()>0){
            return response($chunk);
        }else{
            return response('Error No Page', 400);
        }
    }

    public function getAllKey($cat_id){
        $children = Category::find($cat_id);
        $cat = array();
        array_push($cat, $children);
        $res = array();
        while($children->parent_id != null){
            $children = Category::find($children->parent_id);
            array_push($cat, $children);
        }
        foreach ($cat as $child){
            $allkey = CatDetail::where('cat_id', $child->id)->get();
            foreach ($allkey as $key)
                array_push($res, $key);
        }

        return $res;
    }

    public function getItemPagination(){
        return Item::paginate(20);
    }
}

