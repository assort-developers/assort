@extends('layout.common')
@section('title', 'カテゴリ管理画面')
@section('header_title', 'カテゴリ管理画面')

@section('content')
	<div class="content_wrapper">
	<table class="table-bordered">
		<tbody>
		<tr>
			<th colspan="2">カテゴリ情報</th>
		</tr>
		<tr>
			<th>カテゴリ名</th>
			<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="カテゴリ名"></td>
		</tr>
		<tr>
			<th>親カテゴリ</th>
			<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="親カテゴリ名"></td>
		</tr>
		<tr>
		</tr>
		<tr>
			<th>更新者</th>
			<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
		</tr>
		<tr>
			<th>更新日</th>
			<td><input class="form-control" type="date" name="date" value="2018-01-01"></td>
		</tr>
		</tbody>
	</table>
	<div class="controll_buttons">
	<a href="#" class="square_btn btn">
		<i class="fa fa-caret-right"></i>登録</a>
	<a href="#" class="reseto_btn btn">
		<i class="fa fa-caret-right"></i>リセット</a> 
	<a href="#" class="update_btn btn">
		<i class="fa fa-caret-right"></i>更新</a>
	<a href="#" class="delete_btn btn">
		<i class="fa fa-caret-right"></i>削除</a>
	</div>
</div>
@endsection