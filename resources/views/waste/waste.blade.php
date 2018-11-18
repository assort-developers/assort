@extends('layout.common')
@section('title', '不良品登録画面')
@section('header_title', '不良品詳細画面')

@section('content')
<div class="content_wrapper">
		<table class="table-bordered">
			<tbody>
			<tr>
				<th colspan="4">不良品検索項目</th>
			</tr>
			<tr>
			<th>商品コード</th>
			<td>BR001</td>
			<th>商品名</th>
			<td>やばくないTシャツ屋さん</td>
		</tr>
			<tr>
				<th>数量</th>
				<td>3</td>
                <th class="left">廃棄予定日</th>
                <td>2018-01-01</td>
			</tr>
            <tr>
                <th class="left">廃棄理由</th>
                <td colspan="3">廃棄理由表示</td>
            </tr>
			<tr>
                <th class="left">廃棄理由詳細</th>
                <td colspan="3">腐ってやがる</td>
            </tr>
			<tr>
				<th>社内担当者</th>
				<td>村上透</td>
				<th>更新者</th>
				<td>OIC 太郎</td>
			</tr>
			</tbody>
		</table>
        <div class="controll_buttons overflow_btn">
		<form action='/product/1' method='POST'>
			{{ csrf_field() }}
			{{ method_field('delete') }}
			<input class="btn btn-danger" type="submit" value="不良品削除">
		</form>
	</div>
</div>
@endsection