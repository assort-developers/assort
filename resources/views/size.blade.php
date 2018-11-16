@extends('layout.common')
@section('title', 'サイズ管理画面')

@section('content')
	<div class="main_content">
		<h1 id="title">サイズ管理画面やで</h1>

		<table>
			<tbody>
			<tr>
				<th colspan="2">サイズ情報</th>
			</tr>
			<tr>
				<th class="left">性別</th>
				<td>
						<select name="gender">
								<option value="">メンズ</option>
								<option value="">レディース</option>
								<option value="">ユニセックス</option>
						</select>
				</td>
			</tr>
			<tr>
				<th class="left">サイズ</th>
				<td><input type="text" name="size" size="" maxlength="20" value="" placeholder="サイズ">
		</td>
			</tr>
			<tr>
				<th class="left">最終更新者</th>
				<td><input type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
			</tr>
			<tr>
				<th class="left">最終更新日</th>
				<td><input type="date" name="date" value="2018-01-01"></td>
			</tr>
			</tbody>
		</table>
		<div align="right">
		<a href="#" class="square_btn">
			<i class="fa fa-caret-right"></i>登録</a>
		<a href="#" class="reseto_btn">
			<i class="fa fa-caret-right"></i>リセット</a> 
		<a href="#" class="update_btn">
			<i class="fa fa-caret-right"></i>更新</a>
		<a href="#" class="delete_btn">
			<i class="fa fa-caret-right"></i>削除</a>
		</div>
	</div>
@endsection