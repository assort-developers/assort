@extends('layout.common')
@section('title', 'カテゴリ詳細画面')
@section('header_title', 'カテゴリ詳細画面')

@section('content')
<div class="content_wrapper">

	<table class="table-bordered">
		<tbody>
		<tr>
			<th colspan="4">カテゴリ検索</th>
		</tr>
		<tr>
			<th>カテゴリID</th>
			<td><?=$category->id?></td>
			<th>カテゴリ名</th>
			<td><?=$category->name?></td>
		</tr>
		<tr>
			<th>親カテゴリID</th>
			<td><?=$category->parent_cat_id?></td>
			<th>親カテゴリ名</th>
			<td><?=$category->parent_cat_name?></td>
		</tr>
		<tr>
			<th class="left">更新者</th>
			<td><?=$category->staff_family_name?><?=$category->staff_first_name?></td>
			<th class="left">更新日</th>
			<td><?=$category->update?></td>
			</tr>
		</tbody>
	</table>
	<div class="controll_buttons overflow_btn">
		<a class="btn btn-dark" href="/category_search">戻る</a>
	</div>

	<form action='/category/update' method='post'>
		<?= csrf_field()?>
		<table class="table-bordered">
				<tbody>
				<tr>
					<th colspan="4">カテゴリ情報</th>
				</tr>
				<tr>
					<th>カテゴリ名</th>
					<td>
						<input class="form-control" type="hidden" name="id" value="<?=$category->id?>">
						<input class="form-control" type="text" name="name" value="<?=$category->name?>" placeholder="カテゴリ名">
					</td>
					<th>親カテゴリ</th>
					<td>
						<select class="form-control" name="parent_cat_id">
							<option value="<?=$category->parent_cat_id?>"><?=$category->parent_cat_name?></option>
							<?php foreach($parent_categorys as $parent_category):?>
							<option value="<?=$parent_category->id?>"><?=$parent_category->name?></option>
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				<tr>
				<th class="left">更新者</th>
				<td><input class="form-control" type="text" name="updateby" size="40" maxlength="40" value="1" required placeholder="OIC 太郎"></td>
				<th class="left">更新日</th>
				<td><input class="form-control" type="date" name="update" value="<?=$date?>" readonly></td>
			</tr>
				</tbody>
			</table>
		</table>
		<div class="controll_buttons overflow_btn">
			<input class="btn btn-success" type="submit" value="カテゴリ更新">
		</div>
	</form>
</div>
@endsection