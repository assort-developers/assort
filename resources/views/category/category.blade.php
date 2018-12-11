@extends('layout.common')
@section('title', 'カテゴリ管理画面')
@section('header_title', 'カテゴリ管理画面')

@section('content')
	<div class="content_wrapper">
	<table class="table-bordered">
			<tbody>
			<tr>
				<th colspan="4">カテゴリ検索</th>
			</tr>
			<tr>
				<th>カテゴリコード</th>
				<td colspan="3">
					<input type="text" class="form-control" name="category_code">
				</td>
			</tr>
			<tr>
				<th>カテゴリ名</th>
				<td><input class="form-control" type="text" name="category_name" value="" placeholder="カテゴリ名"></td>
				<th>親カテゴリ</th>
				<td><input class="form-control" type="text" name="parent_category_name"  value="" placeholder="親カテゴリ名"></td>
			</tr>
			</tbody>
		</table>
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