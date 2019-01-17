@extends('layout.common')
@section('title', '顧客住所詳細画面')
@section('header_title', '顧客住所詳細画面')

@section('content')
<div class="content_wrapper">
        <form action='/customer_address/update' method='post'>
		<?= csrf_field()?>
		<table class="table-bordered">
			<tbody>
			<tr>
				<th colspan="4">顧客住所情報</th>
			</tr>
			<tr>
				<th>顧客住所id</th>
                <input class="form-control" type="hidden" name="customer_id" value="<?=$customer_address->customer_id?>">
				<td><input class="form-control" type="text" name="id" value="<?=$customer_address->id?>"readonly></td>
                <th>宛名</th>
				<td><input class="form-control" type="text" name="address_name" size="40" maxlength="40" value="<?=$customer_address->address_name?>"></td>
			</tr>
			<tr>
				<th class="left">郵便番号</th>
				<td class="row">
					<div class="col-xs-2">
						<input class="form-control" type="tel" name="zip_code1" size="3" maxlength="3" value="<?=$zip_code[0]?>" required>
					</div>
					<div class="hyphen">-</div>
					<div class="col-xs-2">
						<input class="form-control" type="tel" name="zip_code2" size="4" maxlength="4"value="<?=$zip_code[1]?>" required>
					</div>
				</td>
                <th class="left">都道府県</th>
			    <td>
                    <select class="form-control" name="address_pref">
						<option value="<?=$customer_address->address_pref?>"><?=$customer_address->getPrefName()?></option>
						<?php foreach($prefs as $index => $name): ?>
						<option value="<?=$index?>"><?=$name?></option>
						<?php endforeach; ?>
				    </select>
			    </td>
			</tr>
			<tr>
                <th class="left">市区町村</th>
                <td>
                    <input class="form-control" type="text" name="address_city" size="40" maxlength="40" value="<?=$customer_address->address_city?>" required>
                </td>
                <th class="left">番地</th>
                <td><input class="form-control" type="text" name="address_town" size="40" maxlength="40" value="<?=$customer_address->address_town?>" required></td>
			</tr>
			<tr>
				<th class="left">建物名</th>
				<td><input class="form-control" type="text" name="address_build" size="40" maxlength="40" value="<?=$customer_address->address_build?>" ></td>
                <th>電話番号</th>
				<td class="row" colspan="3">
					<div class="col-xs-3"><input class="form-control" type="tel" name="tel1" size="4" maxlength="4" value="<?=$tel[0]?>" required>
					</div>
					<div class="hyphen">-</div>
					<div class="col-xs-3"><input class="form-control" type="tel" name="tel2" size="4" maxlength="4" value="<?=$tel[1]?>" required>
					</div>
					<div class="hyphen">-</div>
					<div class="col-xs-3"><input class="form-control" type="tel" name="tel3" size="4" maxlength="4" value="<?=$tel[2]?>" required></div>
				</td>
			</tr>
			<tr>
				<th class="left">更新者</th>
				<td><input class="form-control" type="text" name="updateby" size="40" maxlength="40" value="1" required placeholder=""></td>
				<th class="left">更新日</th>
				<td><input class="form-control" type="date" name="update" value="<?=$date?>" readonly></td>
			</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
            <a class="btn btn-dark" href="/customer/show/<?=$customer_address->customer_id?>">戻る</a>
			<input class="btn btn-success" type="submit" value="顧客住所更新">
		</div>
	</form>
</div>
@endsection