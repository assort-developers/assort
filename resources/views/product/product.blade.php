@extends('layout.common')
@section('title', '商品詳細管理')
@section('header_title', '商品詳細画面')

@section('content')
<div class="content_wrapper">
	<table class="table-bordered">
		<tr>
			<th colspan="4">商品デザイン詳細</th>
		</tr>
		<tr>
			<th>ブランドコード</th>
			<td>BR001</td>
			<th>ブランド名</th>
			<td>やばくないTシャツ屋さん</td>
		</tr>
		<tr>
			<th>親カテゴリ</th>
			<td>
				<select class="form-control select2" name="" id="">
					<option value="">アレ</option>
					<option value="">コレ</option>
					<option value="">ドレ</option>
				</select>
			</td>
			<th>カテゴリ</th>
			<td>
				<select class="form-control select2" name="" id="">
					<option value="">ソレ</option>
					<option value="">ホレ</option>
					<option value="">オレ</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>販売価格</th>
			<td>
				<input class="form-control search_box" type="text" placeholder="999">
				<span class="hyphen">円</span>
			</td>
			<th>社内担当者</th>
			<td>
				<input class="form-control" type="text" name="" maxlength="40" value="" placeholder="村上透">
			</td>
		</tr>
		<tr>
			<th >最終更新者</th>
			<td>
				<input class="form-control" type="text" name="" maxlength="40" value="" placeholder="村上透">
			</td>	
			<th >最終更新日</th>
			<td>
				<input class="form-control" type="date" name="date" value="2018-01-01">
			</td>
		</tr>
	</table>
	<div class="controll_buttons overflow_btn">
		<form action='/product/1' method='POST'>
			{{ csrf_field() }}
			{{ method_field('delete') }}
			<input class="btn btn-danger" type="submit" value="デザイン削除">
		</form>
	</div>
	<table class="table-bordered search_result">
		<tr>
			<th class="table-header" colspan="8">サイズ検索結果</th>
		</tr>
		<tr class="table-header">
			<th>商品サイズID</th>
			<th class="">性別</th>
			<th class="">サイズ</th>
			<th class="">色</th>
			<th >棚番号</th>
			<th >在庫数</th>
			<th class="btn-outer">編集</th>
			<th class="btn-outer">削除</th>
		</tr>
		<tr>
			<td>PR1001</td>
			<td>メンズ</td>
			<td>L</td>
			<td>モノトーン</td>
			<td>A001</td>
			<td>10</td>
			<td class="btn-outer">
				<a href="/product/1/size/1" class="btn btn-success">編集</a>
			</td>
			<td class="btn-outer">
				<form action='/product/1/size/1' method='POST'>
					{{ csrf_field() }}
					{{ method_field('delete') }}
					<input class="btn btn-danger" type="submit" value="削除">
				</form>
			</td>
			</tr>
		</tr>
	</table>
</div>
@endsection