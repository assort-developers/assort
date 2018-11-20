@extends('layout.common')
@section('title', 'サイズマスター検索画面')
@section('header_title', 'サイズマスタ検索画面')

@section('content')
<div class="content_wrapper">
	<table class="table-bordered">
		<tr>
			<th colspan="4" class="table-header">サイズ情報</th>
		</tr>
		<tr>
			<th>性別</th>
			<td>
				<select class="form-control select2" name="gender">
					<option value="">メンズ</option>
					<option value="">レディース</option>
					<option value="">ユニセックス</option>
				</select>
			</td>
			<th>サイズ名</th>
			<td><input class="form-control" type="text" name="size" size="" maxlength="20" value="" placeholder="サイズ"></td>
		</tr>
		<tr>
			<th>最終更新者</th>
			<td><input class="form-control" type="text" name="" maxlength="40" value="" placeholder="OIC 太郎"></td>
			<th>最終更新日</th>
			<td><input class="form-control" type="date" name="date" value="2018-01-01"></td>
			</tr>
	</table>
	<div class="controll_buttons">
		<a href="#" class="square_btn btn">
			<i class="fa fa-caret-right"></i>検索</a>
		<a href="#" class="square_btn btn">
			<i class="fa fa-caret-right"></i>新規登録</a>
	</div>

	<table class="table-bordered search_result">
		<tr>
			<th class="table-header" colspan="7">サイズ検索結果</th>
		</tr>
		<tr class="table-header">
			<th>サイズID</th>
			<th class="table_main_col">サイズ表示名</th>
			<th >性別</th>
			<th >最終更新者</th>
			<th >最終更新日</th>
			<th class="btn-outer">編集</th>
			<th class="btn-outer">削除</th>
		</tr>
		<tr>
			<td>SZ001</td>
			<td>L</td>
			<td>メンズ</td>
			<td>村上透</td>
			<td>2018-11-09</td>
			<td class="btn-outer">
				<a href="" class="btn btn-success">編集</a>
			</td>
			<td class="btn-outer">
				<a href="" class="btn btn-danger">削除</a>
			</td>
			</tr>
		</tr>
	</table>
</div>
@endsection