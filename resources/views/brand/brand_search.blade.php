@extends('layout.common')
@section('title', 'ブランド管理画面')
@section('header_title', 'ブランド管理画面')

@section('content')
<div class="content_wrapper">
	<form action='/brand_search' method='GET'>
	<?= csrf_field()?>
		<table class="table-bordered">
			<tbody>
				<tr>
					<th colspan="4">ブランド情報</th>
				</tr>
				<tr>
					<th>ブランドコード</th>
					<td>
						<div class="search_box"><input class="form-control" type="text" name="brand_code" value="<?=$request->brand_code??''?>"></div>
					</td>
					<th>ブランド名</th>
					<td>
						<div class="search_box"><input class="form-control" type="text" name="brand_name" value="<?=$request->brand_name??''?>"></div>
					</td>
				</tr>
				<!-- <tr>
					<th class="left">社内担当者</th>
					<td>
						<input class="form-control" type="text" name="staff_name" size="40" maxlength="40" value="<=$request->staff_name??''>" placeholder="staff_idを入力">
					</td>
				</tr> -->
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
			<a class="btn btn-dark" href="/brand/create">ブランド登録</a>
			<input class="btn btn-success" type="submit" value="検索">
		</div>
	</form>
	<table class="table-bordered">
		<tr>
			<th colspan="9">検索結果</th>
		</tr>
		<tr>
			<th>ブランドコード</th>
			<th>ブランド名</th>
			<th>都道府県</th>
			<th>メールアドレス</th>
			<th>電話番号</th>
			<th>FAX</th>
			<th>社内担当者</th>
			<th>最終更新日</th>
			<th>詳細</th>
		</tr>
		
		<?php foreach($brands as $brand): ?>
			<tr>
				<td><?=$brand->code?></td>
				<td><?=$brand->name?></td>
				<td><?=$brand->getPrefName()?></td>
				<td><?=$brand->mail?></td>
				<td><?=$brand->tel?></td>
				<td><?=$brand->fax?></td>
				<td><?=$brand->staff_family_name?><?=$brand->staff_first_name?></td>
				<td><?=$brand->update?></td>
				<td class="btn-outer">
					<a href="/brand/show/<?=$brand->id?>" class="btn btn-success" >詳細</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
@endsection