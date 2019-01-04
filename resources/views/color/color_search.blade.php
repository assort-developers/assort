@extends('layout.common')
@section('title', '色検索画面')
@section('header_title', '色検索画面')

@section('content')
<div class="content_wrapper">
	<form action='/color_search' method='GET'>
		<?= csrf_field()?>	
		<table class="table-bordered">
			<tbody>
				<tr>
					<th colspan="4">色情報</th>
				</tr>
				<tr>
					<th class="left">色コード</th>
					<td><input class="form-control" type="text" name="id" size="15" maxlength="415" value="" placeholder="id"></td>
					<th class="left">色名</th>
					<td><input class="form-control" type="text" name="print_color" size="15" maxlength="415" value="<?=$request->color_print?>" placeholder="色名"></td>
				</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
			<a class="btn btn-dark" href="/color/create">色登録</a>
			<input class="btn btn-success" type="submit" value="検索">
		</div>
	</form>
	<table class="table-bordered">
		<tr>
			<th colspan="3">検索結果</th>
		</tr>
		<tr>
			<th>id</th>
			<th>色名</th>
			<th>詳細</th>
		</tr>
		
		<?php foreach($colors as $color): ?>
			<tr>
				<td><?=$color->id?></td>
				<td><?=$color->print_color?></td>
				<td class="btn-outer">
					<a href="/color/show/<?=$color->id?>" class="btn btn-success" >詳細</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
@endsection