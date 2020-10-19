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
                                    <h4 class="m-0">Худалдан авалтын үйл ажиллагаа  </h4>
                                </div>
                                <div class="col-md-2 col-xs-5">
                                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary add" style="padding-bottom: 10px;"><i class="fa fa-plus" style="color: rgb(255, 255, 255);"> Үнэлгээний хороо нэмэх</i></button>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body text-center">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Үнэлгээний хороо</a>
                            </li>
                           
                            <li class="nav-item disabled disabledTab" >
                                <a class="nav-link" id="tenderbids-tab" data-toggle="tab" href="#tenderbids" role="tab" aria-controls="tenderbids" aria-selected="false">Худалдан авалт</a>
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
                                        <th>Нээгдсэн огноо</th>
                                        <th>Тендер №</th>
                                        <th>Төлөв</th>
                                        <th>Хаасан огноо</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; ?>
                                  
                                    @foreach($commession as $commessions)
                             <tr>
                                <td>{{$no}}</td>
                                <td>{{$commessions->createddate}}</td>
                                <td>{{$commessions->statementnote}}</td>
                                <td>{{$commessions->statementnote}}</td>
                                <td>{{$commessions->closeddate}}</td>
                                <td class='m1'> <a class='btn btn-xs btn-info updatecommesion' data-toggle='modal' data-target='#exampleModal' data-id="{{$commessions->commess_id}}" tag='{{$commessions->commess_id}}'><i class="fa fa-pencil-square-o" style="color: rgb(255, 255, 255); "></i></a> <a id="{{$commessions->commess_id}}" class='btn btn-xs btn-warning order1'  tag='{{$commessions->commess_id}}'><i class="fa fa-line-chart" style="color: rgb(255, 255, 255); "></i></a></td>               
                                </tr>
                                @endforeach


                                    </tbody>
                                </table>
                            </div>
                           
                            </div>
                            <div class="tab-pane fade" id="tenderbids" role="tabpanel" aria-labelledby="tenderbids-tab">
                            <div class="m-scrollable" data-scrollable="true" data-height="400" >
                            <br>
                            <div class=row>
                                <div class="col-md-12">
                                <table class="table table-striped table-bordered" id="commessionitem">
                                    <thead>
                                    <tr role="row">
                                        <th>Нээгдсэн огноо</th>
                                        <th>Тендер №</th>
                                        <th>Төлөв</th>
                                        <th>Хаасан огноо</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    </table>
                                </div>
                              
                                </div>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                          
                            <li class="nav-item disabled disabledTab" >
                                <a class="nav-link active" id="commessionmember-tab" data-toggle="tab" href="#commessionmember" role="tab" aria-controls="commessionmember" aria-selected="false">Үнэлгээний хорооны гишүүд</a>
                            </li>
                            <li class="nav-item disabled disabledTab" >
                                <a class="nav-link" id="tenderbids-tab" data-toggle="tab" href="#maintender" role="tab" aria-controls="tenderbids" aria-selected="false">Тендер</a>
                            </li>
                            <li class="nav-item disabled disabledTab" >
                                <a class="nav-link" id="tenderorder-tab" data-toggle="tab" href="#tenderorder" role="tab" aria-controls="tenderorder" aria-selected="false">Тендерийн бүтээгдэхүүн</a>
                            </li>
                            <li class="nav-item disabled disabledTab" >
                                <a class="nav-link" id="tendercondition-tab" data-toggle="tab" href="#tendercondition" role="tab" aria-controls="tendercondition" aria-selected="false">Тендерийн нөхцөл</a>
                            </li>
                            <li class="nav-item disabled disabledTab" >
                                <a class="nav-link" id="tenderpartacipate-tab" data-toggle="tab" href="#tenderpartacipate" role="tab" aria-controls="tenderpartacipate" aria-selected="false">Тендерийн оролцогчид</a>
                            </li>
                            </ul>
                
                                    <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="commessionmember" role="tabpanel" aria-labelledby="commessionmember-tab">
                            <div class="m-scrollable" data-scrollable="true" data-height="400" >
                            <br>
                            <div class=row>
                                <div class="col-md-10">
                                <table class="table table-striped table-bordered" id="membertable">
                                    <thead>
                                    <tr role="row">
                                        
                                        <th>Ажилтны нэр</th>
                                        <th>Албан тушаал</th>
                                        <th>Эхлэсэн огноо</th>
                                        <th>Дууссан огноо</th>
                                        <th>Татгалзсан огноо</th>
                                        <th>Татгалзсан шалтгаан</th>
                                        <th> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    </table>
                                </div>
                                <div class="col-md-2">
                                <button data-toggle="modal" data-target="#membermodal" class="btn btn-primary memberadd" style="padding-bottom: 10px;"><i class="fa fa-plus" style="color: rgb(255, 255, 255);"> Гишүүн</i></button>
                                </div>

                                </div>
                                  
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="maintender" role="tabpanel" aria-labelledby="maintender-tab">
                            <div class="m-scrollable" data-scrollable="true" data-height="400" >
                            <br>
                            <div class=row>
                                <div class="col-md-10">
                                <table class="table table-striped table-bordered" id="example1">
                                    <thead>
                                    <tr role="row">
                                        <th>#</th>
                                        <th>Ажлын лимит</th>
                                        <th>Тендерийн төрөл</th>
                                        <th>Захиалагч</th>
                                        <th>Тендер шалгаруулалтын дугаар</th>
                                        <th>Урилгын дугаар</th>
                                        <th>Санхүүжилтийн эх үүсвэр</th>
                                        <th>Нийт төсөвт өртөг</th>
                                        <th>Тухайн онд санхүүжих төсөвт өртөг</th>
                                        <th>ХАА-ны мөрдөх журам</th>
                                        <th>Цахим тендер эсэх</th>
                                        <th>Зарлагдсан огноо</th>
                                        <th>Нээлтийн огноо</th>
                                        <th>Хүлээн авах огноо</th>
                                        <th>Үүсгэсэн ажилтан </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    </table>
                                </div>
                                <div class="col-md-2">
                                <button data-toggle="modal" data-target="#tendermodal" class="btn btn-primary add" style="padding-bottom: 10px;"><i class="fa fa-plus" style="color: rgb(255, 255, 255);"> Тендер</i></button>
                                </div>

                                </div>
                                  
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="tenderorder" role="tabpanel" aria-labelledby="tenderorder-tab">
                            <div class="m-scrollable" data-scrollable="true" data-height="400" >
                            <br>
                            <div class=row>
                                <div class="col-md-10">
                                <table class="table table-striped table-bordered" id="example">
                                    <thead>
                                    <tr role="row">
                                        <th>#</th>
                                        <th>Барааны код</th>
                                        <th>Барааны нэр</th>
                                        <th>Тоо хэмжээ</th>                           
                                        <th>Тайлбар</th>
                                       
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    </table>
                                </div>
                                <div class="col-md-2">
                                <button data-toggle="modal" data-target="#commessionmember" class="btn btn-primary add" style="padding-bottom: 10px;"><i class="fa fa-plus" style="color: rgb(255, 255, 255);"> Бүтээгдэхүүн</i></button>
                                </div>

                                </div>
                                    
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="tendercondition" role="tabpanel" aria-labelledby="tendercondition-tab">
                            <div class="m-scrollable" data-scrollable="true" data-height="400" >
                            <br>
                            <div class=row>
                                <div class="col-md-10">
                                <table class="table table-striped table-bordered" id="example">
                                    <thead>
                                    <tr role="row">
                                        <th>#</th>
                                        <th>Файлын нэр</th>
                                        <th>Файлын контент</th>
                                        <th>Файлын төрөл</th>

                                       
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    </table>
                                </div>
                                <div class="col-md-2">
                                <button data-toggle="modal" data-target="#productmodal" class="btn btn-primary add" style="padding-bottom: 10px;"><i class="fa fa-plus" style="color: rgb(255, 255, 255);"> Тендерийн нөхцөл
                                </i></button>
                                </div>

                                </div>
                                   
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="tenderpartacipate" role="tabpanel" aria-labelledby="tenderpartacipate-tab">
                            <div class="m-scrollable" data-scrollable="true" data-height="400" >
                            <br>
                            <div class=row>
                                <div class="col-md-10">
                                <table class="table table-striped table-bordered" id="example">
                                    <thead>
                                    <tr role="row">
                                        <th>#</th>
                                        <th>Оролцогчийн нэр</th>
                                        <th>Огноо</th>
                                        <th>Санал болгосон үнэ</th>
                                        <th>Хөнгөлөлт</th>
                                        <th>Баталгаа</th>
                                        <th>Төлөв</th>
                                        <th>Шалтгаан</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    </table>
                                </div>
                                <div class="col-md-2">
                                <button data-toggle="modal" data-target="#productmodal" class="btn btn-primary add" style="padding-bottom: 10px;"><i class="fa fa-plus" style="color: rgb(255, 255, 255);"> Оролцогч</i></button>
                                </div>

                                </div>
                                    <br>
                              
                                    </div>
                                    </div>
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
                <form id="commessionform" action="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Үнэлгээний хороо бүртгэх цонх</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-row">
                        <div class="form-group col-md-4">
                                <label for="inputAddress2">Нээгдсэн огноо</label>
                           
                                <input class="form-control form-control-inline input-medium date-picker" name="createddate" id="createddate"
                                   size="16" type="text" value="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Тендер №</label>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" class="form-control commess_id" id="commess_id" name="commess_id">
                                <input type="text" class="form-control" id="tenderbid_id" name="tenderbid_id" placeholder="" maxlength="50">
                            </div>
                           
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Төлөв</label>
                                <input type="text" class="form-control" id="statementnote" name="statementnote" placeholder="" maxlength="50">
                               
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Хаасан огноо</label>
                                <input class="form-control form-control-inline input-medium date-picker" name="closeddate" id="closeddate"
                                   size="16" type="text" value="">
                            
                               
                            </div>
                          
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-5">
                            <button type="button" class="btn btn-danger deletecommession">Устгах</button>
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
    <div class="modal fade " id="membermodal" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="memberform" action="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title1" id="modal-title1">Үнэлгээний хорооны гишүүд бүртгэх цонх</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-row">
                        <div class="form-group col-md-4">
                                <label for="inputAddress2">Ажилтны нэр</label>
                                <select class="form-control select2" id="employee_id" name="employee_id" >
                                    @foreach($employee as $employees) 
                                    <option value="{{$employees->employee_id}}">{{$employees->lastname}} - {{$employees->jobtitle}} - {{$employees->abbr}}</option>
                                     @endforeach
                                    </select>
                                <input type="hidden" class="form-control" id="member_id" name="member_id" placeholder="" maxlength="50">
                                <input type="hidden" class="form-control commess_id" id="commess_id" name="commess_id" placeholder="" maxlength="50">
                            </div>
                           
                           
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Эхэлсэн огноо</label>
                                <input class="form-control form-control-inline input-medium date-picker" name="begindate" id="begindate"
                                   size="16" type="text" value="">
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Дууссан огноо</label>
                                <input class="form-control form-control-inline input-medium date-picker" name="closeddate" id="closeddate"
                                   size="16" type="text" value="">
                            
                               
                            </div>
                          
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-5">
                            <button type="button" class="btn btn-danger deletecommession">Устгах</button>
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
        <div class="modal fade " id="tendermodal" role="dialog" aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="tenderform" action="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title2" id="modal-title2">Тендер бүртгэх цонх</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-row">
                        <div class="form-group col-md-4">
                                <label for="inputAddress2">Ажлын лимит</label>
                                <input type="number" class="form-control" id="employee_id" name="employee_id" placeholder="" maxlength="50">
                           
                            </div>
                           
                           
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Тендерийн төрөл</label>
                                <select class="form-control select2" id="main_department_id" name="main_department_id" >
                                @foreach($tendertype as $types) 
                                <option value= "{{$types->tendertype_id}}">{{$types->tendertype_name}}</option>
                                 @endforeach
                                  
                                </select>
                            </div>
                         
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Тендер шалгаруултын №</label>
                                <input class="form-control form-control-inline" name="tenderbidno" id="tenderbidno"
                                   size="16" type="text" value="">
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Урилгын дугаар</label>
                                <input class="form-control form-control-inline" name="bidreferenceno" id="bidreferenceno"
                                   size="16" type="text" value="">
                            
                               
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Санхүүжилтийн эх үүсвэр</label>
                                <select class="form-control select2" id="sourceoffunding" name="sourceoffunding" >
                                @foreach($budgetsource as $bud)
                                <option value= "{{$bud->source_id}}">{{$bud->source_name}}</option>
                                 @endforeach
                                  
                                </select>
                            
                               
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Нийт төсөвт өртөг</label>
                                <input class="form-control form-control-inline" name="totalbudget" id="totalbudget"  type="number" value="">
                            
                               
                            </div>
                            <div class="form-group col-md-8">
                                <label for="inputAddress2">Тухайн онд санхүүжих төсөвт өртөг</label>
                                <input class="form-control form-control-inline" name="yearbudget" id="yearbudget"  type="number" value="">
                            
                               
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">ХАА-ны мөрдөх журам</label>
                                <select class="form-control select2" id="procedureofprocurement" name="procedureofprocurement" >
                                @foreach($selection as $sel)
                                <option value= "{{$sel->tenderselectioncode}}">{{$sel->tenderselectionabbr}}</option>
                                 @endforeach
                                  
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Цахим тендер эсэх</label>
                                <select class="form-control select2" id="electronicbid" name="electronicbid" >
                              
                                <option value= "1">Тийм</option>
                                <option value= "2">Үгүй</option>
                            
                               
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Зарлагдсан огноо</label>
                                <input class="form-control form-control-inline input-medium date-picker" name="closeddate" id="closeddate"
                                   size="16" type="text" value="">
                            
                               
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Нээлтийн огноо</label>
                                <input class="form-control form-control-inline input-medium date-picker" name="closeddate" id="closeddate"
                                   size="16" type="text" value="">
                            
                               
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Хүлээн авах огноо</label>
                                <input class="form-control form-control-inline input-medium date-picker" name="closeddate" id="closeddate"
                                   size="16" type="text" value="">
                            
                               
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
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>
  
    <script>
        $(".date-picker").datepicker({
            dateFormat: 'yy-mm-dd'
        });
        function getmember(id)
         {
            $.get('tendermemberfill/'+id,function(data){
            $("#membertable tbody").empty();   
             $.each(data,function(i,qwe){
              var sHtmls = "<tr>" +
     "   <td class='m2'>" + qwe.lastname +  " </td>" +    
     "   <td class='m2'>" + qwe.jobtitle + " </td>" +    
        "   <td class='m1'>" + qwe.begindate + "</td>" +
        "   <td class='m1'>" + qwe.enddate + "</td>" +
        "   <td class='m2'>" + qwe.denied_date + "</td>" +    
        "   <td class='m2'>" + qwe.denied_reason + "</td>" +    
       
        "   <td class='m2'>   <button data-toggle='modal' data-target='#membermodal' class='btn btn-primary add btn-sm' style='padding-bottom: 10px;'><i class='fa fa-pencil' style='color: rgb(255, 255, 255);'></i></button> </td>" +  
                               
        "</tr>";
        $("#membertable tbody").append(sHtmls);
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
     
        $('.updatemember').on('click',function(){
            var title = document.getElementById("modal-title1");
            title.innerHTML = "Үнэлгээний хороо засварлах цонх";
            document.getElementById('memberform').action = "updatemember";
            document.getElementById('memberform').method ="post"
            var itag=$(this).attr('tag');
            $.get('commessfill/'+itag,function(data){
                $.each(data,function(i,qwe){
                    $('#commess_id').val(qwe.commess_id);
                    $('#createddate').val(qwe.createddate);
                    $('#statementnote').val(qwe.statementnote);
                    $('#closeddate').val(qwe.closeddate);
              
                });
            });
            $('.delete').show();
        });
        $('.updatecommesion').on('click',function(){
            var title = document.getElementById("modal-title");
            title.innerHTML = "Үнэлгээний хороо засварлах цонх";
            document.getElementById('commessionform').action = "updatecommession";
            document.getElementById('commessionform').method ="post"
            var itag=$(this).attr('tag');
            $.get('commessionfill/'+itag,function(data){
                $.each(data,function(i,qwe){
                    $('#commess_id').val(qwe.commess_id);
                    $('#createddate').val(qwe.createddate);
                    $('#statementnote').val(qwe.statementnote);
                    $('#closeddate').val(qwe.closeddate);
            
                });
            });
            $('.deletecommession').show();
        });
    </script>
    <script>
        $('.memberadd').on('click',function(){
            var title = document.getElementById("modal-title");
            title.innerHTML = "Үнэлгээний хороо бүртгэх цонх";
            document.getElementById('memberform').action = "addtendermember"
            document.getElementById('memberform').method ="post";
                    $('#commess_id').val('');
                    $('#createddate').val('');
                    $('#statementnote').val('');
                    $('#closeddate').val('');
                    $('#tenderbid_id').val('');
            $('.delete').hide();
        });
        $('.deletecommession').on('click',function(){
            var itag = $('#commess_id').val();

            $.ajax(
                {
                    url: "commession/delete/" + itag,
                    type: 'GET',
                    dataType: "JSON",
                    data: {
                        "id": itag,
                        "_method": 'DELETE',
                    },
                    success: function () {
                        alert('Үнэлгээний хороо устгагдлаа');
                    }

                });
            
            location.reload();
        });
        $('.order1').on('click',function(){
        $( ".nav-item" ).removeClass("disabled disabledTab");
        $('#tenderbids-tab').trigger('click');
        var itag=$(this).attr('id');
        $('.commess_id').val(itag);
        $.get('commessionfill/'+itag,function(data){
              $("#commessionitem tbody").empty();
             
              $.each(data,function(i,qwe){
        
                  var sHtml = " <tr class='table-row' >" +
                  "   <td class='m1'>" + qwe.createddate+ "</td>" +
                  "   <td class='m1'>" + qwe.statementnote+ "</td>" +                 
                  "   <td class='m2'>" + qwe.tenderbid + "</td>" +
                  "   <td class='m3'>" + qwe.closeddate + "</td>" +
                     
                      "</tr>";

                  $("#commessionitem tbody").append(sHtml);
                

              });

          });
       getmember(itag);
    });
    </script>
     <style type="text/css">
    .disabledTab {pointer-events: none;}
    .highlight { background-color: lightskyblue }
    </style>
@endsection