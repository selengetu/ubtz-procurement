@extends('layouts.master') @section('style')
    <link rel="stylesheet" href="{{ asset('plugins/datatables/jquery.dataTables.css') }}"> @endsection @section('content')
    <!-- Main content -->
    <div class="content" style="margin-top: 1rem;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="m-0">Харилцагчийн мэдээлэл</h5>
                                </div>
                                <div class="col-md-2" >
                                    <button class="btn btn-primary form-control" onclick="storecustomer()" data-toggle="modal" data-target="#myModal" style="padding-bottom: 10px;">
                                        <i class="fa fa-plus" style="color: #fff;"> Харилцагч бүртгэл</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Харилцагчид</a>
                            </li>
                            <li class="nav-item  disabled disabledTab">
                                <a class="nav-link" id="history" data-toggle="tab" href="#historydetail" role="tab" aria-controls="history" aria-selected="false">Харилцагчийн мэдээлэл</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card-body table-responsive">

                                    <br>
                                    <table id="example1" class="table table-bordered table-striped " style="font-size: 12px">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Хавсаргасан файл</th>
                                            <th>Харилцагчийн нэр</th>
                                            <th>Харилцагчийн харьяалагдах улс</th>
                                            <th>Улсын бүртгэлийн гэрчилгээний регистрийн дугаар</th>
                                            <th>НӨАТ төлөгчийн дугаар</th>
                                            <th>Харилцагчийн хаяг</th>
                                            <th>Харилцагчийн холбоо барих</th>
                                            <th>Харилцагчийн мэдээлэл</th>
                                            <th>Бүртгэсэн хэрэглэгч</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($customer as $i=>$item)
                                            <tr class="history" onclick="historydetail({{$item->customerid}})" data-id="{{$item->customerid}}" tag="" >
                                                <td>{{ $i+1 }}</td>
                                                <td>
                                                    <button type="button" onclick="preview_image({{$item->customerid}})" class="btn btn-info btn-xs" data-toggle="modal" data-target="#photomodal" id="photobutton"><i class="fa fa-address-card" aria-hidden="true"></i></button>
                                                </td>
                                                <td>{{ $item->customername }}</td>
                                                <td>{{ $item->country_name }}</td>
                                                <td>{{ $item->nat_regno }}</td>
                                                <td>{{ $item->vat_regno }}</td>
                                                <td>{{ $item->post_address }}</td>
                                                <td>{{ $item->contact_phone_list }}</td>
                                                <td>{{ $item->customer_note }}</td>
                                                <td>{{ $item->name }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>

                            <div class="tab-pane fade" id="historydetail" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="col-md-12">
                                <table id="main" class="table table-bordered table-striped " style="font-size: 12px">
                                    <thead>
                                    <tr>

                                        <th>Харилцагчийн харьяалагдах улс</th>
                                        <th>Үйл ажиллагааны чиглэл</th>
                                        <th>Харилцагчийн нэр</th>
                                        <th>Улсын бүртгэлийн гэрчилгээний регистрийн дугаар</th>
                                        <th>НӨАТ төлөгчийн дугаар</th>
                                        <th>Харилцагчийн имейл хаяг</th>
                                        <th>Харилцагчийн хаяг</th>
                                        <th>Харилцагчийн холбоо барих</th>
                                        <th>Харилцагчийн мэдээлэл</th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>

                                <table id="ceo" class="table table-bordered table-striped " style="font-size: 12px">
                                    <thead>
                                    <tr>

                                        <th>Удирдлагын нэр</th>
                                        <th>Удирдлагын регистрийн дугаар</th>
                                        <th>Удирдлагын холбоо барих</th>
                                        <th>УБТЗ-ын Гэрээ байгуулсан хариуцагч ажилтан</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>

                                <table id="blacklist" class="table table-bordered table-striped " style="font-size: 12px">
                                    <thead>
                                    <tr>

                                        <th>Хар жагсаалтанд орсон огноо</th>
                                        <th>Үргэлжлэх хугацаа</th>
                                        <th>Тайлбар</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                    <table id="companyhistory" class="table table-bordered table-striped " style="font-size: 12px">
                                        <thead>
                                        <tr>

                                            <th>Харьцсан чиглэл</th>
                                            <th>Огноо</th>
                                            <th>Гэрээний дугаар</th>
                                            <th>Биелүүлсэн эсэх</th>
                                            <th>Өр төлбөр байгаа эсэх</th>
                                            <th>Ашиг сонирхолын зөрчил байгаа эсэх</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="storecustomer" method="POST" id="customer" enctype="multipart/form-data">
                    <div class="modal-header">Харилцагчийн бүртгэл
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="scheduler-border">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="invoiceno">Харилцагчийн нэр</label>
                                    <input class="form-control" id="customerid" type="text" name="customerid" style="display: none"/>
                                    <input class="form-control" required id="customername" type="text" name="customername" placeholder="" />
                                </div>
                                <div class="col-md-4">
                                    <label for="blank_type">Харьяалагдах улс</label>
                                    <select name="nation" required="" style="width: 100%; padding-bottom: 10px;" id="nation"
                                            class='form-control select2'>
                                        <option value="0" disabled>Сонгоно уу!</option>
                                        @foreach($country as $countries)
                                            <option value="{{$countries->country_id }}" >{{$countries->country_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="blank_type">НӨАТ төлөгчийн дугаар</label>
                                    <input class="form-control" id="vat_regno" type="text" name="vat_regno" placeholder=""/>
                                </div>
                                <div class="col-md-8">
                                    <label for="to_emp">Улсын бүртгэлийн гэрчилгээний регистрийн дугаар</label>
                                    <input class="form-control" required id="nat_regno" type="text" name="nat_regno" placeholder=""/>
                                </div>


                                <div class="col-md-4">

                                    <label for="seri">Харилцагчийн e-mail хаяг</label>
                                    <input class="form-control" id="customer_email" type="text" name="customer_email"  placeholder=""/>
                                </div>
                                <div class="col-md-4">

                                    <label for="seri">Холбоо барих дугаар</label>
                                    <input class="form-control" id="contact_phone_list" type="text" name="contact_phone_list"  placeholder=""/>
                                </div>
                                <div class="col-md-4">

                                    <label for="seri">Туршлага /Оноос хойш/</label>
                                    <input class="form-control" id="experience_from" type="text" name="experience_from"  placeholder=""/>
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="invoiceno">Харилцагчийн хаяг</label>
                                    <input class="form-control" id="post_address" type="text" name="post_address" />
                                </div>
                                <div class="col-md-4">

                                    <label for="seri">Банк</label>
                                    <select name="bank_id" required="" style="width: 100%; padding-bottom: 10px;" id="bank_id"
                                            class='form-control select2'>
                                        <option value="0" disabled>Сонгоно уу!</option>
                                        @foreach($bank as $banks)
                                            <option value="{{$banks->bank_id }}" >{{$banks->bank_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">

                                    <label for="seri">Дансны дугаар</label>
                                    <input class="form-control" id="bank_no" type="text" name="bank_no"  placeholder=""/>
                                </div>
                             
                                <div class="col-md-12">
                                    <label for="invoiceno">Харилцагчийн үйл ажиллагааны чиглэл</label>
                                    <input class="form-control" id="business_route" type="text" name="business_route" />
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="invoiceno">Удирдлагын овог нэр</label>
                                    <input class="form-control"  id="ceo_name" min=1 type="text" name="ceo_name" placeholder=""/>
                                </div>
                                <div class="col-md-4">
                                    <label for="invoiceno">Регистрийн дугаар</label>
                                    <input class="form-control"  id="ceo_regno" min=1 type="text" name="ceo_regno" placeholder="" />
                                </div>
                                <div class="col-md-4">
                                    <label for="to_emp">Удирдлагын холбоо барих</label>
                                    <input class="form-control"  id="ceo_phone_list" type="text" name="ceo_phone_list" placeholder=""/>
                                </div>
                                <div class="col-md-4">
                                    <label for="blank_type">Хар жагсаалтанд орсон эсэх</label>
                                    <select name="is_black_listed"  style="width: 100%; padding-bottom: 10px;" id="is_black_listed" class='form-control select2'>
                                        <option value="1">Тийм</option>
                                        <option value="0">Үгүй</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="invoiceno">Хар жагсаалтанд орсон огноо</label>
                                    <input class="form-control" id="black_list_begin" type="date" name="black_list_begin" />
                                </div>
                                <div class="col-md-4">

                                    <label for="seri">Хар жагсаалтанд орох хугацаа</label>
                                    <input class="form-control" id="black_list_expire" type="date" name="black_list_expire" />

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="notes">Хар жагсаалтанд орсон шалтгаан</label>
                                    <input class="form-control" value="Тайлбар" id="black_note" type="text" name="black_note" />
                                </div>
                            </div>

                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <button type="submit" id="btnsave" class="btn btn-primary">Хадгалах</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Хаах</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="photomodal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">Хавсаргасан зураг
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>


                <div class="modal-body">

                    <div class="col-md-12">
                        <form id="customerphoto" action="storecustomerphoto" method="post"  enctype="multipart/form-data">
                            @csrf
                        <div class="form-group row">
                            <div class="col-md-5">
                                <input class="form-control" id="cusid" type="text" name="cusid" style="display: none"/>
                                <label for="to_emp">Хавсралтын төрөл </label>
                                <select name="filecatcode" required="" style="width: 100%; padding-bottom: 10px;" id="filecatcode" class='form-control select2'>
                                    <option value="0" disabled>Сонгоно уу!</option>
                                    @foreach($filecat_contract as $item)
                                        <option value="{{ $item->filecatcode }}">{{ $item->filecatname }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-5">
                                <label for="notes">Хавсралт</label>
                                <input class="form-control" value="Тайлбар" id="customer_note" type="file" name="customer_note[]" multiple="" />
                            </div>

                                <div class="col-md-2">
                                    <label for="notes">.</label>
                                    <button  class="form-control" type="submit" id="btnsave" class="btn btn-primary">Хадгалах</button>
                                </div>
                        </div>
                </form>
                       <table id="imagetable">
                           <tbody>

                           </tbody>
                       </table>
                    </div>
                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>

        </div>
    </div>
                                                                                                           <style>
                                                                                                               .disabledTab {
                                                                                                                   pointer-events: none;
                                                                                                               }
                                                                                                           </style>
@endsection
@section('script')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example1').DataTable({
                "pageLength": 25
            });
            const customer_id = {{$customer_id}};
            if (customer_id != 0) {
                customerClicked(customer_id);
            }

        });

        function preview_image($id) {
            $('#cusid').val($id);
            $('#image_preview').empty();
            $.get('getimage/' + $id, function(data) {
                $.each(data, function(i, qwe) {
                    $("#imagetable tbody").empty();
                    $.each(data,function(i,qwe){
                        var sr;
                        if(qwe.filecatcode ==1){
                           sr = "src='img/customer/ulsburtgel/"+ qwe.filename +"'"
                        }
                        if(qwe.filecatcode ==2){
                            sr = "src='img/customer/nuat/"+ qwe.filename +"'"
                        }
                        if(qwe.filecatcode ==3){
                            sr = "src='img/customer/irgen/"+ qwe.filename +"'"
                        }
                        if(qwe.filecatcode ==4){
                            sr = "src='img/customer/passport/"+ qwe.filename +"'"
                        }
                        if(qwe.filecatcode ==11){
                            sr = "src='img/customer/har/"+ qwe.filename +"'"
                        }
                        var sHtml = " <tr class='table-row' >" +

                            "   <td class='m1'> <p>"+ qwe.filecatname + "</p><img width='90%' "+ sr+ "/></td>" +
                            "   <td class='m1'> <button class='btn btn-danger' onclick=deletepicture(" + qwe.fileid+ ","+ qwe.customerid+")><i class='fa fa-trash' aria-hidden='true'></i></button></td>" +

                            "</tr>";
                        $("#imagetable tbody").append(sHtml);
                    });
                });

            });
        }
        function customerClicked(customerid) {
            $('#photomodal').modal('show');
            preview_image(customerid);

        }
        function updatecustomer($id){
            document.getElementById('customer').action = "updatecustomer";
            $.get('getcustomer/'+$id,function(data){
                $.each(data,function(i,qwe){

                    $('#customerid').val(qwe.customerid);
                    $('#customername').val(qwe.customername);
                    $('#nat_regno').val(qwe.nat_regno);
                    $('#vat_regno').val(qwe.vat_regno);
                    $('#contact_phone_list').val(qwe.contact_phone_list);
                    $('#post_address').val(qwe.post_address);
                    $('#ceo_name').val(qwe.ceo_name);
                    $('#ceo_regno').val(qwe.ceo_regno);
                    $('#ceo_phone_list').val(qwe.ceo_phone_list);
                    $('#is_black_listed').val(qwe.is_black_listed);
                    $('#black_list_begin').val(qwe.black_list_begin);
                    $('#black_list_expire').val(qwe.black_list_expire);
                    $('#business_route').val(qwe.business_route);
                    $('#black_note').val(qwe.black_note);
                    $('#customer_note').val(qwe.customer_note);
                    $('#nation').val(qwe.nation);
                    $('#experience_from').val(qwe.experience_from);
                    $('#bank_id').val(qwe.nation);
                    $('#bank_no').val(qwe.bank_no);
                    $('#customer_email').val(qwe.customer_email);
                });

            });

        };
        function deletepicture($id,$id1)
        {
            $.ajax(
                {
                    url: "picture/delete/"+$id,
                    type: 'GET',
                    dataType: "JSON",
                    data: {
                        "id": $id,
                        "_method": 'DELETE',

                    },
                    success: function ()
                    {
                        alert('Зураг устгагдлаа');
                        preview_image($id1);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        if (jqXHR.status == 500) {
                            alert('Internal error: ' + jqXHR.responseText);
                        }
                        preview_image($id1);
                    }

                });

        }
        function storecustomer($id){
            document.getElementById('customer').action = "storecustomer";

                    $('#customerid').val('');
                    $('#customername').val('');
                    $('#nat_regno').val('');
                    $('#tax_regno').val('');
                    $('#vat_regno').val('');
                    $('#contact_phone_list').val('');
                    $('#post_address').val('');
                    $('#ceo_name').val('');
                    $('#ceo_regno').val('');
                    $('#ceo_phone_list').val('');
                    $('#is_black_listed').val('1');
                    $('#black_list_begin').val('');
                    $('#black_list_expire').val('');
                    $('#black_note').val('');
                    $('#business_route').val('');
                    $('#customer_note').val('');
                     $('#nation').val(1);
            $('#experience_from').val('');
            $('#bank_id').val(1);
            $('#bank_no').val('');
            $('#customer_email').val('');

        };

        function historydetail($id) {
            $('#history').trigger('click');
            $.get('historydetail/' + $id, function(data) {
                $.each(data, function(i, qwe) {
                    $("#ceo tbody").empty();
                    $("#companyhistory tbody").empty();
                    $("#blacklist tbody").empty();
                    $("#main tbody").empty();
                    $.each(data,function(i,qwe){

                        var sHtml3 = " <tr class='table-row' >" +

                            "   <td class='m1'> <p>"+ qwe.country_name + "</p></td>" +
                            "   <td class='m1'> <p>"+ qwe.business_route + "</p></td>" +
                            "   <td class='m1'> <p>"+ qwe.customername + "</p></td>" +
                            "   <td class='m1'> <p>"+ qwe.nat_regno + "</p></td>" +
                            "   <td class='m1'> <p>"+ qwe.vat_regno + "</p></td>" +
                            "   <td class='m1'> <p>"+ qwe.post_address + "</p></td>" +
                            "   <td class='m1'> <p>"+ qwe.customer_email + "</p></td>" +
                            "   <td class='m1'> <p>"+ qwe.contact_phone_list + "</p></td>" +
                            "   <td class='m1'> <p>"+ qwe.customer_note + "</p></td>" +
                            "   <td class='m1'> <a class='btn btn-xs btn-info' data-toggle='modal' data-target='#myModal' data-id=" + qwe.customerid + " tag=" + qwe.customerid + " onclick='updatecustomer(" + qwe.customerid + ")'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a></td>" +

                            "</tr>";
                        $("#main tbody").append(sHtml3);
                    });
                    $.each(data,function(i,qwe){

                        var sHtml = " <tr class='table-row' >" +

                            "   <td class='m1'> <p>"+ qwe.ceo_name + "</p></td>" +
                            "   <td class='m1'> <p>"+ qwe.ceo_regno + "</p></td>" +
                            "   <td class='m1'> <p>"+ qwe.ceo_phone_list + "</p></td>" +
                            "   <td class='m1'></td>" +
                             "</tr>";
                        $("#ceo tbody").append(sHtml);
                    });
                    $.each(data,function(i,qwe){

                        var sHtml1 = " <tr class='table-row' >" +

                            "   <td class='m1'> <p>"+ qwe.black_list_begin + "</p></td>" +
                            "   <td class='m1'> <p>"+ qwe.black_list_expire + "</p></td>" +
                            "   <td class='m1'> <p>"+ qwe.black_note + "</p></td>" +
                             "</tr>";
                        $("#blacklist tbody").append(sHtml1);
                    });

                });

            });
        }
    </script>

@endsection