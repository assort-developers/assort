@extends('layout.common')
@section('title', '発注伝票登録')
@section('header_title', '発注伝票登録')

@section('content')
<div class="content_wrapper">
	@if(isset($errors))
		@foreach($errors->all() as $error)
			<p>{{$error}}</p>
		@endforeach
	@endif
	<form action="/order/store" method="POST">
		{{csrf_field()}}
		<table class="table-bordered">
			<tr>
				<th colspan="4">発注情報</th>
			</tr>
			<tr>
				<th>発注コード</th>
				<td><input type="text" class="form-control" name="order_code" value="" maxlength="12"></td>
				<th >仕入元名ID</th>
				<td><input type="number" class="form-control" name="brand_id" ></td>
			</tr>
			<tr>
				<th >発注日</th>
				<td><input type="date" class="form-control" name="order_date"></td>
				<th >納品予定日</th>
				<td>
					<input type="date" class="form-control" name="delivery_date"></td>
			</tr>
			<tr>
				<th >納品状態</th>
				<td>未確定</td>
				<th >発注者</th>
				<td>
					1
					<input type="hidden" name="ordered_staffid" value="1">
				</td>
			</tr>
			<tr>
				<th colspan="4">支払情報</th>
			</tr>
			<tr>
				<th >商品合計</th>
				<td>※自動的に設定されます</td>
				<th >送料</th>
				<td>
					<div class="search_box"><input type="number" name="delivery_charge" class="form-control"></div>
						<span class="hyphen">円</span>
				</td>
			</tr>
			<tr>
				<th>支払総額</th>
				<td>※自動的に設定されます</td>
				<th >最終更新者</th>
				<td>1</td>
			</tr>
		</table>
		<div class="controll_buttons overflow_btn">
			<input type="submit" name="update" class="btn btn-dark" value="発注伝票登録">
		</div>
	</form>
</div>
@endsection