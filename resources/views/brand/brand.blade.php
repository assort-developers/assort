@extends('layout.common')
@section('title', 'ブランド管理画面')
@section('header_title', 'ブランド管理詳細画面')

@section('content')
<div class="content_wrapper">
	<table class="table-bordered">
		<tbody>
			<tr>
				<th colspan="4">ブランド情報</th>
				</tr>
			<tr>
				<th>ブランドコード</th>
				<td colspan="3">
					<?=$brand->id?>
				</td>
			</tr>
			<tr>
				<th>ブランド名</th>
				<td colspan="3">
					<?=$brand->name?>
				</td>
			</tr>
			<tr>
			<tr>
				<th>ブランド名（カナ）</th>
				<td colspan="3">
					<?=$brand->kana?>
				</td>
			</tr>
			<tr>
				<th class="left">郵便番号</th>
				<td class="row">
					<?=$brand->zip_code?>
				</td>
				<th class="left">都道府県</th>
				<td>
					<?=$brand->address_pref?>
				</td>
			</tr>
			<tr>
				<th class="left">市区町村</th>
				<td>
					<?=$brand->address_city?>
				</td>
				<th class="left">番地建物名</th>
				<td>
					<?=$brand->address_build?>
				</td>
			</tr>
			<tr>
				<th class="left">メールアドレス</th>
				<td>
					<?=$brand->mail?>
				</td>
				<th class="left">電話番号</th>
				<td class="row">
					<?=$brand->tel?>
				</td>
			</tr>
			<tr>
				<th class="left">FAX</th>
				<td>
					<?=$brand->fax?>
				</td>
				<th class="left">社内担当者</th>
				<td>
					<?=$brand->staff_id?>
				</td>
			</tr>
			<tr>
				<th class="left">更新者</th>
				<td>
					<?=$brand->updateby?>
				</td>
				<th class="left">更新日</th>
				<td>
					<?=$brand->update?>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="controll_buttons overflow_btn">
		<a class="btn btn-dark" href="/brand_search">戻る</a>
	</div>
</div>

<div class="content_wrapper">
	<form action='/brand/update' method='post'>
	<?= csrf_field()?>
		<table class="table-bordered">
			<tbody>
				<tr>
					<th colspan="4">ブランド情報</th>
				</tr>
				<tr>
					<th>ブランドコード</th>
					<td colspan="3">
						<div class="search_box"><input class="form-control" type="text" name="brand_code" readonly="readonly" value="<?=$brand->id?>"></div>
					</td>
				</tr>
				<tr>
					<th>ブランド名</th>
					<td colspan="3">
						<div class="search_box"><input class="form-control" type="text" name="brand_name" value="<?=$brand->name?>"></div>
					</td>
				</tr>
				<tr>
				<tr>
					<th>ブランド名（カナ）</th>
					<td colspan="3"><input class="form-control" type="text" name="" size="40" maxlength="60" name="brand_kana" value="<?=$brand->kana?>"></td>
				</tr>
				</tr>
				<tr>
					<th class="left">郵便番号</th>
					<td class="row">
						<div class="col-xs-2">
							<input class="form-control" type="tel" name="zip_code1" size="3" maxlength="3" value="<?=$zip_code[0]?>">
						</div>
						<div class="hyphen">-</div>
						<div class="col-xs-2">
							<input class="form-control" type="tel" name="zip_code2" size="4" maxlength="4"value="<?=$zip_code[1]?>">
						</div>
				</tr>
				<tr>
					<th class="left">都道府県</th>
					<td>
						<select class="form-control" name="prefecture">
							<option value="">大阪府</option>
							<option value="">奈良県</option>
							<option value="">琵琶湖</option>
						</select>
					</td>
					<th class="left">市区町村</th>
					<td>
						<input class="form-control" type="text" name="address_city" size="40" maxlength="40" value="<?=$brand->city?>">
					</td>
				</tr>
				<tr>
					<th class="left">番地</th>
					<td><input class="form-control" type="text" name="address_town" size="40" maxlength="40" value="<?=$brand->town?>"></td>
					<th class="left">建物名</th>
					<td><input class="form-control" type="text" name="address_build" size="40" maxlength="40" value="<?=$brand->build?>"></td>
				</tr>
				<tr>
					<th class="left">メールアドレス</th>
					<td>
						<input class="form-control" type="email" name="mail" size="20" maxlength="40" value="<?=$brand->mail?>">
					</td>
					<th class="left">電話番号</th>
					<td class="row">
                        <div class="col-xs-3"><input class="form-control" type="tel" name="tel1" size="4" maxlength="4" value="<?=$tel[0]?>">
                        </div>
						<div class="hyphen">-</div>
                        <div class="col-xs-3"><input class="form-control" type="tel" name="tel2" size="4" maxlength="4" value="<?=$tel[1]?>">
                        </div>
						<div class="hyphen">-</div>
                        <div class="col-xs-3"><input class="form-control" type="tel" name="tel3" size="4" maxlength="4" value="<?=$tel[2]?>"></div>
					</td>
				</tr>
				<tr>
					<th class="left">FAX</th>
					<td class="row">
						<div class="col-xs-3"><input class="form-control" type="tel" name="fax1" size="4" maxlength="4" value="">
						</div>
						<div class="hyphen">-</div>
						<div class="col-xs-3"><input class="form-control" type="tel" name="fax2" size="4" maxlength="4" value="">
						</div>
						<div class="hyphen">-</div>
						<div class="col-xs-3"><input class="form-control" type="tel" name="fax3" size="4" maxlength="4" value=""></div>
                    </div>
					</td>
					<th class="left">社内担当者</th>
					<td><input class="form-control" type="text" name="staff_id" size="40" maxlength="40" value="<?=$brand->staff_id?>"></td>
				</tr>
				<tr>
					<th class="left">更新者</th>
					<td><input class="form-control" type="text" name="updateby" size="40" maxlength="40" value=""></td>
					<th class="left">更新日</th>
					<td><input class="form-control" type="date" name="date" value=""></td><!-- 時刻はどうするか不明 -->
				</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
			<input class="btn btn-success" type="submit" value="ブランド更新">
		</div>
	</form>
</div>	
@endsection