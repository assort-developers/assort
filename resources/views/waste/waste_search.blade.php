@extends('layout.common')
@section('title', '不良品登録画面')
@section('header_title', '不良品登録画面')

@section('content')
<div class="content_wrapper">
    <form action='/waste' method='GET'>
		<table class="table-bordered">
			<tbody>
			<tr>
				<th colspan="4">不良品検索項目</th>
			</tr>
			<tr>
            <th>商品コード</th>
			<td>
				<div class="search_box"><input class="form-control" type="text" name=""maxlength="40" value="" placeholder="商品コード"></div>
				<div class="search_button"><button class="btn">検索</button></div>
			</td>
				<th class="">商品名</th>
			<td>
				<div class="search_box"><input class="form-control" type="text" name=""maxlength="40" value="" placeholder="商品名"></div>
				<div class="search_button"><button class="btn">検索</button></div>
			</td>
			</tr>
			<tr>
				<th>数量</th>
				<td>
                <input class="form-control" type="text" name="amount" maxlength="40" value="" placeholder="数量">
				</td>
                <th class="left">廃棄予定日</th>
                <td>
                    <input class="form-control" type="date" name="date" value="2018-01-01">
                </td>
			</tr>
            <tr>
                <th class="left">廃棄理由</th>
                <td colspan="3"><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="廃棄理由"></td>
            </tr>
			<tr>
                <th class="left">廃棄理由詳細</th>
                <td colspan="3"><input class="form-control" type="text" name="" size="40" maxlength="200" value="" placeholder="廃棄理由詳細"></td>
            </tr>
			<tr>
				<th>社内担当者</th>
				<td><input class="form-control" type="text" name="" maxlength="40" value="" placeholder="村上透"></td>
				<th>更新者</th>
				<td><input class="form-control" type="text" name="" maxlength="40" value="" placeholder="OIC 太郎"></td>
			</tr>
			</tbody>
		</table>
		<div class="controll_buttons">
		<a href="#" class="square_btn btn">
			<i class="fa fa-caret-right"></i>検索</a>
		<a href="#" class="square_btn btn">
			<i class="fa fa-caret-right"></i>新規登録</a>
	    </div>
	</form>
    <table class="table-bordered">
		<tr>
			<th colspan="6">検索結果</th>
		</tr>
		<tr>
			<th>商品コード</th>
			<th>商品名</th>
            <th>数量</th>
			<th>最終更新者</th>
			<th>最終更新日</th>
			<th>詳細</th>
		</tr>
		<tr>
			<td>PR001</td>
			<td>かなりいい感じのTシャツ</td>
            <td>3</td>
			<td>滝谷典子(40)</td>
			<td>2018-11-13</td>
			<td class="btn-outer">
				<a class="btn btn-success" href="/waste/1">詳細</a>
			</td>
		</tr>
	</table>
</div>
@endsection