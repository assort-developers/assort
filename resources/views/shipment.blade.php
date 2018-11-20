@extends('layout.common')
@section('title', '発送管理')

@section('content')
    <div class="main_content">
        <h1 id="title">発送管理画面</h1>

        <table>
            <tbody>
            <tr>
                <th colspan="2">発送情報</th>
            </tr>
            <tr>
                <th class="left">発送状態</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">注文番号</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">注文日時</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">顧客ID</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">合計金額</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">ピッキング完了日</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">パッキング完了日</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">伝票出力日</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">発送日</th>
                <td></td>
            </tr><tr>
                <th class="left">支払い金額</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">最終更新者</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">最終更新日</th>
                <td></td>
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