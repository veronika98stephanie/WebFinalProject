<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CatDetail;
use App\Models\Promo;
use App\Models\Status;

class AdminController extends Controller
{
    protected $category, $catDetail;

    public function __construct(Category $category, CatDetail $catDetail, Promo $promo, Status $status)
    {
        $this->category = $category;
        $this->catDetail = $catDetail;
        $this->promo = $promo;
        $this->status = $status;
    }

    public function addCategory(Request $request){
        $newCategory = [
            'parent_id' => $request->parent_id,
            'name' => $request->name,
        ];

        $newCategory = $this->category->create($newCategory);

        if($newCategory != null){
            var_dump($newCategory);
        }else{
            echo 'failed';
        }
    }

    public function updateCategory(Request $request){
        $res = Category::where('id', $request->input('id'))
            ->update([
                'parent_id' => $request->parent_id,
                'name' => $request->name,
            ]);
        $succes = array();
        $succes["response"] = "successful";
        return $res;
    }

    public function addCatDetail(Request $request){
        $newCatDetail = [
            'cat_id' => $request->cat_id,
            'key' => $request->key,
        ];

        $newCatDetail = $this->catDetail->create($newCatDetail);

        if($newCatDetail !=null){
            var_dump($newCatDetail);
        }else{
            echo 'Fail';
        }
    }
    public function updateCatDetail(Request $request){

        $res = CatDetail::where('id', $request->input('id'))
            ->update([
                'cat_id' => $request->input('cat_id'),
                'key' => $request->input('key')
            ]);
        $succes = array();
        $succes["response"] = "successful";
        return $res;
    }
    public function addPromo(Request $request){
        $newPromo = [
            'imgUrl' => $request->imgUrl,
        ];

        $newPromo = $this->promo->create($newPromo);

        if($newPromo !=null){
            var_dump($newPromo);
        }else{
            echo 'Fail';
        }
    }
    public function updatePromo(Request $request){

        $res = Promo::where('id', $request->input('id'))
            ->update([
                'imgUrl' => $request->input('imgUrl'),
            ]);
        $succes = array();
        $succes["response"] = "successful";
        return $res;
    }
    public function addStatus(Request $request){
        $newStatus = [
            'name' => $request->name,
        ];

        $newStatus =  $this->status->create($newStatus);

        if($newStatus != null){
            var_dump($newStatus);
        }else{
            echo 'Fail';
        }
    }
    public function updateStatus(Request $request){
        $res = Status::where('id', $request->input('id'))
            ->update([
                'name' => $request->name,
            ]);
        $succes = array();
        $succes["response"] = "successful";
        return $res;
    }
}

