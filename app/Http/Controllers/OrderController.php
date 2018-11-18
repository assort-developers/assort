<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderContent;
use App\Models\ArrivalContent;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			//
			$orders = Order::all();
			//return ('<pre>'.var_dump($order));
			return view('order/order_search', [
				'orders' => $orders
			]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			//

			return view('order/order', [
				'test' => 'test'
			]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($order_id)
    {
			$order = Order::where('id', '=', $order_id)->get();
			$order_contents = OrderContent::where('order_id', '=', $order_id)->get();
				//
			return view('order/order', [
				'order' => $order[0],
				'order_contents' => $order_contents
			]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
			//
			return view('order/order')->width([
				'order' => $order[0]
			]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
		}
		public function content_update(Request $request)
    {
			// 指定されたcontentレコードの更新
			$content = OrderContent::where('id', '=', $request->content_id);
			$content->increment(
				'is_arrival', $request->arrival_amount, 
				[
					'arrival_date' => ($request->order_amount == $content->get()[0]->is_arrival + $request->arrival_amount)? NOW() : NULL,
					'arrival_check_staffid' => 1
				]);
			// 親 : orderテーブルレコードの更新
			$order = Order::where('id', '=', $content->get()[0]->order_id)
			->update([
				'latest_updated' => 1
			]);
			// arrival レコードの挿入
			ArrivalContent::create([
				'order_content_id' => $request->content_id,
				'amount' => $request->arrival_amount
			]);

			// 処理完了後リダイレクト
			return redirect('/order/show/'.$request->order_id);
		}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
