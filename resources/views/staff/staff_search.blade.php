@extends('layout.common')
@section('title', '従業員管理画面')
@section('header_title', '従業員管理画面')

@section('content')
<div class="content_wrapper">
	<form action='/staff' method='GET'>
		<?= csrf_field()?>
		<table class="table-bordered">
			<tbody>
			<tr>
				<th colspan="4">従業員情報</th>
			</tr>
			<tr>
				<th>従業員コード</th>
				<td colspan="3"></td>
			</tr>
			<tr>
				<th class="">氏名</th>
				<td class="row">
					<div class="col-xs-1"><input class="form-control" type="text" name="familly_name" size="10" maxlength="40" value="" placeholder="性"></div>
					<div class="hyphen"> </div>
					<div class="col-xs-1"><input class="form-control" type="text" name="first_name" size="10" maxlength="40" value="" placeholder="名"></div>
				</td>
				<th class="">氏名（カナ）</th>
				<td class="row">
					<div class="col-xs-1"><input class="form-control" type="text" name="familly_name_kana" size="10" maxlength="40" value="" placeholder="セイ"></div>
					<div class="hyphen"> </div>
					<div class="col-xs-1"><input class="form-control" type="text" name="first_name_kana" size="10" maxlength="40" value="" placeholder="メイ"></div>
				</td>
			</tr>
			<tr>
				<th class="left">生年月日</th>
				<td><input class="form-control" type="date" name="birthdate" value="2018-01-01"></td>
				<th class="left">郵便番号</th>
				<td class="row">
					<div class="col-xs-2">
						<input class="form-control" type="tel" name="zip_code1" size="3" maxlength="3" value="">
					</div>
					<div class="hyphen">-</div>
					<div class="col-xs-2">
						<input class="form-control" type="tel" name="zip_code2" size="4" maxlength="4"value="">
					</div>
				</td>
			</tr>
			<tr>
			<th class="left">都道府県</th>
			<td>
				<select class="form-control" name="address_pref">
					<?php foreach($prefs as $index => $name): ?>
					<option value="<?=$index?>"><?=$name?></option>
					<?php endforeach; ?>
				</select>
			</td>
			<th class="left">市区町村</th>
			<td>
				<input class="form-control" type="text" name="address_city" size="40" maxlength="40" value="">
				</td>
			</tr>
			<tr>
				<th class="left">番地</th>
				<td><input class="form-control" type="text" name="address_town" size="40" maxlength="40" value=""></td>
				<th class="left">建物名</th>
				<td><input class="form-control" type="text" name="address_build" size="40" maxlength="40" value=""></td>
			</tr>
			<tr>
				<th class="left">メールアドレス</th>
				<td>
					<input class="form-control" type="email" name="mail" size="20" maxlength="40" value="">
				</td>
				<th class="left">電話番号</th>
				<td class="row">
					<div class="col-xs-3"><input class="form-control" type="tel" name="tel1" size="4" maxlength="4" value="">
					</div>
					<div class="hyphen">-</div>
					<div class="col-xs-3"><input class="form-control" type="tel" name="tel2" size="4" maxlength="4" value="">
					</div>
					<div class="hyphen">-</div>
					<div class="col-xs-3"><input class="form-control" type="tel" name="tel3" size="4" maxlength="4" value=""></div>
				</td>
			</tr>
			<tr>
				<th class="left">入社年月日</th>
				<td><input class="form-control" type="date" name="hire_date" value="2018-01-01"></td>
				<th class="left">役職</th>
				<td><input class="form-control" type="text" name="staff_role" size="40" maxlength="40" value="" placeholder="役職"></td>
			</tr>
			<tr>
				<th class="left">更新者</th>
				<td><input class="form-control" type="text" name="updateby" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
				<th class="left">更新日</th>
				<td><input class="form-control" type="date" name="update" value="2018-01-01"></td>
			</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
			<a class="btn btn-dark" href="/staff/create">従業員登録</a>
			<input class="btn btn-success" type="submit" value="検索">
		</div>
	</form>
	<table class="table-bordered">
		<tr>
			<th colspan="9">検索結果</th>
		</tr>
		<tr>
			<th>従業員コード</th>
			<th>従業員名</th>
			<th>年齢</th>
			<th>メールアドレス</th>
			<th>電話番号</th>
			<th>役職</th>
			<th>入社年月日</th>
			<th>詳細</th>
		</tr>
		
		<?php foreach($staffs as $staff): ?>
			<tr>
				<td><?=$staff->code?></td>
				<td><?=$staff->family_name?> <?=$staff->first_name?></td>
				<td><?=$staff->getAge($staff->birthday)?></td>
				<td><?=$staff->mail_address?></td>
				<td><?=$staff->contact_tel?></td>
				<td><?=$staff->staff_role?></td>
				<td><?=$staff->hiredate?></td>
				<td class="btn-outer">
					<a href="/staff/show/<?=$staff->id?>" class="btn btn-success" >詳細</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
@endsection