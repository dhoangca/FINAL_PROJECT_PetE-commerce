<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\AOrderModel;
use App\Models\Users\StatusModel;


class ManageOrdersController extends Controller
{
    public function listorders()
    {
        $orders = AOrderModel::with('status')->get();

        return view ('Admins.Contents.listorders', compact('orders', ));
    }

    public function manageorders()
    {
        $orders = AOrderModel::with('status')->get();

        return view ('Admins.Contents.manageorders', compact('orders'));
    }

    public function detailorder($order_id)
    {
        
        $orders = AOrderModel::with('user')->findOrFail($order_id);

        $payments = AOrderModel::with('payment')->findOrFail($order_id);
        
        $orderitem = AOrderModel::with('orderItems')->findOrFail($order_id);

        return view('Admins.Contents.detailorder', compact('orderitem', 'orders', 'payments'));
    }

    public function getEditOrders($order_id)
    {
        $statuss = StatusModel::all();

        $data['cate'] = AOrderModel::find($order_id);

        return view('Admins.Contents.editorder',$data , compact('statuss'));

    }

    public function postEditOrders(Request $request, $order_id)
    {

        $orders = AOrderModel::find($order_id);

        $orders->status_id = $request->status_id;

        $orders->save();

        return redirect()->route('Admins.manageorders');

    }

    public function delete($order_id)
    {

        $pets = AOrderModel::find($order_id);

        $pets->delete();

        return back();
    }
}
