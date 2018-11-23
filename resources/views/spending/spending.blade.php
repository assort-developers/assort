@extends('layout.common')
@section('title', '入金管理')
@section('header_title', '入金情報検索画面')

@section('content')
<div class="content_wrapper">
	<form action='/spending' method='GET'>
		<table class="table-bordered">
			<tbody>
				<tr>
					<th colspan="4">入金情報</th>
				</tr>
				<tr>
					<th>注文伝票番号</th>
					<td>001</td>
					<th class="left">社内担当者</th>
					<td>田中太郎</td>
				</tr>
				<tr>
					<th class="left">入金方法</th>
					<td></td>
					<th class="left">入金日時</th>
					<td>
						<input class="form-control" type="date" name="" maxlength="10" value="" placeholder="2000-12-31">
					</td>
				</tr>
				<tr>
					<th class="left">入金状態</th>
					<td>
						<div class="col-xs-6">
							<select class="form-control" name="pay_status">
								<option value="">未入金</option>
								<option value="">入金済</option>
							</select>
						</div>
					</td>
					<th class="left">入金額</th>
					<td>注文からの値表示</td>
				</tr>
				<tr>
					<th class="left">入金先金融機関</th>
					<td>
						<div class="col-xs-6">
							<select class="form-control" name="bank_select">
								<option value="">仕様</option>
								<option value="">未決定</option>
							</select>
						</div>
					</td>
					<th class="left">注文者口座番号</th>
					<td>どこからか取ってくる</td>
				</tr>
				<tr>
					<th class="left">最終更新者</th>
					<td></td>
					<th class="left">最終更新日</th>
					<td></td>
				</tr>
				<tr>
					
				</tr>
			</tbody>
		</table>
		<div class="controll_buttons overflow_btn">
			<a class="btn btn-dark" href="/spending_search">戻る</a>
			<a class="btn btn-success" href="/spending/update">入金更新</a>
		</div>
	</form>
</div>
@endsection