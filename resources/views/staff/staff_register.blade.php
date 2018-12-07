@extends('layout.common')
@section('title', '従業員詳細画面')
@section('header_title', '従業員詳細画面')

@section('content')
<div class="content_wrapper">
	<form action='/staff/store' method='post'>
		<?= csrf_field()?>
		<table class="table-bordered">
			<tbody>
			<tr>
				<th colspan="4">従業員情報</th>
			</tr>
			<tr>
				<th>従業員コード</th>
				<td>
				<input class="form-control" type="text" name="staff_code" value="" required>
				</td>
                <th class="left">役職</th>
				<td><select class="form-control" name="staff_role_id">
					<option value="">--</option>
					<?php foreach($staffroles as $staffrole): ?>
					<option value="<?=$staffrole->id?>"><?=$staffrole->name?></option>
					<?php endforeach; ?>
				</select>
				</td>
			</tr>
			<tr>
				<th class="">氏名</th>
				<td class="row">
					<div class="col-xs-1"><input class="form-control" type="text" name="family_name" size="10" maxlength="40" value="" placeholder="性" required></div>
					<div class="hyphen"> </div>
					<div class="col-xs-1"><input class="form-control" type="text" name="first_name" size="10" maxlength="40" value="" placeholder="名" required></div>
				</td>
				<th class="">氏名（カナ）</th>
				<td class="row">
					<div class="col-xs-1"><input class="form-control" type="text" name="family_name_kana" size="10" maxlength="40" value="" placeholder="セイ" required></div>
					<div class="hyphen"> </div>
					<div class="col-xs-1"><input class="form-control" type="text" name="first_name_kana" size="10" maxlength="40" value="" placeholder="メイ" required></div>
				</td>
			</tr>
			<tr>
				<th class="left">生年月日</th>
				<td><input class="form-control" type="date" name="birthday" value=""></td>
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
			</tr>
			<tr>
			<th class="left">都道府県</th>
			<td>
				<select class="form-control" name="address_pref">
					<option value="">--</option>
					<?php foreach($prefs as $index => $name): ?>
					<option value="<?=$index?>"><?=$name?></option>
					<?php endforeach; ?>
				</select>
			</td>
			<th class="left">市区町村</th>
			<td>
				<input class="form-control" type="text" name="address_city" size="40" maxlength="40" value="" required>
				</td>
			</tr>
			<tr>
				<th class="left">番地</th>
				<td><input class="form-control" type="text" name="address_town" size="40" maxlength="40" value="" required></td>
				<th class="left">建物名</th>
				<td><input class="form-control" type="text" name="address_build" size="40" maxlength="40" value="" ></td>
			</tr>
			<tr>
				<th class="left">メールアドレス</th>
				<td>
					<input class="form-control" type="email" name="mail" size="20" maxlength="40" value="" required>
				</td>
				<th class="left">電話番号</th>
				<td class="row">
					<div class="col-xs-3"><input class="form-control" type="tel" name="tel1" size="4" maxlength="4" value="" required>
					</div>
					<div class="hyphen">-</div>
					<div class="col-xs-3"><input class="form-control" type="tel" name="tel2" size="4" maxlength="4" value="" required>
					</div>
					<div class="hyphen">-</div>
					<div class="col-xs-3"><input class="form-control" type="tel" name="tel3" size="4" maxlength="4" value="" required></div>
				</td>
			</tr>
			<tr>
				<th class="left">入社年月日</th>
				<td><input class="form-control" type="date" name="hiredate" value=""></td>
				<th class="left">退社年月日</th>
				<td><input class="form-control" type="date" name="resigndate" value=""readonly></td>
			</tr>
			<tr>
				<th class="left">更新者</th>
				<td><input class="form-control" type="text" name="updateby" size="40" maxlength="40" value="" required placeholder="OIC 太郎"></td>
				<th class="left">更新日</th>
				<td><input class="form-control" type="date" name="update" value="<?=$date?>" readonly></td>
			</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
            <a class="btn btn-dark" href="/staff_search">戻る</a>
			<input class="btn btn-success" type="submit" value="従業員登録">
		</div>
	</form>
</div>
@endsection