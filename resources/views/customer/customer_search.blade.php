@extends('layout.common')
@section('title', '顧客管理画面')
<<<<<<< HEAD
@section('header_title','顧客管理画面')

@section('content')
	<div class="content_wrapper">
	   <table class="table-bordered">
=======
@section('header_title', '顧客管理画面')

@section('content')
	<div class="content_wrapper">
		<table class="table-bordered">
>>>>>>> develop
		<tbody>
		<tr>
			<th colspan="2">顧客情報</th>
		</tr>
<<<<<<< HEAD
		<tr class="">
            <th>顧客コード</th>
=======
		<tr>
		<th class="">顧客コード</th>
>>>>>>> develop
		<td></td>
		</tr>
		<tr>
			<th class="">顧客名</th>
			<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
		</tr>
		<tr>
			<th class="left">顧客名（カナ）</th>
<<<<<<< HEAD
			<td><input class="form-control" type="text" name="" size="40" maxlength="60" value="" placeholder="oic tarou"></td>
		</tr>
		<tr>
			<th>性別</th>
			<td>
					<select class="form-control select2" name="gender">
							<option value="">メンズ</option>
							<option value="">レディース</option>
							<option value="">ユニセックス</option>
=======
			<td><input class="form-control" type="text" name="" size="40" maxlength="60" value="" placeholder="オオアイシー"></td>
		</tr>
		<tr>
			<th class="left">性別</th>
			<td>
					<select class="form-control" name="gender">
							<option value="">男性</option>
							<option value="">女性</option>
							<option value="">その他</option>
>>>>>>> develop
					</select>  
			</td>
		</tr>
		<tr>
			<th class="left">生年月日</th>
			<td><input class="form-control" type="date" name="date" value="2018-01-01"></td>
		</tr>
		<tr> 
			<th class="left">郵便番号</th>
			<td class="row">
<<<<<<< HEAD
                <div class="col-xs-2">
                    <input class="form-control" type="tel" name="" size="3" maxlength="3" value="" placeholder="000"></div>
                    <div class="hyphen">-</div>
                <div class="col-xs-2">
                    <input class="form-control" type="text" name="" size="4" maxlength="4" value="" placeholder="0000"></div>  
=======
				<div class="col-xs-2"><input class="form-control " type="tel" name="" size="3" maxlength="3"value="" placeholder="000"></div>
				<div class="hyphen">-</div>
				<div class="col-xs-3"><input class="form-control" type="text" name="" size="4" maxlength="4" value="" placeholder="0000"></div>
>>>>>>> develop
			</td>
		</tr>
		<tr>
			<th class="left">都道府県</th>
			<td>       
					<select class="select2" name="prefecture">
							<option value="">大阪府</option>
							<option value="">奈良県</option>
							<option value="">琵琶湖</option>
<<<<<<< HEAD
					</select></td>
=======
					</select>
			</td>
>>>>>>> develop
		</tr>
		<tr>
			<th class="left">市区町村</th>
			<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="市区町村">
		</tr>
<<<<<<< HEAD
				<tr>
					<th class="left">番地建物名</th>
			<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="番地建物名">
				</tr>
=======
		<tr>
			<th class="left">番地建物名</th>
			<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="番地建物名">
		</tr>
>>>>>>> develop
		<tr>
			<th class="left">メールアドレス</th>
			<td><input class="form-control" type="email" name="" size="20" maxlength="40" value="" placeholder="xxxxx@xxx.xxx"></td>
		</tr>
		<tr>
			<th class="left">電話番号</th>
			<td class="row">
<<<<<<< HEAD
                <div class="col-xs-3">
                    <input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="0000"></div>
                    <div class="hyphen">-</div>
                <div class="col-xs-3">
                    <input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="1111"></div>
                    <div class="hyphen">-</div>
                <div class="col-xs-3">
                    <input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="2222"></div>  
			</td>
		</tr>
		<tr>
			<th class="left">最終更新者</th>
			<td><input class="for-control" type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
		</tr>
		<tr>
			<th class="left">最終更新日</th>
=======
				<div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="0000"></div><div class="hyphen">-</div>
				<div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="1111"></div><div class="hyphen">-</div>
				<div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="2222"></div>
			</td>
		</tr>
		<tr>
			<th class="left">更新者</th>
			<td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
		</tr>
		<tr>
			<th class="left">更新日</th>
>>>>>>> develop
			<td><input class="form-control" type="date" name="date" value="2018-01-01"></td>
		</tr>
		</tbody>
	</table>
<<<<<<< HEAD
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
=======
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
		<script>
            $(document).ready(function() {
                $('.select2').select2();
            });
		</script>
>>>>>>> develop
</div>
@endsection