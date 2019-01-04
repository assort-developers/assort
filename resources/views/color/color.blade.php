@extends('layout.common')
@section('title', '色情報詳細画面')
@section('header_title', '色情報詳細画面')

@section('content')
<div class="content_wrapper">
	<form action='/color/update' method='post'>
		<?= csrf_field()?>
		<table class="table-bordered">
			<tbody>
			<tr>
				<th colspan="4">色情報</th>
			</tr>
			<tr>
				<th class="left">色コード</th>
				<td><input class="form-control" type="text" name="id" size="15" maxlength="415" value="<?=$color->id?>" readonly="readonly"></td>
				<th class="left">色名</th>
				<td><input class="form-control" type="text" name="print_color" size="15" maxlength="415" value="<?=$color->print_color?>" placeholder="色名" requrired></td>
			</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
			<a class="btn btn-dark" href="/color_search">戻る</a>
			<input class="btn btn-success" type="submit" value="色名更新">
		</div>
	</form>
</div>
@endsection