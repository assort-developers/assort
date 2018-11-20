@extends('layout.common')
@section('title', '入庫管理')

@section('content')
<div class="content_wrapper">
	<table class="table-bordered">
		<tbody>
		<tr>
			<th colspan="2">入庫情報</th>
		</tr>
		<tr>
			<th class="left">入庫場所コード</th>
			<td></td>
		</tr>
		<tr>
			<th class="left">棚番号</th>
			<td>X-00</td>
		</tr>
	<tr>
			<th class="left">商品コード</th>
			<td><input class="form-control" type="text" name="" size="20" maxlength="40" value="" placeholder="商品コード"></td>
		</tr>
	<tr>
			<th class="left">入庫数量</th>
			<td>3</td>
		</tr>
	<tr>
			<th class="left">入庫日時</th>
			<td><input class="form-control" type="date" name="date" value="2018-01-01"></td>
		</tr>
		<tr>
			<th class="left">最終更新者</th>
			<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
		</tr>
		<tr>
			<th class="left">最終更新日</th>
			<td><input class="form-control" type="date" name="date" value="2018-01-01"></td>
		</tr>
		</tbody>
	</table>
	<div align="right">
	<a href="#" class="square_btn">
		<i class="fa fa-caret-right"></i>登録</a>
	<a href="#" class="reseto_btn">
		<i class="fa fa-caret-right"></i>リセット</a> 
	<a href="#" class="update_btn">
		<i class="fa fa-caret-right"></i>更新</a>
	<a href="#" class="delete_btn">
		<i class="fa fa-caret-right"></i>削除</a>
	</div>
</div>
@endsection