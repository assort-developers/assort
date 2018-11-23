@extends('layout.common')
@section('title', 'カテゴリ管理画面')
@section('header_title', 'カテゴリ管理画面')

@section('content')
<div class="content_wrapper">
	<form action="/category_search" method="GET">
		{{csrf_field()}}
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
		<div class="controll_buttons overflow_btn">
			<a href="/category/create" class="btn btn-dark">新規登録</a>
			<input type="submit" class="btn btn-success" value="検索"> 
		</div>
	</form>
	<table class="table-bordered">
		<tr>
			<th colspan="5">検索結果</th>
		</tr>
		<tr>
			<th>カテゴリコード</th>
			<th class="table_main_col">カテゴリ名</th>
			<th>親カテゴリ名</th>
			<th>最終更新者</th>
			<th>最終更新日</th>
			<th>削除</th>
			<th>編集</th>
		</tr>
	</table>
</div>
@endsection