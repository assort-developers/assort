@extends('layout.common')
@section('title', '色・サイズ編集画面')
@section('header_title', '色・サイズ編集画面')

@section('content')
<div class="content_wrapper">
	<form action='' method=''>
		{{ csrf_field() }}
		<table class="table-bordered">
			<tbody>
				<tr>
					<th colspan="2">商品情報</th>
				</tr>
				<tr>
					<th>商品コード</th>
					<td>PD001</td>
				</tr>
				<tr>
					<th>商品名</th>
					<td>かなりいい感じのTシャツ</td>
				</tr>
				<tr>
					<th>商品名（カナ）</th>
					<td>カナリイイカンジノTシャツ</td>
				</tr>
				<tr>
					<th>親カテゴリ / カテゴリ</th>
					<td>アレ / ソレ</td>
				</tr>
				<tr>
					<th>ブランド</th>
					<td>やばくないTシャツ屋さん</td>
				</tr>
				<tr>
					<th>サイズ</th>
						<td class="row">
							<div class="col-xs-6"><select class="form-control select2" name="gender">
								<option value="">メンズ</option>
								<option value="">レディース</option>
								<option value="">ユニセックス</option>
							</select></div>
							<div class="col-xs-6"><select class="form-control select2" name="size">
								<option value="">S</option>
								<option value="">M</option>
								<option value="">L</option>
							</select></div>
					</td>
				</tr>
						
				<tr>
					<th>カラー</th>
					<td>
						<select class="form-control select2" name="size">
							<option value="">赤</option>
							<option value="">青</option>
							<option value="">黄</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>在庫数</th>
					<td><input class="form-control" type="number"></td>
				</tr>
				<tr>
						<th>棚番号</th>
						<td><input class="form-control" type="text"></td>
					</tr>
				<tr>
					<th>最終更新者</th>
					<td>村上透</td>
			</tr>
			<tr>
				<th>最終更新日</th>
				<td>2018/11/11</td>
			</tr>
			</tbody>
		</table>
		<div class="controll_buttons">
			<!-- {{ method_field('delete') }}
			<input type='hidden' name='id' value='1'><br> -->
			<a href="/product/1" class="btn btn-dark">戻る</a>
			<input class="btn btn-success" type='submit' value='更新'>
		</div>
	</form>
</div>
@endsection