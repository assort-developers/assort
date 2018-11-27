@extends('layout.common')
@section('title', 'ブランド登録画面')
@section('header_title', 'ブランド登録画面')

@section('content')
<div class="content_wrapper">
<form action='/brand/store' method='post'>
	<?= csrf_field()?>
		<table class="table-bordered">
			<tbody>
				<tr>
					<th colspan="4">ブランド情報</th>
				</tr>
				<tr>
					<th>ブランドコード</th>
					<td colspan="3">
						<div class="search_box"><input class="form-control" type="text" name="brand_code" value="" required></div>
					</td>
				</tr>
				<tr>
					<th>ブランド名</th>
					<td colspan="3">
						<div class="search_box"><input class="form-control" type="text" name="brand_name" value="" required></div>
					</td>
				</tr>
				<tr>
				<tr>
					<th>ブランド名（カナ）</th>
					<td colspan="3"><input class="form-control" type="text" name="brand_kana" size="40" maxlength="60" name="brand_kana" value="" required></td>
				</tr>
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
						<input class="form-control" type="text" name="address_city" size="40" maxlength="40" value="" required>
					</td>
				</tr>
				<tr>
					<th class="left">番地</th>
					<td><input class="form-control" type="text" name="address_town" size="40" maxlength="40" value="" required></td>
					<th class="left">建物名</th>
					<td><input class="form-control" type="text" name="address_build" size="40" maxlength="40" value=""></td>
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
					<th class="left">FAX</th>
					<td class="row">
						<div class="col-xs-3"><input class="form-control" type="tel" name="fax1" size="4" maxlength="4" value="" required>
						</div>
						<div class="hyphen">-</div>
						<div class="col-xs-3"><input class="form-control" type="tel" name="fax2" size="4" maxlength="4" value="" required>
						</div>
						<div class="hyphen">-</div>
						<div class="col-xs-3"><input class="form-control" type="tel" name="fax3" size="4" maxlength="4" value="" required></div>
                    </div>
					</td>
					<th class="left">社内担当者</th>
					<td><input class="form-control" type="text" name="staff_id" size="40" maxlength="40" value="" required></td>
				</tr>
				<tr>
					<th class="left">更新者</th>
					<td>自動入力にしたいよね</td>
					<th class="left">更新日</th>
					<td><?=$date?>(自動入力)</td><!-- 時刻はどうするか不明 -->
				</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
			<input class="btn btn-success" type="submit" value="ブランド登録">
		</div>
	</form>
</div>
@endsection