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
					<input type="text" class="form-control" name="id" value="" placeholder="カテゴリID">
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
			<th colspan="9">検索結果</th>
		</tr>
		<tr>
			<th>カテゴリーID</th>
			<th>カテゴリー名</th>
			<th>親カテゴリーID</th>
			<th>親カテゴリー名</th>
			<th>最終更新者</th>
			<th>最終更新日</th>
			<th>詳細</th>
		</tr>
		
		<?php foreach($categorys as $category): ?>
			<tr>
				<td><?=$category->id?></td>
				<td><?=$category->name?></td>
				<td><?=$category->parent_cat_id?></td>
				<td><?=$category->parent_cat_name?></td>
				<td><?=$category->staff_family_name?><?=$category->staff_first_name?></td>
				<td><?=$category->update?></td>
				<td class="btn-outer">
					<a href="/category/show/<?=$category->id?>" class="btn btn-success" >詳細</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
@endsection