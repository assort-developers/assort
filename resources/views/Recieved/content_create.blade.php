@extends('layout.common')
@section('title', '注文商品登録')
@section('header_title', '注文商品登録')

@section('content')
<div class="content_wrapper">
	@if(isset($errors))
		@foreach($errors->all() as $error)
			<p>{{$error}}</p>
		@endforeach
	@endif
	<form action="/recieved/{{$recieved->id}}/content/store" id="content_store" method="POST">
		{{csrf_field()}}
		<table class="table-bordered">
			<tr>
				<th colspan="4">注文情報</th>
			</tr>
			<tr>
				<th>注文ID</th>
				<td>{{$recieved->id}}</td>
				<th>顧客名</th>
				<td>{{$recieved->customer->family_name}}{{$recieved->customer->first_name}}</td>
			</tr>
			<tr>
				<th >注文日</th>
				<td>{{$recieved->created_at}}</td>
				<th>配送料</th>
				<td>{{$recieved->shipment_charge}}</td>
			</tr>
			<tr>
				<th colspan="4">支払情報</th>
			</tr>
			<tr>
				<th >商品合計</th>
				<td>※自動的に設定されます</td>
				<th>支払総額</th>
				<td>※自動的に設定されます</td>
			</tr>
		</table>
		
		<div class="controll_buttons overflow_btn">
		</div>

		<table class="table-bordered">
				<tr>
					<th colspan="4">商品検索</th>
				</tr>
				<tr>
					<th>ブランドiD</th>
					<td>
						<input type="text" class="form-control" id="brand_id_box">
						<!-- <button type="button" id="brand_id_search" class="btn btn-dark">検索</button> -->
					</td>
					<th>ブランド名</th>
					<td>
						<input type="text" class="form-control" id="brand_name_box">
						<!-- <button type="button" id="brand_name_search" class="btn btn-dark">検索</button> -->
					</td>
				</tr>
				<tr>
					<th>商品ID</th>　
					<td>
						<input type="text" class="form-control" id="product_codename_id_box">
						<!-- <button type="button" class="btn btn-dark" id="product_codename_id_search">検索</button> -->
					</td>
					<th>商品名</th>
					<td>
						<input type="text" class="form-control" id="product_codename_name_box">
						<!-- <button type="button" class="btn btn-dark" id="product_codename_name_search">検索</button> -->
					</td>
				</tr>
		</table>

		<div class="controll_buttons overflow_btn">
			<button type="button" class="btn btn-dark" id="product_search_button">検索</button>
			<div class="hide right" id="customer_result_ok"></div>
		</div>


		<table class="table-bordered" id="search_products">
			<tr>
				<th>商品ID</th>
				<th>商品名</th>
				<th>サイズ</th>
				<th>色</th>
				<th>受注数</th>
			</tr>
			{{-- @foreach($products as $idx => $product)
				<tr>
					<td>{{$product->id}}</td>
					<td>{{$product->product_codename->name}}</td>
					<td>{{$product->product_codename->category_id}}</td>
					<td>{{$product->size_id}}</td>
					<td>{{$product->color_id}}</td>
					<td><input type="number" class="form-control qty" id="qty_{{$product->id}}" value="0"></td>
				</tr>
			@endforeach --}}
		</table>
		<div class="controll_buttons overflow_btn">
			<input type="hidden" namem="recieved_id" value="{{$recieved->id}}">
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


	products = [];
	$('#product_search_button').click(function(){
		products = [];
		$('#search_products tr:not(:first)').remove();
		let brand_id = $('#brand_id_box').val();
		let brand_name = $('#brand_name_box').val();
		let product_id = $('#product_codename_id_box').val();
		let product_name = $('#product_codename_name_box').val();
		let param = { 
			brand_name : brand_name,
			brand_id : brand_id,
			product_id : product_id,
			product_name : product_name 
		};
		console.log(param);
		$.ajax({	
				url:"/api/product_search", // 通信先のURL
				type:"GET",		// 使用するHTTPメソッド
				data: param , // 送信するデータ
				dataType:"json", // 応答のデータの種類 
												// (xml/html/script/json/jsonp/text)
				timespan:1000 	
		}).done(function(data,textStatus,jqXHR) {
				// $('#customer_id').val(data.customer_id[0].id)
				$('#customer_result_ok').text(data.products.length + '件見つかりました').show();
				//console.log(data.customer_id[0].id);
				products = data.products;
				$.each(data.products, function(index, val){
					console.log(val);
						let append_element = '<tr><td>'+val.id+'</td><td>'+val.name+'</td><td>'+val.print_size+'</td><td>'+val.print_color+'</td><td><input type="number" value="0" class="form-control qty" id="qty_'+val.id+'"></td></tr>';
						$('#search_products').append($(append_element));
						// console.log(val);
				});
				$('#zip1').val(data.cusomter_address[0].zip1);
				$('#zip2').val(data.cusomter_address[0].zip2);
				$('#pref').val(data.cusomter_address[0].pref_print);
				$('#city').val(data.cusomter_address[0].address_city);
				$('#town').val(data.cusomter_address[0].address_town);
				$('#build').val(data.cusomter_address[0].address_build);
				// console.log(data.customer_id.length);
		});
		$('#customer_address').change(function(){
				// $.each(cusomter_address, function(idx, val){

				// });
				for(let i = 0; i < customer_address.length; i++){
						if(customer_address[i].id == $(this).val()){
								let val = customer_address[i];
								$('#zip1').val(val.zip1);
								$('#zip2').val(val.zip2);
								$('#pref').val(val.pref_print);
								$('#city').val(val.address_city);
								$('#town').val(val.address_town);
								$('#build').val(val.address_build);
						}
				}
		});

	});
});
</script>
@endsection