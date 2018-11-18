@extends('layout.common')
@section('title', '発注伝票詳細')
@section('header_title', '発注伝票詳細')

@section('content')
<div class="content_wrapper">
	<form action="/order/update" method="POST">
		{{csrf_field()}}
		<table class="table-bordered">
			<tr>
				<th colspan="4">発注情報</th>
			</tr>
			<tr>
				<th>発注コード</th>
				<td>{{$order->code}}</td>
				<th >仕入元名</th>
				<td>{{$order->bland_id}}</td>
			</tr>
			<tr>
				<th >発注日</th>
				<td>{{$order->getOrderDate()}}</td>
				<th >納品予定日</th>
				<td>
					<input type="date" class="form-control search_box" name="delivery_date" value="{{$order->delivery_date}}">{{$order->getUntilArrival()}}</td>
			</tr>
			<tr>
				<th >納品状態</th>
				<td>{{$order->getOrderStatus()}}</td>
				<th >発注者</th>
				<td>
					{{$order->ordered_staffid}}
					<div class="search_button"><button type="button" class="btn btn-dark">担当者変更</button></div>
				</td>
			</tr>
			<tr>
				<th colspan="4">支払情報</th>
			</tr>
			<tr>
				<th >商品合計</th>
				<td>{{$order->total}}円</td>
				<th >送料</th>
				<td>{{$order->delivery_charge}}円</td>
			</tr>
			<tr>
				<th>支払総額</th>
				<td>{{$order->total_pay}}円</td>
				<th >最終更新者</th>
				<td>{{$order->latest_updated}}</td>
			</tr>
			<tr>
				<th colspan="4">更新情報</th>
			</tr>
			<tr>
				<th >最終更新日</th>
				<td>{{$order->update}}</td>
				<th>最終更新者</th>
				<td>{{$order->latest_updated}}</td>
			</tr>
		</table>
		<div class="controll_buttons overflow_btn">
			<button type="button" class="btn btn-dark">入力前に戻す</button>
			<input type="submit" name="update" class="btn btn-dark" value="発注情報変更">
			<input type="hidden" name="order_id" value="{{$order->id}}">
		</div>
	</form>
	<table class="table-bordered">
		<tr>
			<th colspan="8">発注商品一覧</th>
		</tr>
		<tr>
			<th>商品名</th>
			<th>発注数</th>
			<th>入庫完了数</th>
			<th>小計</th>
			<th>入庫完了日</th>
			<th>入庫確認者</th>
			<th>入庫数</th>
			<th>登録</th>
		</tr>
		@foreach($order_contents as $content)
			<tr>
				<form action="/order/content/update" method="POST">
					{{ csrf_field() }}
					<td>{{$content->product_id}}</td>
					<td>{{$content->amount}}</td>
					<td>{{$content->is_arrival or '未到着'}}</td>
					<td>{{$content->subtotal}}</td>
					<td>{{$content->getArrivalDate()}}</td>
					<td>{{$content->arrival_check_staffid or '未確認'}}</td>
					<td>
						@if($content->is_arrival >= $content->amount)
							<input class="form-control" type="number" readonly name="" value="0">
						@else
							<input class="form-control" type="number" name="arrival_amount" value="{{$content->amount - $content->is_arrival}}"
								min="1" max="{{$content->amount}}"
							>
						@endif
					</td>
					<td  class="btn-outer">
						@if($content->is_arrival >= $content->amount)
							<button class="btn" disabled type="button">入荷済</button>
						@else
							<input type="hidden" name="order_id" value="{{$content->order_id}}">
							<input type="hidden" name="content_id" value="{{$content->id}}">
							<input type="hidden" name="order_amount" value="{{$content->amount}}" > 
							<input class="btn btn-success" type="submit" name="arrival_update" value="入荷">
						@endif
					</td>
				</form>
			</tr>
		@endforeach
	</table>
</div>
@endsection