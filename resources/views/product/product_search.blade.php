@extends('layout.common')
@section('title', '商品検索画面')
@section('header_title', '商品検索画面')

@section('content')
<div class="content_wrapper">
	<form action='/product' method='GET'>
		<table class="table-bordered">
			<tbody>
			<tr>
				<th colspan="4">デザイン検索項目</th>
			</tr>
			<tr>
				<th>仕入先コード</th>
				<td>
					<div class="search_box"><input class="form-control" type="text" name="brand_code"></div>
					<div class="search_button"><button class="btn btn-dark">検索</button></div>
				</td>
				<th class="">仕入先名</th>
				<td>
					<div class="search_box"><input class="form-control" type="text"></div>
					<div class="search_button"><button class="btn btn-dark">検索</button></div>
				</td>
			</tr>
			<tr>
				<th>商品コード</th>
				<td>
					<div class="search_box"><input class="form-control" type="text"></div>
					<div class="search_button"><button class="btn btn-dark ">検索</button></div>
				</td>
				<th class="">商品名</th>
				<td>
					<div class="search_box"><input class="form-control " type="text"></div>
					<div class="search_button"><button class="btn btn-dark ">検索</button></div>
				</td>
			</tr>
			<tr>
				<th>親カテゴリ</th>
				<td>
					<select class="form-control" name="" id="">
						<option value="">アレ</option>
						<option value="">コレ</option>
						<option value="">ドレ</option>
					</select>
				</td>
				<th>カテゴリ</th>
				<td>
					<select class="form-control" name="" id="">
						<option value="">ソレ</option>
						<option value="">ホレ</option>
						<option value="">オレ</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>価格</th>
				<td>
					<input class="form-control search_box" type="number">
					<span class="hyphen">円</span>
				</td>
				<th> ～ </th>
				<td>
					<input class="form-control search_box" type="number">
					<span class="hyphen">円</span>
				</td>
			</tr>
			<tr>
				<th>社内担当者</th>
				<td><input class="form-control" type="text" name="" maxlength="40" value="" placeholder="村上透"></td>
				<th>更新者</th>
				<td><input class="form-control" type="text" name="" maxlength="40" value="" placeholder="OIC 太郎"></td>
			</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
			<a class="btn btn-dark" href="/product/create">デザイン登録</a>
			<input class="btn btn-success" type="submit" value="検索">
		</div>
	</form>
	<table class="table-bordered">
		<tr>
			<th colspan="9">検索結果</th>
		</tr>
		<tr>
			<th>デザインID</th>
			<th>カテゴリ</th>
			<th>商品名</th>
			<th>ブランド名</th>
			<th>販売価格</th>
			<th>社内担当者</th>
			<th>最終更新者</th>
			<th>最終更新日</th>
			<th>詳細</th>
		</tr>
		<tr>
			<td>PR001</td>
			<td>アレ / ソレ</td>
			<td>かなりいい感じのTシャツ</td>
			<td>やばくないTシャツ屋さん</td>
			<td>999円</td>
			<td>村上透</td>
			<td>滝谷典子</td>
			<td>2018-11-13</td>
			<td class="btn-outer">
				<a class="btn btn-success" href="/product/1">詳細</a>
			</td>
		</tr>
	</table>
</div>
@endsection