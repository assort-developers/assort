@extends('layout.common')
@section('title', '売上管理画面')
@section('header_title', '売上管理画面')

@section('content')
	<div class="content_wrapper">
        <table class="table-bordered">
			<tbody>
			<tr>
				<th colspan="2">売上情報</th>
			</tr>
			<tr>
			<th class="left">期間開始日</th>
			<td><input class="form-control" type="date" name="date" value="2018-01-01"></td>
			</tr>
		<tr>
				<th class="left">期間終了日</th>
				<td><input class="form-control" type="date" name="date" value="2018-01-01"></td>
			</tr>
		<tr>
				<th class="left">総利益</th>
				<td></td>
			</tr>
		<tr>
				<th class="left">売上純利益</th>
				<td></td>
			</tr>
		<tr>
				<th class="left">売上計上日</th>
				<td></td>
			</tr>
		</tbody>
		</table>
        <div class="controll_buttons overflow_btn">
			<input class="btn btn-success" type="submit" value="検索">
		</div>
		<img src="images/graph.png" alt="折れ線グラフ" width="70%">
	</div>
@endsection