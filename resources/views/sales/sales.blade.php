@extends('layout.common')
@section('title', '売上管理画面')

@section('content')
	<div class="main_content">
		<h1 id="title">売上管理画面</h1>

		<table>
			<tbody>
			<tr>
				<th colspan="2">売上情報</th>
			</tr>
			<tr>
			<th class="left">期間開始日</th>
			<td><input type="date" name="date" value="2018-01-01"></td>
			</tr>
		<tr>
				<th class="left">期間終了日</th>
				<td><input type="date" name="date" value="2018-01-01"></td>
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
		<img src="images/graph.png" alt="折れ線グラフ" width="70%">
	</div>
@endsection