@extends('layout.common')
@section('title', '受注登録画面')
@section('header_title', '受注登録画面')

@section('content')
    <div class="content_wrapper">
        <form action="/recieved_store" method="POST">
        {{ csrf_field() }}
        <table class="table-bordered">
            <tbody>
            <tr>
                <th colspan='4'>受注情報</th>
            </tr>
            <tr>
                <th class="left">注文日</th>
                <td><input class="form-control" type="date" name="order_day" value="{{date('Y-m-d')}}" required></td>
                <th class="left">連絡先電話番号</th>
                <td class="row">
                    <div class="col-xs-3"><input class="form-control" type="tel" name="tel1" size="4" minlength="3" maxlength="4" value required></div><div class="hyphen">-</div>
                    <div class="col-xs-3"><input class="form-control" type="tel" name="tel2" size="4" minlength="3" maxlength="4" value required></div><div class="hyphen">-</div>
                    <div class="col-xs-3"><input class="form-control" type="tel" name="tel3" size="4" minlength="4" maxlength="4" value required></div>
                </td>
            </tr>
            <tr>
                <th>顧客名</th>
                <td>
                    <div class="col-xs-8"><input type="text" id="customer_name_box" class="form-control"></div>
                    <input type="hidden" name="customer_id" id="customer_id">
                    <button type="button" id="customer_search_button" class="btn btn-dark">検索</button><span class="hide right" id="customer_result_ok"></span>
                </td>
                <th>配送先住所</th>
                <td>
                    <select name="customer_address_id" class="form-control" id="customer_address"></select>
                </td>
            </tr>
            <tr>
                <th class="left">郵便番号</th>
                <td class="row">
                    <div class="col-xs-2">
                        <input class="form-control" readonly id="zip1" type="tel" name="address_code1" size="3" maxlength="3" value required>
                    </div>
                    <div class="hyphen">-</div>
                    <div class="col-xs-2">
                        <input class="form-control" readonly id="zip2" type="tel" name="address_code2" size="4" maxlength="4"value required>
                    </div>
                </td>
                <th class="left">都道府県</th>
                <td>
                    <input type="text" class="form-control"  id="pref" readonly>
                </td>
            </tr>
            <tr>
                <th class="left">市区町村</th>
                <td><input class="form-control" type="text" id="city" name="" readonly required></td>
                <th class="left">番地</th>
                <td><input class="form-control" type="text" id="town" name="town" readonly required></td>
            </tr>
            <tr>
                <th class="left">建物名</th>
                <td colspan="3"><input class="form-control" type="text" id="build" name="" readonly required></td>
            </tr>
            <tr>
                <th class="left">送料</th>
                <td><input class="form-control" type="number" name="shipment_charge" value required></td>
                <th class="left">支払い方法</th>
                <td>
                    <select class="form-control" name="pay">
                        <option value="1" selected>クレジットカード</option>
                    </select>
                </td>
            </tr>

            </tbody>
        </table>
            <div class="controll_buttons overflow_btn">
                <a class="btn btn-dark" href="/recieved_search">戻る</a>
                <input class="btn btn-success" type="submit" value="次へ">
            </div>
        </form>
        </div>
    </div>
    <script>
    customer_address = [];
    $(function(){
        $('#customer_search_button').click(function(){
            customer_address = [];
            let customer_name = $('#customer_name_box').val();
            let param = { customer_name : customer_name };
            $.ajax({	
                url:"/api/customer_search", // 通信先のURL
                type:"GET",		// 使用するHTTPメソッド
                data: param , // 送信するデータ
                dataType:"json", // 応答のデータの種類 
                                // (xml/html/script/json/jsonp/text)
                timespan:1000 	
            }).done(function(data,textStatus,jqXHR) {
                $('#customer_id').val(data.customer_id[0].id)
                $('#customer_result_ok').text('顧客データ'+data.customer_id.length + '件見つかりました').show();
                console.log(data.customer_id[0].id);
                customer_address = data.cusomter_address;
                $.each(data.cusomter_address, function(index, val){
                    $('#customer_address').append($('<option>', {value: val.id, text: val.address_city+val.address_town}));
                    // console.log(val);
                });
                $('#zip1').val(data.cusomter_address[0].zip1);
                $('#zip2').val(data.cusomter_address[0].zip2);
                $('#pref').val(data.cusomter_address[0].pref_print);
                $('#city').val(data.cusomter_address[0].address_city);
                $('#town').val(data.cusomter_address[0].address_town);
                $('#build').val(data.cusomter_address[0].address_build);
                // console.log(data.customer_id.length);
            });
            $('#customer_address').change(function(){
                // $.each(cusomter_address, function(idx, val){

                // });
                for(let i = 0; i < customer_address.length; i++){
                    if(customer_address[i].id == $(this).val()){
                        let val = customer_address[i];
                        $('#zip1').val(val.zip1);
                        $('#zip2').val(val.zip2);
                        $('#pref').val(val.pref_print);
                        $('#city').val(val.address_city);
                        $('#town').val(val.address_town);
                        $('#build').val(val.address_build);
                    }
                }
            });

        });
    });
    </script>
@endsection