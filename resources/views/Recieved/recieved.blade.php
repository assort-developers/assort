@extends('layout.common')
@section('title', '受注管詳細画面')
@section('header_title', '受注詳細画面')

@section('content')
    <div class="content_wrapper">

        <form>
            <table class="table-bordered">
                <tbody>
                <tr>
                    <th colspan='4'>受注情報</th>
                </tr>
                <tr>
                    <th>受注コード</th>
                    <td>{{$recieved->code}}</td>
                    <th class="left">受注者</th>
                    <td>{{$recieved->staff_name}}</td>
                </tr>

                <tr>
                    <th class="left">注文日</th>
                    <td><?=$recieved->order_day?></td>
                    <th class="left">発送日</th>
                    <td>{{$recieved->shipment_day}}</td>
                </tr>
                <tr>
                    <th>郵便番号</th>
                    <td colspan="3">{{$recieved->address_code}}</td>
                </tr>
                <tr>
                    <th class="left">メールアドレス</th>
                    <td>{{$recieved->mail}}</td>
                    <th>電話番号</th>
                    <td><?=$recieved->tel?></td>
                </tr>
                <tr>
                    <th class="left">都道府県</th>
                    <td>{{$recieved->ken}}</td>
                    <th class="left">市区町村</th>
                    <td>{{$recieved->town}}</td>
                </tr>
                <tr>
                    <th class="left">番地</th>
                    <td>{{$recieved->number}}</td>
                    <th class="left">建物名</th>
                    <td>{{$recieved->builld}}</td>
                </tr>
                <tr>
                    <th class="left">支払い金額</th>
                    <td><?=$recieved->price?></td>
                    <th class="left">支払い方法</th>
                    <td><?=$recieved->pay?></td>
                </tr>
                <tr>
                    <th class="left">更新者</th>
                    <td>取得したみ</td>
                    <th class="left">更新日</th>
                    <td><?=$recieved->update_day?></td>
                </tr>
                </tbody>
            </table>
            <div class="controll_buttons overflow_btn">
                <a class="btn btn-dark" href="/recieved_search">戻る</a>
            </div>
        </form>

        <form>
        <table class="table-bordered">
            <tbody>
            <tr>
                <th colspan='4'>受注情報</th>
            </tr>
            <tr>
                <th>受注コード</th>
                <td>{{$recieved->code}}</td>
                <th class="left">受注者</th>
                <td><input class="form-control" type="text" name="" size="40" maxlength="40" value="{{$recieved->staff_name}}"></td>
            </tr>

            <tr>
                <th class="left">注文日</th>
                <td>{{$recieved->order_day}}</td>
                <th class="left">発送日</th>
                <td><input class="form-control" type="date" name="date" value="{{$recieved->shipment_day}}"></td>
            </tr>
            <tr>
                <th class="left">郵便番号</th>
                <td class="row">
                    <div class="col-xs-2">
                        <input class="form-control" type="tel" name="zip_code1" size="3" maxlength="3" value="{{$address_code[0]}}">
                    </div>
                    <div class="hyphen">-</div>
                    <div class="col-xs-2">
                        <input class="form-control" type="tel" name="zip_code2" size="4" maxlength="4"value="{{$address_code[1]}}">
                    </div>
                </td>
            </tr>
            <tr>
                <th class="left">メールアドレス</th>
                <td><input class="form-control" type="email" name="mail" size="20" maxlength="40" value="<?=$recieved->mail?>" required></td>
                <th class="left">電話番号</th>
                <td class="row">
                    <div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="{{$tel[0]}}"></div><div class="hyphen">-</div>
                    <div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="{{$tel[1]}}"></div><div class="hyphen">-</div>
                    <div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="{{$tel[2]}}"></div>
                </td>
            </tr>
            <tr>
                <th class="left">都道府県</th>
                <td>
                    <select class="form-control" name="addres_pref">
                        <option value="">北海道</option>
                        <option value="">東京</option>
                        <option value="">大阪</option>
                        <option value="">沖縄</option>
                    </select>
                <th class="left">市区町村</th>
                <td><input class="form-control" type="text" name="addres_city" value="{{$recieved->town}}"></td>
            </tr>
            <tr>
                <th class="left">番地</th>
                <td><input class="form-control" type="text" name="addres_town" value="{{$recieved->number}}"></td>
                <th class="left">建物名</th>
                <td><input class="form-control" type="text" name="addres_build" value="{{$recieved->builld}}"></td>
            </tr>
            <tr>
            <th class="left">支払い金額</th>
            <td>受注から取ってくる</td>
                <th class="left">支払い方法</th>
                <td>
                    <select class="form-control" name="payment">
                        <option value="">クレジットカード</option>
                        <option value="">口座</option>
                        <option value="">後払い</option>
                        <option value="">銀行振込</option>
                        <option value="">新しい支払方法(ディビットカード等)</option>
                        <option value="">後払い</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th class="left">更新者</th>
                <td>{{$recieved->update_day}}</td>
                <th class="left">更新日</th>
                <td>取得したいなぁ</td>
            </tr>
            </tbody>
        </table>
        <div class="controll_buttons overflow_btn">
            <input class="btn btn-success" type="submit" value="受注更新">
        </div>
        </form>
        </div>
    </div>
@endsection