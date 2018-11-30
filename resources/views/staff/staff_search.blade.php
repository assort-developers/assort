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
				<td><input class="form-control" type="text" name="staff_code" value="<?=$request->staff_code?>">
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
					<div class="col-xs-1"><input class="form-control" type="text" name="family_name" size="10" maxlength="40" value="<?=$request->family_name?>" placeholder="性"></div>
					<div class="hyphen"> </div>
					<div class="col-xs-1"><input class="form-control" type="text" name="first_name" size="10" maxlength="40" value="<?=$request->first_name?>" placeholder="名"></div>
				</td>
				<th class="">氏名（カナ）</th>
				<td class="row">
					<div class="col-xs-1"><input class="form-control" type="text" name="family_name_kana" size="10" maxlength="40" value="<?=$request->family_name_kana?>" placeholder="セイ"></div>
					<div class="hyphen"> </div>
					<div class="col-xs-1"><input class="form-control" type="text" name="first_name_kana" size="10" maxlength="40" value="<?=$request->first_name_kana?>" placeholder="メイ"></div>
				</td>
			</tr>
			<tr>
				<th class="left">入社年月日</th>
				<td><input class="form-control" type="date" name="hiredate_from" value="<?=$request->hiredate_from?>"></td>
				<th class="left">〜</th>
				<td><input class="form-control" type="date" name="hiredate_to" value="<?=$request->hiredate_to?>"></td>
			</tr>
			<tr>
				<th class="left">退社年月日</th>
				<td><input class="form-control" type="date" name="resigndate_from" value="<?=$request->resigndate_from?>"></td>
				<th class="left">〜</th>
				<td><input class="form-control" type="date" name="resigndate_to" value="<?=$request->resigndate_to?>"></td>
			</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
		<button type="button"id="query_reset_button" class="btn btn-dark">項目リセット</button>
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
			<th>メールアドレス</th>
			<th>電話番号</th>
			<th>役職</th>
			<th>入社年月日</th>
			<th>退社年月日</th>
			<th>詳細</th>
		</tr>
		
		<?php foreach($staffs as $staff): ?>
			<tr>
				<td><?=$staff->code?></td>
				<td><?=$staff->family_name?> <?=$staff->first_name?></td>
				<td><?=$staff->mail_address?></td>
				<td><?=$staff->contact_tel?></td>
				<td><?=$staff->staff_role?></td>
				<td><?=$staff->hiredate?></td>
				<td><?=$staff->resigndate?></td>
				<td class="btn-outer">
					<a href="/staff/show/<?=$staff->id?>" class="btn btn-success" >詳細</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
@endsection