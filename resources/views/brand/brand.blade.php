@extends('layout.common')
@section('title', '仕入先管理画面')

@section('content')
	<div class="main_content">
			<h1 id="title">仕入先管理画面</h1>

			<table>
				<tbody>
				<tr>
					<th colspan="2">仕入先情報</th>
				</tr>
				<tr>
				<th class="left">仕入先コード</th>
				<td></td>
				</tr>
				<tr>
					<th class="left">仕入先名</th>
					<td><input type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
				</tr>
				<tr>
					<th class="left">仕入先名（カナ）</th>
					<td><input type="text" name="" size="40" maxlength="60" value="" placeholder="oic tarou"></td>
				</tr>
				<tr>
					<th class="left">郵便番号</th>
					<td><input type="tel" name="" size="3" maxlength="3"value="" placeholder="000">-
							<input type="text" name="" size="4" maxlength="4" value="" placeholder="0000"></td>
				</tr>
				<tr>
					<th class="left">都道府県</th>
					<td>
							<select name="gender">
									<option value="">大阪府</option>
									<option value="">奈良県</option>
									<option value="">琵琶湖</option>
							</select>
					</td>
				</tr>
						<tr>
					<th class="left">市区町村</th>
					<td><input type="text" name="" size="40" maxlength="40" value="" placeholder="市区町村"></td>
				</tr>
				<tr>
					<th class="left">番地建物名</th>
					<td><input type="text" name="" size="40" maxlength="40" value="" placeholder="番地建物名"></td>
				</tr>
				<tr>
					<th class="left">メールアドレス</th>
					<td>
							<input type="email" name="" size="20" maxlength="40" value="" placeholder="xxxxx@xxx.xxx">
					</td>
				</tr>
				<tr>
					<th class="left">電話番号</th>
					<td>
							<input type="tel" name="" size="4" maxlength="4" value="" placeholder="0000">-
							<input type="tel" name="" size="4" maxlength="4" value="" placeholder="1111">-
							<input type="tel" name="" size="4" maxlength="4" value="" placeholder="2222">
					</td>
				</tr>
				<tr>
					<th class="left">FAX</th>
					<td>
					<input type="tel" name="" size="4" maxlength="4" value="" placeholder="0000">-
					<input type="tel" name="" size="4" maxlength="4" value="" placeholder="1111">-
					<input type="tel" name="" size="4" maxlength="4" value="" placeholder="2222">
					</td>
				</tr>
				<tr>
					<th class="left">社内担当者</th>
					<td><input type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
				</tr>
				<tr>
				<tr>
					<th class="left">更新者</th>
					<td><input type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
				</tr>
				<tr>
					<th class="left">更新日</th>
					<td><input type="date" name="date" value="2018-01-01"></td>
				</tr>
				</tbody>
			</table>
			<div align="right">
			<a href="#" class="square_btn">
				<i class="fa fa-caret-right"></i>登録</a>
			<a href="" class="reseto_btn">
				<i class="fa fa-caret-right"></i>リセット</a> 
			<a href="#" class="update_btn">
				<i class="fa fa-caret-right"></i>更新</a>
			<a href="#" class="delete_btn">
				<i class="fa fa-caret-right"></i>削除</a>
			</div>
		</div>
@endsection