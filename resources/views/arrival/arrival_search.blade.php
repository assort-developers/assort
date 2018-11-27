@extends('layout.common')
@section('title', '入庫履歴検索')
@section('header_title', '入庫履歴検索画面')

@section('content')
<div class="content_wrapper">
	<form action="/arrival_search" method="GET">
		<table class="table-bordered">
			<tr>
				<th colspan="4">入庫情報</th>
			</tr>
			<tr>
				<th>入庫コード</th>
				<td><input type="text" name="arrival_id" class="form-control" value="{{$request->arrival_id}}"></td>
				<th>発注コード</th>
				<td>
					<input type="text" name="order_id" class="form-control"  value="{{$request->order_id}}">
				</td>
			</tr>
			<tr>
				<th>商品コード</th>
				<td><input type="text" class="form-control" name="product_code" value="{{$request->product_code}}" placeholder="商品コード"></td>
				<th>ブランドコード</th>
				<td><input type="text" name="brand_id" class="form-control" value="{{$request->brand_id}}"></td>
			</tr>
			<tr>
				<th>入庫日</th>
				<td><input type="date" class="form-control" name="arrival_date_start" name="date" value="{{$request->arrival_date_start}}"></td>
				<th>～</th>
				<td><input type="date" class="form-control" name="arrival_date_end" value="{{$request->arrival_date_end}}"></td>
			</tr>
			<tr>
				<th>最終更新日</th>
				<td colspan="3"><input type="date" class="form-control" name="update" value="{{$request->update}}"></td>
			</tr>
		</table>
		<div class="controll_buttons overflow_btn">
			<button type="button"id="query_reset_button" class="btn btn-dark">項目リセット</button>
			<input type="submit"  class="btn btn-success" value="検索">
		</div>
	</form>
	<table class="table-bordered">
		<tr>
			<th colspan="7">検索結果</th>
		</tr>
		<tr>
			<th>入庫コード</th>
			<th>出庫コード</th>
			<th>ブランド名</th>
			<th>商品名</th>
			<th>入庫日</th>
			<th>入庫数</th>
			<th>最終更新日</th>
		</tr>
		@foreach($arrivals as $arrival)
			<tr>
				<td>{{$arrival->id}}</td>
				<td>{{$arrival->order_id}}</td>
				<td>{{$arrival->brand_name}}</td>
				<td>{{$arrival->product_name}}</td>
				<td>{{$arrival->getDate('arrival_at')}}</td>
				<td>{{$arrival->amount}}</td>
				<td>{{$arrival->update}}</td>
			</tr>
		@endforeach
	</table>
</div>

@endsection