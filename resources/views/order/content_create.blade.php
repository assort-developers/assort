@extends('layout.common')
@section('title', '発注商品登録')
@section('header_title', '発注商品登録')

@section('content')
<div class="content_wrapper">
	@if(isset($errors))
		@foreach($errors->all() as $error)
			<p>{{$error}}</p>
		@endforeach
	@endif
	<form action="/order/{{$order->id}}/content/store" id="content_store" method="POST">
		{{csrf_field()}}
		<table class="table-bordered">
			<tr>
				<th colspan="4">発注伝票情報</th>
			</tr>
			<tr>
				<th>発注コード</th>
				<td>{{$order->id}}</td>
				<th >仕入元名</th>
				<td>{{$order->brand->name}}</td>
			</tr>
			<tr>
				<th >発注日</th>
				<td>{{$order->getOrderDate()}}</td>
				<th >納品予定日</th>
				<td>{{$order->delivery_date}}</td>
			</tr>
			<tr>
				<th >納品状態</th>
				<td>{{$order->getOrderStatus()}}</td>
				<th >発注者</th>
				<td>
					{{$order->ordered_staffid}}
					<input type="hidden" name="ordered_staffid" value="{{$order->ordered_staffid}}">
				</td>
			</tr>
			<tr>
				<th colspan="4">支払情報</th>
			</tr>
			<tr>
				<th >商品合計</th>
				<td>※自動的に設定されます</td>
				<th >送料</th>
				<td>{{$order->delivery_charge}}円</td>
			</tr>
			<tr>
				<th>支払総額</th>
				<td>※自動的に設定されます</td>
				<th >最終更新者</th>
				<td>1</td>
			</tr>
		</table>
		
		<div class="controll_buttons overflow_btn">
		</div>

		<table class="table-bordered">
			<tr>
				<th>商品ID</th>
				<th>カテゴリ</th>
				<th>商品名</th>
				<th>サイズ</th>
				<th>色</th>
				<th>在庫数</th>
				<th>発注数</th>
			</tr>
			@foreach($products as $idx => $product)
				<tr>
					<td>{{$product->id}}</td>
					<td>{{$product->product_codename->name}}</td>
					<td>{{$product->product_codename->category_id}}</td>
					<td>{{$product->size_id}}</td>
					<td>{{$product->color_id}}</td>
					<td>{{$product->stock_amount}}</td>
					<td><input type="number" class="form-control qty" id="qty_{{$product->id}}" value="0"></td>
				</tr>
			@endforeach
		</table>
		<div class="controll_buttons overflow_btn">
			<input type="hidden" name="order_content" id="generate_json" value="">
			<!-- <input type="submit" name="order" class="btn btn-success" value="発注確定"> -->
			<button type="button" id="create_json_btn" class="btn btn-success" >発注確定</button>
		</div>
	</form>
</div>
<script>
$(function(){
	order_content = [];
	function create_json(unit){
		order_content.push(unit);
	}
	$('#create_json_btn').click(function(){
		$('.qty').each(function(){
			let key = $(this).attr('id').replace('qty_','');
			let val = Number($(this).val());
			let product = { [key] : val };
			create_json(product);
		});
		let json_data = JSON.stringify(order_content);
		$('#generate_json').val(json_data);
		$('#content_store').submit();
	});
	return false;
});
</script>
@endsection