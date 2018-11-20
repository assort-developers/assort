@extends('layout.common')
@section('title', 'ブランド管理画面')
@section('header_title', 'ブランド管理画面')

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
						<div class="search_box"><input class="form-control" type="text" name="brand_code"></div>
						<div class="search_button"><button class="btn btn-dark">検索</button></div>
					</td>
				</tr>
				<tr>
					<th>ブランド名</th>
					<td colspan="3">
						<div class="search_box"><input class="form-control" type="text"></div>
						<div class="search_button"><button class="btn btn-dark">検索</button></div>
					</td>
				</tr>
				<tr>
				<tr>
					<th>ブランド名（カナ）</th>
					<td colspan="3"><input class="form-control" type="text" name="" size="40" maxlength="60" value="" placeholder="oic tarou"></td>
			</tr>
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
			<input class="btn btn-success" type="submit" value="検索">
		</div>
	</form>
	<table class="table-bordered">
		<tr>
			<th colspan="9">検索結果</th>
		</tr>
		<tr>
			<th>ブランドコード</th>
			<th>ブランド名</th>
			<th>都道府県</th>
			<th>メールアドレス</th>
			<th>電話番号</th>
			<th>FAX</th>
			<th>最終更新者</th>
			<th>最終更新日</th>
			<th>詳細</th>
		</tr>
		<?php foreach($brands as $brand): ?>
			<tr>
				<td><?=$brand->id ?></td>
				<td><?=$brand->name ?></td>
				<td><?=$brand->address_pref ?></td>
				<td><?=$brand->mail ?></td>
				<td><?=$brand->tel ?></td>
				<td><?=$brand->fax ?></td>
				<td><?=$brand->updateby ?></td>
				<td><?=$brand->update ?></td>
				<td class="btn-outer">
					<a href="/brand/show/<?=$brand->id?>" class="btn btn-success" >詳細</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
@endsection