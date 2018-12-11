@extends('layout.common')
@section('title', '色情報登録画面')
@section('header_title', '色情報登録画面')

@section('content')
<div class="content_wrapper">
	<form action='/color/store' method='post'>
		<?= csrf_field()?>
		<table class="table-bordered">
			<tbody>
			<tr>
				<th colspan="2">色情報</th>
			</tr>
			<tr>
				<th class="left">色名</th>
				<td><input class="form-control" type="text" name="print_color" size="15" maxlength="415" value="" placeholder="色名" required></td>
			</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
			<a class="btn btn-dark" href="/color_search">戻る</a>
			<input class="btn btn-success" type="submit" value="色名登録">
		</div>
	</form>
</div>
@endsection