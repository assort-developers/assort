@extends('layout.common')
@section('title', '顧客管理画面')
@section('header_title', '顧客管理画面')

@section('content')
<div class="content_wrapper">
	<form action='/customer_search' method='GET'>
		<?= csrf_field()?>
		<table class="table-bordered">
			<tbody>
			<tr>
				<th colspan="4">顧客情報</th>
			</tr>
			<tr>
				<th>顧客コード</th>
				<td><input class="form-control" type="text" name="id" value="<?=$request->id?>">
				</td>
				<th class="left">性別</th>
				<td><select class="form-control" name="gender">
					<option value="">--</option>
					<option value="0">男性</option>
					<option value="1">女性</option>
					<option value="2">その他</option>
				</select>
				</td>
			</tr>
			<tr>
				<th class="">顧客名</th>
				<td class="row">
					<div class="col-xs-1"><input class="form-control" type="text" name="family_name" size="10" maxlength="40" value="<?=$request->family_name?>" placeholder="性"></div>
					<div class="hyphen"> </div>
					<div class="col-xs-1"><input class="form-control" type="text" name="first_name" size="10" maxlength="40" value="<?=$request->first_name?>" placeholder="名"></div>
				</td>
				<th class="">顧客名（カナ）</th>
				<td class="row">
					<div class="col-xs-1"><input class="form-control" type="text" name="family_name_kana" size="10" maxlength="40" value="<?=$request->family_name_kana?>" placeholder="セイ"></div>
					<div class="hyphen"> </div>
					<div class="col-xs-1"><input class="form-control" type="text" name="first_name_kana" size="10" maxlength="40" value="<?=$request->first_name_kana?>" placeholder="メイ"></div>
				</td>
			</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
		<button type="button"id="query_reset_button" class="btn btn-dark">項目リセット</button>
			<a class="btn btn-dark" href="/customer/create">顧客登録</a>
			<input class="btn btn-success" type="submit" value="検索">
		</div>
	</form>
	<table class="table-bordered">
		<tr>
			<th colspan="6">検索結果</th>
		</tr>
		<tr>
			<th>顧客コード</th>
			<th>顧客名</th>
			<th>電話番号</th>
			<th>性別</th>
			<th>住所登録</th>
			<th>詳細</th>
		</tr>
		
		<?php foreach($customers as $customer): ?>
			<tr>
				<td><?=$customer->id?></td>
				<td><?=$customer->family_name?> <?=$customer->first_name?></td>
				<td><?=$customer->phone?></td>
				<td><?=$customer->gender?></td>
				<td><a class="btn btn-dark" href="/customer_address_register/<?=$customer->id?>">住所登録</a></td>
				<td class="btn-outer">
					<a href="/customer/show/<?=$customer->id?>" class="btn btn-success" >詳細</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
@endsection