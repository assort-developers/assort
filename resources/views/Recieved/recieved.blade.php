@extends('layout.common')
@section('title', '受注管詳細画面')
@section('header_title', '受注詳細画面')

@section('content')
    <div class="content_wrapper">

            <table class="table-bordered">
                <tbody>
                <tr>
                    <th colspan='4'>受注情報</th>
                </tr>
                <tr>
                    <th>受注コード</th>
                    <td>{{$recieved->id}}</td>
                    <th class="left">注文日</th>
                    <td>{{$recieved->created_at}}</td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>{{$recieved->customer_address->contact_tel}}</td>
                    <th>郵便番号</th>
                    <td>{{$recieved->customer_address->zip_code}}</td>
                </tr>
                <tr>
                    <th class="left">都道府県</th>
                    <td>{{$recieved->customer_address->address_pref}}</td>
                    <th class="left">市区町村</th>
                    <td>{{$recieved->customer_address->address_city}}</td>
                </tr>
                <tr>
                    <th class="left">住所詳細</th>
                    <td>{{$recieved->customer_address->address_town}}</td>
                    <th class="left">建物名</th>
                    <td>{{$recieved->customer_address->address_builld}}</td>
                </tr>
                <tr>
                    <th class="left">支払い総額</th>
                    <td>{{$total_price}}</td>
                    <th class="left">支払い方法</th>
                    <td>クレジットカード</td>
                </tr>
                </tbody>
            </table>
            
            <div class="controll_buttons overflow_btn">
                <a class="btn btn-dark" href="/recieved_search">戻る</a>
            </div>
            <table class="table-bordered">
                <tbody>
                <tr>
                    <th colspan='6'>受注商品情報</th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>商品名</th> 
                    <th>数量</th>
                    <th>出荷状態</th>
                    <th>出荷日</th>
                    <th>最終更新日</th>
                </tr>
                @foreach($recieved_contents as $content)
                    <tr>
                        <td>{{$content->id}}</td>
                        <td>{{$content->product->product_codename->name}}</td>
                        <td>{{$content->quantity}}</td>
                        <td>{{$content->getStatus()}}</td>
                        <td>{{$content->shipment_date}}</td>
                        <td>{{$content->updated_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        <form action="/recieved/update" method="post">
            {{csrf_field()}}
            <div class="controll_buttons overflow_btn">
                <input type="hidden" name="id" value="{{$recieved->id}}">
                <input class="btn btn-success" type="submit" value="出荷完了">
            </div>
        </form>
        </div>
    </div>
@endsection