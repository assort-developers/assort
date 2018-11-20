@extends('layout.common')
@section('title', 'ブランド管理画面')
@section('header_title', 'ブランド管理詳細画面')

@section('content')
<div class="content_wrapper">
	<form action='/brand' method='GET'>
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
						<div class="col-xs-2">
							<input class="form-control" type="tel" name="" size="3" maxlength="3"value="" placeholder="000">
						</div>
						<div class="hyphen">-</div>
						<div class="col-xs-2">
							<input class="form-control" type="tel" name="" size="4" maxlength="4"value="" placeholder="0000">
						</div>
					<th class="left">都道府県</th>
					<td>
						<select class="form-control" name="prefecture">
							<option value="">大阪府</option>
							<option value="">奈良県</option>
							<option value="">琵琶湖</option>
						</select>
					</td>
				</tr>
				<tr>
					<th class="left">市区町村</th>
					<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="市区町村"></td>
					<th class="left">番地建物名</th>
					<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="番地建物名"></td>
				</tr>
				<tr>
					<th class="left">メールアドレス</th>
					<td>
						<input class="form-control" type="email" name="" size="20" maxlength="40" value="" placeholder="xxxxx@xxx.xxx">
					</td>
					<th class="left">電話番号</th>
					<td class="row">
                        <div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="0000">
                        </div>
						<div class="hyphen">-</div>
                        <div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="1111">
                        </div>
						<div class="hyphen">-</div>
                        <div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="2222"></div>
					</td>
				</tr>
				<tr>
					<th class="left">FAX</th>
					<td class="row">
						<div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="0000">
						</div>
						<div class="hyphen">-</div>
						<div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="1111">
						</div>
						<div class="hyphen">-</div>
						<div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="2222"></div>
                    </div>
					</td>
					<th class="left">社内担当者</th>
					<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
				</tr>
				<tr>
					<th class="left">更新者</th>
					<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
					<th class="left">更新日</th>
					<td><input class="form-control" type="date" name="date" value="2018-01-01"></td>
				</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
			<a class="btn btn-dark" href="/brand/create">ブランド登録</a>
		</div>
	</form>
@endsection