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
                    <td>
                        <div class="search_box"><input class="form-control" type="text" name="recieved_code"></div>
                        <div class="search_button"><button class="btn btn-dark">検索</button></div>
				    </td>
                    <th class="left">社内担当者</th>
                    <td>
                        <input class="form-control" type="text" name=""  maxlength="40" value="" placeholder="発注担当者">
                    </td>
                </tr>
                <tr>
                    <th class="left">入金方法</th>
                    <td>
                        <input class="form-control" type="text" name=""  maxlength="40" value="" placeholder="入金方法">
                    </td>
                    <th class="left">入金日時</th>
                    <td>
				        <input class="form-control" type="text" name="" maxlength="10" value="" placeholder="2000-12-31">
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
			<a class="btn btn-dark" href="/spending/create">入金登録</a>
			<input class="btn btn-success" type="submit" value="検索">
		</div>
    </form>
    <table class="table-bordered">
		<tr>
			<th colspan="9">検索結果</th>
		</tr>
		<tr>
			<th>発注番号</th>
			<th>入金状態</th>
			<th>入金日時</th>
			<th>入金額</th>
			<th>社内担当者</th>
			<th>最終更新者</th>
			<th>最終更新日</th>
			<th>詳細</th>
		</tr>
		<tr>
			<td>001</td>
			<td>アレ / ソレ</td>
			<td>2018-11-16</td>
			<td>999円</td>
			<td>村上透</td>
			<td>滝谷典子</td>
			<td>2018-11-13</td>
			<td class="btn-outer">
				<a class="btn btn-success" href="/spending/1">詳細</a>
			</td>
		</tr>
	</table>
</div>
@endsection