@extends('layout.common')
@section('title', 'サイズマスター検索画面')
@section('header_title', 'サイズマスタ検索画面')

@section('content')
<div class="content_wrapper">
	<form action='/size_search' method='GET'>
		<?= csrf_field()?>
		<table class="table-bordered">
			<tr>
				<th colspan="4" class="table-header">サイズ情報</th>
			</tr>
			<tr>
				<th>性別</th>
				<td>
					<select class="form-control select2" name="gender">
						<option value="">--</option>
						<option value="0">メンズ</option>
						<option value="1">レディース</option>
						<option value="2">ユニセックス</option>
					</select>
				</td>
				<th>サイズ名</th>
				<td><input class="form-control" type="text" name="print_size" size="" maxlength="20" value="" placeholder="サイズ"></td>
			</tr>
			<!-- <tr>
				<th>最終更新者</th>
				<td><input class="form-control" type="text" name="" maxlength="40" value=""></td>
				<th>最終更新日</th>
				<td><input class="form-control" type="date" name="date" value=""></td>
				</tr> -->
		</table>
		<div class="controll_buttons overflow_btn">
			<a class="btn btn-dark" href="/size/create">サイズ登録</a>
			<input class="btn btn-success" type="submit" value="検索">
		</div>
	</form>
		<table class="table-bordered">
			<tr>
				<th colspan="6">検索結果</th>
			</tr>
			<tr>
				<th>id</th>
				<th>サイズ</th>
				<th>性別</th>
				<!-- <th>最終更新者</th>
				<th>最終更新日</th> -->
				<th>詳細</th>
			</tr>
			
			<?php foreach($sizes as $size): ?>
				<tr>
					<td><?=$size->id?></td>
					<td><?=$size->print_size?></td>
					<td><?=$size->getGender()?></td>
					<!-- <td></td>
					<td></td> -->
					<td class="btn-outer">
						<a href="/size/show/<?=$size->id?>" class="btn btn-success" >詳細</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>

</div>
@endsection