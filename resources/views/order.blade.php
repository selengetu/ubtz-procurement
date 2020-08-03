@extends('layouts.master')

@section('style')

@endsection

@section('content')
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-4">

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="m-0">Бараа үйлчилгээний захиалга</h4>
                                </div>
                                <div class="col-md-8 col-xs-8">
                                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary add" id='addorder' style="padding-bottom: 10px;"><i class="fa fa-plus" style="color: rgb(255, 255, 255);"> Захиалга</i></button>
                         
                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body text-center">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Захиалга</a>
                            </li>
                            <li class="nav-item disabled disabledTab" >
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Захиалгын дэлгэрэнгүй</a>
                            </li>
                         
                            </ul>
                            <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="m-scrollable" data-scrollable="true" data-height="400" >
                            <br>
                                <table class="table table-striped table-bordered" id="example">
                                    <thead>
                                    <tr role="row">
                                        <th>#</th>
                                      
                                        <th>Захиалгын дугаар</th>
                                        <th>Товч агуулга</th>
                                        <th>Зорилго</th>
                                        <th>Хүчинтэй хугацаа</th>
                                        <th>Төсөвт жил</th>
                                        <th>Төсөвлөгдсөн өртөг</th>
                                        <th>Зөвшөөрөгдсөн өртөг</th>
                                        <th>Зөвшөөрөгдсөн огноо</th>
                                        <th>Байгууллага</th>
                                        <th>Захиалгын төлөв</th>
                                        <th>Төсвийн төрөл</th>
                                        <th>Захиалгын төрөл</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; ?>
                                    @foreach($order as $orders)
                             <tr>
                                <td>{{$no}}</td>

                                <td>{{$orders->orderno}}</td>
                                <td>{{$orders->ordertitle}}</td>
                                <td>{{$orders->purpose}}</td>
                                <td>{{$orders->expiredate}}</td>
                                <td>{{$orders->budgetyear}}</td>
                                <td>{{$orders->estimatedcostcomma}}</td>
                                <td>{{$orders->approvedbudgetcomma}}</td>
                                <td>{{$orders->approveddate}}</td>
                                <td>{{$orders->department_id}}</td>
                                <td>{{$orders->orderstatus}}</td>
                                <td>{{$orders->budgettype_name}}</td>
                                <td>{{$orders->ordertype_name}}</td>
                                <td class='m1'> <a class='btn btn-xs btn-info updateorder' id="{{$orders->order_id}}" data-toggle='modal' data-target='#exampleModal' data-id="{{$orders->order_id}}" tag='{{$orders->order_id}}'><i class="fa fa-pencil-square-o" style="color: rgb(255, 255, 255); "></i></a></td>
                                <td class='m1'> <a id="{{$orders->order_id}}" class='btn btn-xs btn-warning order1'  tag='{{$orders->order_id}}'><i class="fa fa-line-chart" style="color: rgb(255, 255, 255); "></i></a> </td>
                                </tr>
                                @endforeach

                                    </tbody>
                                </table>
                            </div>
                            </div>
                         
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <br>
                                <div class=row>
                                <div class="col-md-12">
                                <table class="table table-striped table-bordered" id="orderitems">
                                    <thead>
                                    <tr role="row">
                                  
                                        <th>Огноо</th>
                                        <th>Захиалгын дугаар</th>
                                        <th>Захиалгын товч агуулга</th>
                                        <th>Зорилго</th>
                                        <th>Төсөвт жил</th>
                                        <th>Төсөвлөгдсөн өртөг</th>
                                        <th>Төсөвлөгдсөн өртөг</th>
                                        <th>Төсөвлөгдсөн огноо</th>
                                        <th>Хүчинтэй хугацаа</th>
                                        <th>Байгууллага</th>
                                        <th>Захиалгын төлөв</th>
                                        <th>Захиалгын төрөл</th>
                                        <th>Захиалгын төрөл</th>
                                
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    </table>
                                </div>
                               

                                </div>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#product" role="tab" aria-controls="home" aria-selected="true">Бараа бүтээгдэхүүн</a>
                            </li>
                           
                            <li class="nav-item disabled disabledTab" >
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Зөвшөөрөл</a>
                            </li>
                            <li class="nav-item disabled disabledTab" >
                                <a class="nav-link" id="purchase-tab" data-toggle="tab" href="#purchase" role="tab" aria-controls="purchase" aria-selected="false">Худалдан авалт</a>
                            </li>
                            <li class="nav-item disabled disabledTab" >
                                <a class="nav-link" id="activity-tab" data-toggle="tab" href="#activity" role="tab" aria-controls="activity" aria-selected="false">Гүйцэтгэл</a>
                            </li>
                            </ul>
                               
                                    <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade" id="purchase" role="tabpanel" aria-labelledby="purchase-tab">
                                    <br>
                            <div class="col-md-12">
                             
                                    <table class="table table-striped table-bordered" id="purchases">
                                    <thead>
                                    <tr role="row">
                                  
                                        <th>Худалдан авалтын төрөл</th>
                                        <th>Нийт үнийн дүн</th>
                                        <th>Гэрээний дугаар</th>
                                        <th>Хариуцсан ажилтан</th>
                                    
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    </table>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                        <br>
                        <div class="col-md-12">
                             
                                    <table class="table table-striped table-bordered" id="activities">
                                    <thead>
                                    <tr role="row">
                                  
                                        <th>Огноо</th>
                                        <th>Гүйцэтгэлийн үнийн дүн</th>
                                        <th>Тоо ширхэг</th>
                                        <th>Тайлбар</th>
                                        <th>Бүртгэсэн ажилтан</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    </table>
                                </div>
                        </div>
                        <div class="tab-pane fade show active" id="product" role="tabpanel" aria-labelledby="activity-tab">
                        <br>
                        <div class=row>
                        <div class="col-md-10">
                             
                        <table class="table table-striped table-bordered" id="item">
                                    <thead>
                                    <tr role="row">
                       
                                        <th>Барааны нэр</th>
                                        <th>Барааны код</th>
                                        <th>Тоо хэмжээ</th>
                                        <th>Нэг ширхэгийн үнэ</th>
                                        <th>Худалдааны загвар</th>
                                        <th>НФ код</th>
                                        <th>НФ материалын нэр</th>
                                        <th>Нийт үнийн дүн</th>
                                  
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                
                                    </tbody>
                                    </table>
                                </div>
                                <div class="col-md-2">
                                <button data-toggle="modal" data-target="#productmodal" class="btn btn-primary add" style="padding-bottom: 10px;"><i class="fa fa-plus" style="color: rgb(255, 255, 255);"> Бүтээгдэхүүн</i></button>
                                </div>
                                </div>
                        </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <br>
                            <div class=row>
                                <div class="col-md-10">
                                <table class="table table-striped table-bordered" id="visa">
                                    <thead>
                                    <tr role="row">
                                
                                        <th>Хүсэлтийн огноо</th>
                                        <th>Хүсэлтийн гарчиг</th>
                                        <th>Хариу өгсөн өдөр</th>
                                        <th>Хариу өгсөн тэмдэглэл</th>
                                        <th>Визны статус</th>
                                        <th>Албан тушаал</th>
                                    
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                
                                    </tbody>
                                    </table>
                                </div>
                                <div class="col-md-2">
                                <button data-toggle="modal" data-target="#visamodal" class="btn btn-primary add" style="padding-bottom: 10px;"><i class="fa fa-plus" style="color: rgb(255, 255, 255);"> Зөвшөөрөл</i></button>
                                </div>

                                </div>
                                    <br>
                            
                            </div>
                            </div>
                            </div>
                                    
                            </div>
                          
                            
                        </div>
                      
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <!-- /.col (right) -->



            <!-- row 2 dood-->
            <div class="row">

                <!-- /.col (left) -->

            </div>
        </div>
    </section>
    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="form1" action="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Захиалга бүртгэх цонх</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="inputAddress">Захиалгын огноо</label>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" class="form-control" id="order_id" name="order_id" >
                                <input class="form-control form-control-inline input-medium date-picker" name="orderdate" id="orderdate"
                                   size="16" type="text" value="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Захиалгын дугаар</label>
                                <input type="text" class="form-control" id="orderno" name="orderno" placeholder="" maxlength="50">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Хүчинтэй хугацаа</label>
                                <input class="form-control form-control-inline input-medium date-picker" name="expiredate" id="expiredate">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputAddress2">Захиалгын товч агуулга</label>
                                <textarea class="form-control" id="ordertitle" rows="3" name="ordertitle"></textarea>
                                </div>
                            <div class="form-group col-md-12">
                                <label for="inputAddress2">Зорилго</label>
                                <textarea class="form-control" id="purpose" rows="3" name="purpose"></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Төсвийн жил</label>
                                <input type="number" class="form-control" id="budgetyear" name="budgetyear" placeholder="" maxlength="50">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Төлөвлөгдсөн өртөг</label>
                                <input type="number" class="form-control" id="estimatedcost" name="estimatedcost" placeholder="" maxlength="50">
                            </div>
                        
                            <div class="form-group col-md-4">

                                <label for="inputAddress2">Захиалгын төрөл</label>
                                <select class="form-control select2" id="budgettype_id" name="budgettype_id" >
                                @foreach($budget_type as $budget_types) 
                                <option value="{{$budget_types->budgettype_id}}">{{$budget_types->budgettype_name}}</option>
                                 @endforeach
                                </select>
                               </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Захиалгын төлөв</label>
                                <input type="number" class="form-control" id="orderstatus" name="orderstatus" placeholder="" maxlength="50">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Төсвийн төрөл</label>
                                <select class="form-control select2" id="ordertype_id" name="ordertype_id" >
                                @foreach($order_type as $order_types) 
                                <option value= "{{$order_types->ordertype_id}}">{{$order_types->ordertype_name}}</option>
                                 @endforeach
                                  
                                </select>
                                  </div>
                           
                        </div>


                    </div>
                    <div class="modal-footer">
                        <div class="col-md-5">
                            <button type="button" class="btn btn-danger delete">Устгах</button>
                        </div>
                        <div class="col-md-7" style="display: inline-block; text-align: right;" >
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Хаах</button>
                            <button type="submit" class="btn btn-primary">Хадгалах</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade " id="productmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="form2" action="post" >
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title1">Захиалгын бараа бүтээгдэхүүн цонх</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="inputAddress">Барааны код</label>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" class="form-control" id="porder_id" name="porder_id" class="porder_id">
                                <input type="hidden" class="form-control" id="item_id" name="item_id">
                                <input type="hidden" class="form-control" id="type" name="type">
                                <input type="text" class="form-control" id="itemcode" name="itemcode" placeholder="" maxlength="50">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Барааны нэр</label>
                                <input type="text" class="form-control" id="itemname" name="itemname" placeholder="" maxlength="50">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Тоо хэмжээ</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="" maxlength="50">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Ширхэгийн үнэ</label>
                                <input type="number" class="form-control" id="perprice" name="perprice" placeholder="" maxlength="50">
                                </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Худалдааны марк</label>
                                <input type="text" class="form-control" id="trademarks" name="trademarks" placeholder="" maxlength="50">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">НФ материалын код</label>
                                <input type="text" class="form-control" id="nfmaterialcode" name="nfmaterialcode" placeholder="" maxlength="50">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">НФ материалын нэр</label>
                                <input type="text" class="form-control" id="nfmaterialname" name="nfmaterialname" placeholder="" maxlength="50">
                            </div>
                        
                           
                        </div>


                    </div>
                    <div class="modal-footer">
                        <div class="col-md-5">
                            <button type="button" class="btn btn-danger delete">Устгах</button>
                        </div>
                        <div class="col-md-7" style="display: inline-block; text-align: right;" >
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Хаах</button>
                            <button type="submit" class="btn btn-primary">Хадгалах</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade " id="visamodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="form3" action="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title2">Зөвшөөрөл өгөх ажилчдын цонх</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="inputAddress">Хүсэлтийн илгээсэн өдөр</label>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" class="form-control" id="vorder_id" name="vorder_id" class="vorder_id">
                                <input type="hidden" class="form-control" id="visa_id" name="visa_id">
                                <input class="form-control form-control-inline input-medium date-picker" name="requestdate" id="requestdate">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Хүсэлтийн утга</label>
                                <input type="text" class="form-control" id="requesttitle" name="requesttitle" placeholder="" maxlength="160">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Хариу өгсөн огноо</label>
                                <input class="form-control form-control-inline input-medium date-picker" name="responsedate" id="responsedate">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Тайлбар</label>
                                <input type="number" class="form-control" id="responsenote" name="responsenote" placeholder="" maxlength="50">
                                </div>
                           
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Зөвшөөрлийн төлөв</label>
                                <input type="number" class="form-control" id="visastatus" name="visastatus" placeholder="" maxlength="50">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Албан тушаал</label>
                                <input type="text" class="form-control" id="employeetitle" name="employeetitle" placeholder="" maxlength="50">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Нэр</label>
                                <input type="text" class="form-control" id="requestto_empid" name="requestto_empid" placeholder="" maxlength="50">
                            </div>
                        
                           
                        </div>


                    </div>
                    <div class="modal-footer">
                        <div class="col-md-5">
                            <button type="button" class="btn btn-danger delete">Устгах</button>
                        </div>
                        <div class="col-md-7" style="display: inline-block; text-align: right;" >
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Хаах</button>
                            <button type="submit" class="btn btn-primary">Хадгалах</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <script>
        $(".date-picker").datepicker({
            dateFormat: 'yy-mm-dd'
        });
        function updateitem($id){
            var title = document.getElementById("modal-title1");
            title.innerHTML = "Захиалгын бүтээгдэхүүн засварлах цонх";
            $('#type').val('2');
            document.getElementById('form2').action = "updateorderitem";
            document.getElementById('form2').method ="post"

            $.get('itemfill/'+$id,function(data){
                
                $.each(data,function(i,qwe){
                    console.log(qwe);
                    $('#item_id').val(qwe.item_id);
                    $('#itemcode').val(qwe.itemcode);
                    $('#itemname').val(qwe.itemname);
                    $('#quantity').val(qwe.quantity);
                    $('#perprice').val(qwe.perprice);
                    $('#trademarks').val(qwe.trademarks);
                    $('#nfmaterialcode').val(qwe.nfmaterialcode);
                    $('#nfmaterialname').val(qwe.nfmaterialname);
                    $('#totalcost').val(qwe.totalcost);
                
                });

            });
        
        }
        function updatevisa($id){
            var title = document.getElementById("modal-title2");
            title.innerHTML = "Захиалгын зөвшөөрөл засварлах цонх";
            $('#type').val('2');
            document.getElementById('form3').action = "updatevisa";
            document.getElementById('form3').method ="post"
           
            $.get('visafill/'+$id,function(data){
                $.each(data,function(i,qwe){
                    $('#visa_id').val(qwe.visa_id);
                    $('#requestdate').val(qwe.requestdate);
                    $('#requesttitle').val(qwe.requesttitle);
                    $('#responsedate').val(qwe.responsedate);
                    $('#responsenote').val(qwe.responsenote);
                    $('#employeetitle').val(qwe.employeetitle);
                    $('#visastatus').val(qwe.visastatus);
                    $('#requestto_empid').val(qwe.nfmaterialname);
              
                });

            });
        
        }
        function getitem(id)
         {
            $.get('orderitemfill/'+id,function(data){
            $("#item tbody").empty();   
             $.each(data,function(i,qwe){
              var sHtmls = "<tr>" +
     "   <td class='m2'>" + qwe.itemname + "</td>" +    
        "   <td class='m1'>" + qwe.itemcode + "</td>" +
        "   <td class='m1'>" + qwe.quantity + "</td>" +
        "   <td class='m2'>" + qwe.perprice + "</td>" +    
        "   <td class='m2'>" + qwe.trademarks + "</td>" +    
        "   <td class='m2'>" + qwe.nfmaterialcode + "</td>" +    
        "   <td class='m2'>" + qwe.nfmaterialname + "</td>" +    
        "   <td class='m2'>" + qwe.totalcost + "</td>" + 
        "   <td class='m2'>   <a id="+ qwe.item_id +"  tag="+ qwe.item_id +" onclick=updateitem("+ qwe.item_id +") data-toggle='modal' data-target='#productmodal' class='orderitem btn btn-primary btn-sm ' style='padding-bottom: 10px;'><i class='fa fa-pencil' style='color: rgb(255, 255, 255);'></i></a> </td>" +  
                               
        "</tr>";
        $("#item tbody").append(sHtmls);
         });
         
          });
         }
         function getvisa(id)
         {
            $.get('ordervisafill/'+id,function(data){
            $("#visa tbody").empty();   
             $.each(data,function(i,qwe){
              var sHtmls = "<tr>" +
        "   <td class='m1'>" + qwe.requestdate + "</td>" +
        "   <td class='m2'>" + qwe.requesttitle + "</td>" +    
        "   <td class='m1'>" + qwe.responsedate + "</td>" +
        "   <td class='m2'>" + qwe.responsenote + "</td>" + 
        "   <td class='m2'>" + qwe.visastatus + "</td>" +       
        "   <td class='m1'>" + qwe.employeetitle + "</td>" +
        
        
        "   <td class='m2'>   <a id="+ qwe.visa_id +"  tag="+ qwe.visa_id +"  onclick=updatevisa("+ qwe.visa_id +") data-toggle='modal' data-target='#visamodal' class='ordervisa btn btn-primary btn-sm' style='padding-bottom: 10px;'><i class='fa fa-pencil' style='color: rgb(255, 255, 255);'></i></a> </td>" +  
        
        "</tr>";
        $("#visa tbody").append(sHtmls);
         });
         
          });
         }
    </script>
    <script>
        $(document).ready(function() {
            $('#example').dataTable( {
                "language": {
                    "lengthMenu": " _MENU_ бичлэг",
                    "zeroRecords": "Бичлэг олдсонгүй",
                    "info": "_PAGE_ ээс _PAGES_ хуудас" ,
                    "infoEmpty": "Бичлэг олдсонгүй",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "Хайлт:",
                    "paginate": {
                        "first":      "Эхнийх",
                        "last":       "Сүүлийнх",
                        "next":       "Дараагийнх",
                        "previous":   "Өмнөх"
                    },
                },
                "pageLength": 50
            } );
        } );
    </script>
    <script>
          
        $('.updateorder').on('click',function(){
            var title = document.getElementById("modal-title");
            title.innerHTML = "Захиалга засварлах цонх";
            document.getElementById('form1').action = "updateorder";
            document.getElementById('form1').method ="post"
            var itag=$(this).attr('id');
            $.get('orderfill/'+itag,function(data){
                
                $.each(data,function(i,qwe){
                    console.log(qwe);
                    $('#order_id').val(qwe.order_id);
                    $('#orderdate').val(qwe.orderdate);
                    $('#ordertitle').val(qwe.ordertitle);
                    $('#purpose').val(qwe.purpose);
                    $('#expiredate').val(qwe.expiredate);
                    $('#estimatedcost').val(qwe.estimatedcost);
                    $('#budgetyear').val(qwe.budgetyear);
                    $('#abbr').val(qwe.abbr);
                    $('#orderstatus').val(qwe.orderstatus);
                    $('#orderno').val(qwe.orderno);
                    $('#budgettype_id').val(qwe.budgettype_id);
                    $('#ordertype_id').val(qwe.ordertype_id);
                });

            });
            $('.delete').show();
        });

    
    </script>
    
    <script>
       $('.order1').on('click',function(){
        $( ".nav-item" ).removeClass("disabled disabledTab");
        $('#profile-tab').trigger('click');
        var itag=$(this).attr('id');
        console.log(itag);
        $('#vorder_id').val(itag);
        $('#porder_id').val(itag);
        $.get('orderfill/'+itag,function(data){
              $("#orderitems tbody").empty();
            
              $.each(data,function(i,qwe){
             console.log(qwe);
                  var sHtml = " <tr class='table-row' >" +
                  "   <td class='m1'>" + qwe.orderdate+ "</td>" +
                  "   <td class='m1'>" + qwe.orderno+ "</td>" +
                     
                      "   <td class='m2'>" + qwe.ordertitle + "</td>" +
                      "   <td class='m3'>" + qwe.purpose + "</td>" +
                     
                      "   <td class='m3'>" + qwe.budgetyear + "</td>"+
                      "   <td class='m3'>" + qwe.estimatedcost + "</td>"+
                      "   <td class='m3'>" + qwe.approvedbudget + "</td>"+
                      "   <td class='m3'>" + qwe.approveddate + "</td>"+
                      "   <td class='m3'>" + qwe.expiredate + "</td>"+
                      "   <td class='m3'>" + qwe.department_id + "</td>"+
                      "   <td class='m3'>" + qwe.orderstatus + "</td>"+
                      "   <td class='m3'>" + qwe.budgettype_name + "</td>"+
                      "   <td class='m3'>" + qwe.ordertype_name + "</td>"+
                      "</tr>";
                  
                
                  $("#orderitems tbody").append(sHtml);
                 

              });

          });
        getvisa(itag);
        getitem(itag);
    });
        $('#addorder').on('click',function(){
            var title = document.getElementById("modal-title");
            title.innerHTML = "Захиалга бүртгэх цонх";
            document.getElementById('form1').action = "addorder"
            document.getElementById('form1').method ="post";
            $('#order_id').val('');
                    $('#orderdate').val('');
                    $('#ordertitle').val('');
                    $('#purpose').val('');
                    $('#expiredate').val('');
                    $('#estimatedcost').val('');
                    $('#budgetyear').val('');
                    $('#abbr').val('');
                    $('#orderstatus').val('');
                    $('#budgettype_id').val('1');
                    $('#ordertype_id').val('1');
            $('.delete').hide();
        });
        $('#addvisa').on('click',function(){
            var title = document.getElementById("modal-title");
            title.innerHTML = "Зөвшөөрөл бүртгэх цонх";
            document.getElementById('form3').action = "addvisa"
            document.getElementById('form3').method ="post";
                    $('#visa_id').val('');
                    $('#requestdate').val('');
                    $('#requesttitle').val('');
                    $('#responsedate').val('');
                    $('#responsenote').val('');
                    $('#employeetitle').val('');
                    $('#visastatus').val('');
                    $('#requestto_empid').val('');
            $('.delete').hide();
        });
        $('#addproduct').on('click',function(){
            var title = document.getElementById("modal-title");
            $('#type').val('1');
            title.innerHTML = "Бараа бүтээгдэхүүн бүртгэх цонх";
            document.getElementById('form2').action = "addorder"
            document.getElementById('form2').method ="post";
                    $('#item_id').val('');
                    $('#itemcode').val('');
                    $('#itemname').val('');
                    $('#quantity').val('');
                    $('#perprice').val('');
                    $('#trademarks').val('');
                    $('#nfmaterialcode').val('');
                    $('#nfmaterialname').val('');
              
            $('.delete').hide();
        });
      
        $('#form2').submit(function(event){
            var itag = $('#type').val();
        event.preventDefault();
        if(itag == 1){
        $.ajax({
            type: 'POST',
            url: 'additem',
            data: $('form#form2').serialize(),
         success: function(result){

          alert('Бараа бүртгэгдлээ');//this will alert you the last_id
               getitem($('#porder_id').val());
        },
 error: function (jqXHR, textStatus, errorThrown) {
                  if (jqXHR.status == 500) {
                      alert('Internal error: ' + jqXHR.responseText);
                  } else {
                      alert('Unexpected error.');
                  }
              }
        })
    }
    if(itag == 2){
            $.ajax({
                type: 'POST',
                url: 'updateitem',
                data: $('form#form2').serialize(),
                success: function(){
                    alert('Бүтээгдэхүүн засварлагдлаа');
                    getitem($('#porder_id').val());
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    if (jqXHR.status == 500) {
                        alert('Internal error: ' + jqXHR.responseText);
                    } else {
                        alert('Unexpected error.');
                    }
                }
            })

        }
    });
    $('#form3').submit(function(event){
        event.preventDefault();
        var itag = $('#type').val();
        if(itag == 1){
        $.ajax({
            type: 'POST',
            url: 'addvisa',
            data: $('form#form3').serialize(),
         success: function(result){
            alert($('#vorder_id').val());
          alert('Зөвшөөрөл бүртгэгдлээ');//this will alert you the last_id
          getvisa($('#vorder_id').val());
        },
 error: function (jqXHR, textStatus, errorThrown) {
                  if (jqXHR.status == 500) {
                      alert('Internal error: ' + jqXHR.responseText);
                  } else {
                      alert('Unexpected error.');
                  }
              }
        })
    }
    if(itag == 2){
            $.ajax({
                type: 'POST',
                url: 'updatevisa',
                data: $('form#form3').serialize(),
                success: function(){
                    alert('Зөвшөөрөл засварлагдлаа');
                    getvisa($('#vorder_id').val());
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    if (jqXHR.status == 500) {
                        alert('Internal error: ' + jqXHR.responseText);
                    } else {
                        alert('Unexpected error.');
                    }
                }
            })

        }
    });
    </script>
    
     <style type="text/css">
              .disabledTab {
    pointer-events: none;
}
.highlight { background-color: lightskyblue }
    </style>
@endsection