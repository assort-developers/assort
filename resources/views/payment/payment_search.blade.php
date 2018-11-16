@extends('layout.common')
@section('title', '出金管理')
@section('header_title', '出金情報検索画面')

@section('content')
<div class="content_wrapper">
    <form action='/payment' method='GET'>
        <table class="table-bordered">
            <tbody>
                <tr>
                    <th colspan="4">出金情報</th>
                </tr>
                <tr>
                    <th>発注伝票番号</th>
                    <td>
                        <div class="search_box"><input class="form-control" type="text" name="order_code"></div>
                        <div class="search_button"><button class="btn btn-dark">検索</button></div>
				    </td>
                    <th class="left">社内担当者</th>
                    <td>
                        <input class="form-control" type="text" name=""  maxlength="40" value="" placeholder="発注担当者">
                    </td>
                </tr>
                <tr>
                    <th class="left">出金方法</th>
                    <td>
                        <input class="form-control" type="text" name=""  maxlength="40" value="" placeholder="出金方法">
                    </td>
                    <th class="left">出金日時</th>
                    <td>
				        <input class="form-control" type="text" name="" maxlength="10" value="" placeholder="2000-12-31">
			        </td>
                </tr>
                <tr>
                    <th class="left">出金状態</th>
                    <td>
                        <div class="col-xs-6">
                            <select class="form-control" name="pay_status">
                                <option value="">未出金</option>
                                <option value="">出金済</option>
                            </select>
                        </div>
                    </td>
                    <th class="left">出金額</th>
                    <td>発注からの値表示</td>
                </tr>
                <tr>
                    <th class="left">出金先金融機関</th>
                    <td>
                        <div class="col-xs-6">
                            <select class="form-control" name="bank_select">
                                <option value="">仕様</option>
                                <option value="">未決定</option>
                            </select>
                        </div>
                    </td>
                    <th class="left">仕入先口座番号</th>
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
			<a class="btn btn-dark" href="/payment/create">出金登録</a>
			<input class="btn btn-success" type="submit" value="検索">
		</div>
    </form>
    <table class="table-bordered">
		<tr>
			<th colspan="9">検索結果</th>
		</tr>
		<tr>
			<th>発注番号</th>
			<th>出金状態</th>
			<th>出金日時</th>
			<th>出金額</th>
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
				<a class="btn btn-success" href="/payment/1">詳細</a>
			</td>
		</tr>
	</table>
</div>
@endsection