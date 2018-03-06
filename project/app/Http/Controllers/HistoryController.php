<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseList;
use App\Models\Purchase;
use App\Models\Customer;
use App\Models\CustomerItem;

class HistoryController extends Controller
{
    public function __construct(Purchase $purchase, PurchaseList $purchaseList, CustomerItem $customerItem, Customer $customer){
        $this->purchase = $purchase;
        $this->purchaseList = $purchaseList;
        $this->customer = $customer;
        $this->customerItem = $customerItem;
    }

    public function addPurchase(Request $request){
        $newPurchase = [
            'clientId'=>$request->clientId,
            'paymentMethodId'=>$request->paymentMethod,
            'statusId'=>$request->statusId,
            'date' => $request->date,
        ];

        $newPurchase = $this->purchase->create($newPurchase);

        if($newPurchase != null){
            var_dump($newPurchase);
        }
        else{
            echo 'Fail';
        }
    }
    public function updatePurchase(Request $request){
        $updatePurchase = Purchase::where('id', $request->id)
            ->update([
                'clientId'=>$request->clientId,
                'paymentMethodId'=>$request->paymentMethod,
                'statusId'=>$request->statusId,
                'date' => $request->date,
            ]);

        return $updatePurchase;
    }

    public function addPurchaseList(Request $request){
        $newPurchaseList = [
            'purchaseId'=>$request->purchaseId,
            'itemId'=>$request->itemId,
            'qty'=>$request->qty,
            ];

        $newPurchaseList = $this->purchaseList->create($newPurchaseList);

        if($newPurchaseList != null){
            var_dump($newPurchaseList);
        }
        else{
            echo 'Fail';
        }
    }

    public function updatePurchaseList(Request $request){
        $updatePurchaseList = PurchaseList::where('id', $request->id)
            ->update([
                'purchaseId'=>$request->purchaseId,
                'itemId'=>$request->itemId,
                'qty'=>$request->qty,
            ]);

        return $updatePurchaseList;
    }

    //batas sampe sini

    public function addCustomer(Request $request){
        $newCustomer = [
            'clientId'=>$request->clientId,
            'paymentMethodId'=>$request->paymentMethodId,
            'statusId'=>$request->statusId,
            'date'=>$request->date,
        ];

        $newCustomer = $this->customer->create($newCustomer);

        if($newCustomer != null){
            var_dump($newCustomer);
        }
        else{
            echo 'Fail';
        }
    }
    public function updateCustomer(Request $request){
        $updateCustomer = Customer::where('id', $request->id)
            ->update([
                'clientId'=>$request->clientId,
                'paymentMethodId'=>$request->paymentMethodId,
                'statusId'=>$request->statusId,
                'date'=>$request->date,
            ]);

        return $updateCustomer;
    }

    public function addCustomerItem(Request $request){
        $newCustomerItem = [
            'customerId'=>$request->customerId,
            'itemId'=>$request->itemId,
            'qty'=>$request->qty,
        ];

        $newCustomerItem = $this->customerItem->create($newCustomerItem);

        if($newCustomerItem != null){
            var_dump($newCustomerItem);
        }
        else{
            echo 'Fail';
        }
    }

    public function updateCustomerItem(Request $request){
        $updateCustomerItem = CustomerItem::where('id', $request->id)
            ->update([
                'customerId'=>$request->customerId,
                'itemId'=>$request->itemId,
                'qty'=>$request->qty,
            ]);

        return $updateCustomerItem;
    }
}

