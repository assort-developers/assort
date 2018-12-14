@extends('layout.common')
@section('title', '発注検索画面')
@section('header_title', '発注検索画面')

@section('content')
<div class="content_wrapper">
	<table class="table-bordered">
		<tbody>
		<tr>
			<th colspan="4">発注情報</th>
		</tr>
		<tr>
			<th>発注伝票番号</th>
			<td >
				<input class="form-control" type="text" name=""maxlength="40" value="" placeholder="発注伝票番号">
			</td>
			<th>発注状況</th>
			<td>
				<select name="order_status" id="" class="form-control">
					<option value=""></option>
					<option value="0">未確定</option>
					<option value="1">発注済み</option>
					<option value="2">入荷済み</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>仕入先コード</th>
			<td>
				<div class="search_box"><input class="form-control" type="text" name=""maxlength="40" value="" placeholder="仕入先コード"></div>
				<div class="search_button"><button class="btn">検索</button></div>
			</td>
			<th>仕入先名</th>
			<td><input class="form-control" type="text" name=""maxlength="40" value="" placeholder="仕入先コード"></td>
		</tr>
		<tr>
			<th>商品コード</th>
			<td>
				<div class="search_box"><input class="form-control" type="text" name=""maxlength="40" value="" placeholder="商品コード"></div>
				<div class="search_button"><button class="btn">検索</button></div>
			</td>
			<th>商品名</th>
			<td><input class="form-control" type="text" name=""maxlength="40" value="" placeholder="仕入先コード"></td>
		</tr>
		<tr>
			<th>発注日</th>
			<td>
				<input class="form-control" type="text" name="" maxlength="10" value="" placeholder="2000-12-31">
			</td>
			<th>～</th>
			<td>
				<input class="form-control" type="number" name="" size="7" maxlength="7" value="" placeholder="2000-12-31">
			</td>
		</tr>
			<th>納期</th>
			<td>
				<input class="form-control" type="text" name="" maxlength="10" value="" placeholder="2000-12-31">
			</td>
			<th>～</th>
			<td>
				<input class="form-control" type="number" name="" size="7" maxlength="7" value="" placeholder="2000-12-31">
			</td>
		</tr>
		<tr>
			<th class="left">支払先コード</th>
			<td>
				<div class="search_box"><input class="form-control" type="text" name="" size="60" maxlength="60" value="" placeholder="支払先コード"></div>
				<div class="search_button"><button class="btn">検索</button></div>
			</td>
			<th class="left">支払先名</th>
			<td>
				<input class="form-control search_box" type="text" name="" size="60" maxlength="60" value="" placeholder="支払先名">
				<div class="search_button"><button class="btn">検索</button></div>

			</td>
		</tr>
		<tr>
			<th>発注担当者</th>
			<td><input class="form-control" type="text" name=""  maxlength="40" value="" placeholder="発注担当者"></td>
			<th>発注数</th>
			<td>
				<input class="form-control search_box" type="number" name="" size="10" maxlength="40" value="" >
				<span class="hyphen">着</span>
			</td>
		</tr>
		<tr>
			<th>発注原価</th>
			<td>
				<input class="form-control search_box" type="number" name="" size="7" maxlength="7" value="" placeholder="発注単価">
				<span class="hyphen">円</span>
			</td>
			<th>～</th>
			<td>
				<input class="form-control search_box" type="number" name="" size="7" maxlength="7" value="" placeholder="発注単価">
				<span class="hyphen">円</span>
			</td>
		</tr>
		</tbody>
	</table>
	<div class="controll_buttons overflow_btn">
		<a href="/order/create" class="btn btn-dark">新規発注</a>
		<a href="" class="btn btn-success">検索</a>
	</div>
	<table class="table-bordered search_result">
		<tr>
			<th class="table-header" colspan="9">発注検索結果</th>
		</tr>
		<tr class="table-header">
			<th>発注伝票ID</th>
			<th>ブランド名</th>
			<th class="table_main_col">商品名</th>
			<th >発注日</th>
			<th >ステータス</th>
			<th >納品予定日</th>
			<th >最終更新者</th>
			<th >最終更新日</th>
			<th class="btn-outer">操作</th>
		</tr>
		@foreach($orders as $order)
			<tr>
				<td>{{$order->id}}</td>
				<td>{{$order->brand_id}}</td>
				<td>かなりいい感じのTシャツ 他</td>
				<td>{{$order->order_date}}</td>
				<td>{{$order->getOrderStatus()}}</td>
				<td>{{$order->delivery_date}}</td>
				<td>{{$order->latest_updated}}</td>
				<td>{{$order->update}}</td>
				<td class="btn-outer">
					@if($order->status == 0)
						<a href="/order/{{$order->id}}/content/create/" class="btn btn-dark">商品登録</a>
					@else
						<a href="/order/show/{{$order->id}}" class="btn btn-success">入荷登録</a>
					@endif
				</td>
			</tr>
		@endforeach
	</table>
</div>
@endsection