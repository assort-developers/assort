@extends('layout.common')
@section('title', 'カテゴリ詳細画面')
@section('header_title', 'カテゴリ詳細画面')

@section('content')
<div class="content_wrapper">
	<form action='/category/store' method='post'>
		<?= csrf_field()?>
		<table class="table-bordered">
				<tbody>
				<tr>
					<th colspan="4">カテゴリ情報</th>
				</tr>
				<tr>
					<th>カテゴリ名</th>
					<td>
						<input class="form-control" type="hidden" name="id" value="">
						<input class="form-control" type="text" name="name" value="" placeholder="カテゴリ名">
					</td>
					<th>親カテゴリ</th>
					<td>
						<select class="form-control" name="parent_cat_id">
							<option value="">--</option>
							<?php foreach($parent_categorys as $parent_category):?>
							<option value="<?=$parent_category->id?>"><?=$parent_category->name?></option>
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				<tr>
				<th class="left">更新者</th>
				<td><input class="form-control" type="text" name="updateby" size="40" maxlength="40" value="1" required placeholder="1"></td>
				<th class="left">更新日</th>
				<td><input class="form-control" type="date" name="update" value="<?=$date?>" readonly></td>
			</tr>
				</tbody>
			</table>
		</table>
		<div class="controll_buttons overflow_btn">
			<a class="btn btn-dark" href="/category_search">戻る</a>
			<input class="btn btn-success" type="submit" value="カテゴリ登録">
		</div>
	</form>
</div>
@endsection