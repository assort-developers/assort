@extends('layout.common')
@section('title', '顧客詳細画面')
@section('header_title', '顧客詳細画面')

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
				<th class="left">郵便番号</th>
				<td><?=$customer_address[0]->zip_code?></td>
			</tr>
			<tr>
			<th class="left">都道府県</th>
			<td><?=$customer_address[0]->getPrefName()?></td>
			<th class="left">市区町村</th>
			<td><?=$customer_address[0]->address_city?></td>
			</tr>
			<tr>
				<th class="left">番地</th>
				<td><?=$customer_address[0]->address_town?></td>
				<th class="left">建物名</th>
				<td><?=$customer_address[0]->address_build?></td>
			</tr>
			<tr>
				<th class="left">電話番号</th>
				<td><?=$customer->phone?></td>
				<th class="left">携帯番号</th>
				<td><?=$customer->mobile_phone?></td>
			</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
            <a class="btn btn-dark" href="/customer_search">戻る</a>
		</div>
	<form action='/customer/update' method='post'>
		<?= csrf_field()?>
		<table class="table-bordered">
			<tbody>
			<tr>
				<th colspan="4">顧客情報</th>
			</tr>
			<tr>
				<th>顧客コード</th>
				<td colspan="3"><input class="form-control" name="id" value="<?=$customer->id?>" readonly="readonly"></td>
			</tr>
			<tr>
				<th class="">顧客名</th>
				<td class="row">
					<div class="col-xs-1"><input class="form-control" type="text" name="family_name" size="10" maxlength="40" value="<?=$customer->family_name?>" placeholder="性" required></div>
					<div class="hyphen"> </div>
					<div class="col-xs-1"><input class="form-control" type="text" name="first_name" size="10" maxlength="40" value="<?=$customer->first_name?>" placeholder="名" required></div>
				</td>
				<th class="">顧客名（カナ）</th>
				<td class="row">
					<div class="col-xs-1"><input class="form-control" type="text" name="family_name_kana" size="10" maxlength="40" value="<?=$customer->family_name_kana?>" placeholder="セイ" required></div>
					<div class="hyphen"> </div>
					<div class="col-xs-1"><input class="form-control" type="text" name="first_name_kana" size="10" maxlength="40" value="<?=$customer->first_name_kana?>" placeholder="メイ" required></div>
				</td>
			</tr>
			<tr>
				<th class="left">生年月日</th>
				<td><input class="form-control" type="date" name="birthday" value="<?=$customer->birthday?>"></td>
				<th>性別</th>
                <td>
                    <select class="form-control select2" name="gender">
                        <option value="<?=$customer->gender?>"><?=$customer->getGender()?></option>
                        <option value="0">メンズ</option>
                        <option value="1">レディース</option>
                    </select>
                </td>
			</tr>
			<tr>
			<tr>
				<th class="left">電話番号</th>
				<td class="row">
					<div class="col-xs-3"><input class="form-control" type="tel" name="phone1" size="4" maxlength="4" value="<?=$phone[0]?>" required>
					</div>
					<div class="hyphen">-</div>
					<div class="col-xs-3"><input class="form-control" type="tel" name="phone2" size="4" maxlength="4" value="<?=$phone[1]?>" required>
					</div>
					<div class="hyphen">-</div>
					<div class="col-xs-3"><input class="form-control" type="tel" name="phone3" size="4" maxlength="4" value="<?=$phone[2]?>" required></div>
				</td>
				<th class="left">携帯番号</th>
				<td class="row">
					<div class="col-xs-3"><input class="form-control" type="tel" name="mphone1" size="4" maxlength="4" value="<?=$mobile_phone[0]?>" required>
					</div>
					<div class="hyphen">-</div>
					<div class="col-xs-3"><input class="form-control" type="tel" name="mphone2" size="4" maxlength="4" value="<?=$mobile_phone[1]?>" required>
					</div>
					<div class="hyphen">-</div>
					<div class="col-xs-3"><input class="form-control" type="tel" name="mphone3" size="4" maxlength="4" value="<?=$mobile_phone[2]?>" required></div>
				</td>
			</tr>
			<tr>
				<th class="left">更新者</th>
				<td><input class="form-control" type="text" name="updateby" size="40" maxlength="40" value="1" required placeholder="1"></td>
				<th class="left">更新日</th>
				<td><input class="form-control" type="date" name="update" value="<?=$date?>" readonly></td>
			</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
			<input class="btn btn-success" type="submit" value="顧客更新">
		</div>
	</form>
	<table class="table-bordered">
		<tr>
			<th colspan="6">検索結果</th>
		</tr>
		<tr>
			<th>顧客住所ID</th>
			<th>宛名</th>
			<th>住所</th>
			<th>詳細</th>
		</tr>
		
		<?php foreach($customer_address as $address): ?>
			<tr>
				<td><?=$address->id?></td>
				<td><?=$address->address_name?></td>
				<td><?=$address->getPrefName()?><?=$address->address_city?><?=$address->address_town?></td>
				<td class="btn-outer">
					<a href="/customer_address/<?=$address->customer_id?>/show/<?=$address->id?>" class="btn btn-success" >詳細</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
@endsection