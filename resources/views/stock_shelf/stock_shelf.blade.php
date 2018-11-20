@extends('layout.common')
@section('title', '棚番号管理')

@section('content')
<div class="main_content">
		<h1 id="title">棚番号管理画面<span style="font-size:8px;">商品の置き場スペースを変動させるときに追加したり削除したりする</span></h1>

		<table>
			<tbody>
			<tr>
				<th colspan="2">棚情報</th>
			</tr>
			<tr>
					<th class="left">棚コード</th>
					<td></td>
			</tr>
			<tr>
					
			<th class="left">棚番号</th>
			<td>X-00</td>
			</tr>
			<tr>
			<tr>
				<th class="left">棚位置</th>
				<td><input type="text" name="" size=5 maxlength="2" value="" placeholder="横位置">
						<input type="text" name="" size="5" maxlength="2" value="" placeholder="縦位置">
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