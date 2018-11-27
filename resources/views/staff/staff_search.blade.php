@extends('layout.common')
@section('title', '従業員管理画面')
@section('header_title', '従業員管理画面')

@section('content')
	<div class="content_wrapper">
		<form action='/staff' method='GET'>
		<table class="table-bordered">
			<tbody>
			<tr>
				<th colspan="4">従業員情報</th>
			</tr>
			<tr>
			<th class="">従業員コード</th>
			<td></td>
			</tr>
			<tr>
				<th class="">氏名</th>
				<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
			</tr>
			<tr>
				<th class="left">氏名（カナ）</th>
				<td><input class="form-control" type="text" name="" size="40" maxlength="60" value="" placeholder="オオアイシー"></td>
			</tr>
			<tr>
				<th class="left">生年月日</th>
				<td><input class="form-control" type="date" name="date" value="2018-01-01"></td>
			</tr>
			<tr>
				<th class="left">郵便番号</th>
				<td class="row">
					<div class="col-xs-2"><input class="form-control " type="tel" name="" size="3" maxlength="3"value="" placeholder="000"></div>
					<div class="hyphen">-</div>
					<div class="col-xs-3"><input class="form-control" type="text" name="" size="4" maxlength="4" value="" placeholder="0000"></div>
				</td>
			</tr>
			<tr>
				<th class="left">都道府県</th>
				<td>
					<select class="select2" name="prefecture">
								<option value="">大阪府</option>
								<option value="">奈良県</option>
								<option value="">琵琶湖</option>
						</select>
				</td>
			</tr>
			<tr>
				<th class="left">市区町村</th>
				<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="市区町村"></td>
			</tr>
			<tr>
				<th class="left">番地建物名</th>
				<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="番地建物名"></td>
			</tr>
			<tr>
				<th class="left">メールアドレス</th>
				<td><input class="form-control" type="email" name="" size="20" maxlength="40" value="" placeholder="xxxxx@xxx.xxx"></td>
			</tr>
			<tr>
				<th class="left">電話番号</th>
				<td class="row">
					<div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="0000"></div><div class="hyphen">-</div>
					<div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="1111"></div><div class="hyphen">-</div>
					<div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="2222"></div>
				</td>
			</tr>
			<tr>
				<th class="left">入社年月日</th>
						<td><input class="form-control" type="date" name="hire_date" value="2018-01-01"></td>
			</tr>
			<tr>
				<th class="left">所属部署</th>
				<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="所属部署名"></td>
			</tr>
			<tr>
				<th class="left">更新者</th>
				<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
			</tr>
			<tr>
				<th class="left">更新日</th>
				<td><input class="form-control" type="date" name="date" value="2018-01-01"></td>
			</tr>
			</tbody>
		</table>
		<div class="controll_buttons">
		<a href="#" class="square_btn btn">
			<i class="fa fa-caret-right"></i>登録</a>
		<a href="#" class="reseto_btn btn">
			<i class="fa fa-caret-right"></i>リセット</a> 
		<a href="#" class="update_btn btn">
			<i class="fa fa-caret-right"></i>更新</a>
		<a href="#" class="delete_btn btn">
			<i class="fa fa-caret-right"></i>削除</a>
		</div>
		</form>
	</div>
	<script>
        $(document).ready(function() {
            $('.select2').select2();
        });
	</script>
@endsection