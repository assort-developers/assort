<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderContent;
use App\Models\ArrivalContent;
use App\Models\Product;

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
    public function create(Request $request)
    {
            //
            // dd($request->order_code);
            $order = new Order;
            // dd($order);
			return view('order/order_create', [
                'order' => $order,
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
        $request->validate([
            'order_code' => 'required|max:12',
            'brand_id' => 'required|integer',
            'order_date' => 'required|date',
            'delivery_date' => 'required|date',
            'ordered_staffid' => 'required|integer',
            'delivery_charge' => 'required|integer',
        ]);
        $order = new Order;
        $order->code = $request->order_code;
        $order->brand_id = $request->brand_id;
        $order->status = 0;
        $order->delivery_date = $request->delivery_date;
        $order->total_pay = 0;
        $order->ordered_staffid = $request->ordered_staffid;
        $order->order_date = $request->order_date;
        $order->delivery_charge = $request->delivery_charge;
        $order->latest_updated = $request->ordered_staffid;
        $order->save();
        
        return redirect('/order/'.$order->id.'/content/create/');
    }

    public function content_store($id, Request $request){
        $order_contents = json_decode($request->order_content);
        $insert_contents = [];
        //exists check 
        $order = Order::find($id);
        if(null == $order){
            return redirect('/order/'.$order->id.'/content/create/');
        }
        foreach($order_contents as $idx => $content){
            foreach($content as $product_id => $quantity){
                $product = Product::find(intval($product_id));
                if(null === $product){
                    unset($order_contents[$idx]);
                }else{
                    $insert_contents[intval($product_id)] = [
                        'quantity' => $quantity,
                        'subtotal' => $product->product_codename->price * $quantity
                    ];
                }
            }
        }
        $total_pay = $order->delivery_charge;
        $total = 0;
        foreach($insert_contents as $product_id => $product){
            OrderContent::create([
                'order_id' => $id,
                'product_id' => $product_id,
                'amount' => $product['quantity'],
                'subtotal' => $product['subtotal'],
                'is_arrival' => 0,
                'arrival_date' => null,
                'arrival_check_staffid' => 1
            ]);
            $total_pay += $product['subtotal'];
            $total += $product['subtotal'];
        }
        $order->update(['total' => $total, 'total_pay' => $total_pay, 'status' => 1]);


        return redirect('/order/show/'.$id);
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
			return view('order/order', [
				'order' => $order[0],
				'order_contents' => $order_contents
			]);
    }
    public function content_create($id)
    {
        $order = Order::find($id);
        $products = Product::whereHas('product_codename', function($q) use ($order){
            $q->where('id', '=', $order->brand_id);
        })->get();
        return view('order/content_create',[
            'order' => $order,
            'products' => $products,
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
    public function update(Request $request)
    {
			//
			$order = Order::find($request->order_id)->update([
				'delivery_date' => $request->delivery_date,
				'latest_updated' => 1
			]);
			return redirect('/order/show/'.$request->order_id);
		}
		public function content_update(Request $request)
    {
			// 指定されたcontentレコードの更新
			$content = OrderContent::where('id', '=', $request->content_id);

			//validation
			$max_arrival = $content->get()[0]->amount - $content->get()[0]->is_arrival;
			$request->validate([
				'arrival_amount' => "required|numeric|between:1,$max_arrival",
			]);

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
