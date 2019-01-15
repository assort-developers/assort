@extends('layout.common')
@section('title', '顧客住所登録画面')
@section('header_title', '顧客住所登録画面')

@section('content')
<div class="content_wrapper">
		<table class="table-bordered">
			<tbody>
			<tr>
				<th colspan="4">顧客情報</th>
			</tr>
			<tr>
				<th>顧客コード</th>
				<td><?=$customer->id?>
				</td>
				<th class="left">性別</th>
				<td><?=$customer->getGender()?></td>
			</tr>
			<tr>
				<th class="">顧客名</th>
				<td><?=$customer->family_name?> <?=$customer->first_name?></td>
				<th class="">顧客名（カナ）</th>
				<td><?=$customer->family_name_kana?> <?=$customer->first_name_kana?></td>
			</tr>
			<tr>
				<th class="left">生年月日</th>
				<td><?=$customer->birthday?></td>
				<th class="left">電話番号</th>
				<td><?=$customer->phone?></td>
			</tr>
			<tr>
				<th class="left">更新者</th>
				<td><?=$customer->updateby_family_name?> <?=$customer->updateby_first_name?></td>
				<th class="left">更新日</th>
				<td><?=$customer->update?></td>
			</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
			<a class="btn btn-dark" href="/customer_search">戻る</a>
		</div>
	<form action='/customer_address_register/store' method='post'>
		<?= csrf_field()?>
		<table class="table-bordered">
			<tbody>
			<tr>
				<th colspan="4">顧客情報</th>
			</tr>
			<tr>
				<th>顧客コード</th>
				<td><input class="form-control" name="customer_id" value="<?=$customer->id?>" readonly="readonly"></td>
				<th>宛名</th>
				<td colspan="3"><input class="form-control" type="text" name="address_name" size="40" maxlength="40" value=""></td>
			</tr>
			<tr>
				<th class="left">郵便番号</th>
				<td class="row">
					<div class="col-xs-2">
						<input class="form-control" type="tel" name="zip_code1" size="3" maxlength="3" value="" required>
					</div>
					<div class="hyphen">-</div>
					<div class="col-xs-2">
						<input class="form-control" type="tel" name="zip_code2" size="4" maxlength="4"value="" required>
					</div>
				</td>
				<th class="left">都道府県</th>
			<td>
				<select class="form-control" name="address_pref">
					<?php foreach($prefs as $index => $name): ?>
					<option value="<?=$index?>"><?=$name?></option>
					<?php endforeach;?>
				</select>
			</td>
			</tr>
			<tr>
				<th class="left">市区町村</th>
				<td>
				<input class="form-control" type="text" name="address_city" size="40" maxlength="40" value="" required>
				</td>
				<th class="left">番地</th>
				<td><input class="form-control" type="text" name="address_town" size="40" maxlength="40" value="" required></td>
			</tr>
			<tr>
				<th class="left">建物名</th>
				<td>
				<input class="form-control" type="text" name="address_build" size="40" maxlength="40" value="" >
				</td>
				<th>電話番号</th>
				<td class="row" colspan="3">
					<div class="col-xs-3"><input class="form-control" type="tel" name="tel1" size="4" maxlength="4" value="" required>
					</div>
					<div class="hyphen">-</div>
					<div class="col-xs-3"><input class="form-control" type="tel" name="tel2" size="4" maxlength="4" value="" required>
					</div>
					<div class="hyphen">-</div>
					<div class="col-xs-3"><input class="form-control" type="tel" name="tel3" size="4" maxlength="4" value="" required></div>
				</td>
			</tr>
				<th class="left">更新者</th>
				<td><input class="form-control" type="text" name="updateby" size="40" maxlength="40" value="" required placeholder="OIC 太郎"></td>
				<th class="left">更新日</th>
				<td><input class="form-control" type="date" name="update" value="<?=$date?>" readonly></td>
			</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
			<a class="btn btn-dark" href="/customer_search">戻る</a>
			<input class="btn btn-success" type="submit" value="顧客住所登録">
		</div>
	</form>
</div>
@endsection