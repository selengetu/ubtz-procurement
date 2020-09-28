@extends('layouts.master')

@section('style')
<style type="text/css">
              .disabledTab {
    pointer-events: none;
}
.highlight { background-color: lightskyblue }
    </style>
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
                                    <h4 class="m-0">УБТЗ-ын батлагдсан төсөв</h4>
                                </div>
                                <div class="col-md-2 col-xs-5">
                                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary add" style="padding-bottom: 10px;"><i class="fa fa-plus" style="color: rgb(255, 255, 255);"> Төсөв нэмэх</i></button>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body text-center">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Төсөв</a>
                                </li>
                                <li class="nav-item disabled disabledTab">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Бараа бүтээгдэхүүн</a>
                                </li>
                              
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table table-striped table-bordered" id="example">
                                    <thead>
                                    <tr role="row">
                                        <th>#</th>
                                        <th>Төсвийн жил</th>
                                        <th>Эхлэх огноо</th>
                                        <th>Дуусах огноо</th>
                                        <th>Байгууллага</th>
                                        <th>Захиалгын нэр</th>
                                        <th>Батлагдсан төсөв</th>
                                        <th>Төсвийн тодотгол</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; ?>
                                    @foreach($budget as $budgets)
                             <tr>
                                <td>{{$no}}</td>
                                <td>{{$budgets->budget_year}}</td>
                                <td>{{$budgets->begin_date}}</td>
                                <td>{{$budgets->end_date}}</td>
                                <td>{{$budgets->abbr}}</td>
                                <td>{{$budgets->budget_description}}</td>
                                <td>{{ number_format($budgets->plan_budget, 2) }}</td>
                                <td>{{ number_format($budgets->expanded_money, 2) }}</td>
                               <td class='m1'> <a class='btn btn-xs btn-info update' data-toggle='modal' data-target='#exampleModal' data-id="{{$budgets->id}}" tag='{{$budgets->id}}'><i class="fa fa-pencil-square-o" style="color: rgb(255, 255, 255); "></i></a> </td>
                               <td class='m1'> <a id="{{$budgets->id}}" class='btn btn-xs btn-warning order1'  tag='{{$budgets->id}}'><i class="fa fa-line-chart" style="color: rgb(255, 255, 255); "></i></a> </td>
                                </tr>
                                @endforeach




                                    </tbody>
                                </table>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="m-scrollable" data-scrollable="true" data-height="400" >
                                <br>
                                <div class=row>
                                <div class="col-md-12">
                                <table class="table table-striped table-bordered" id="budget">
                                    <thead>
                                    <tr role="row">
                                    
                                        <th>Төсвийн жил</th>
                                        <th>Эхлэх огноо</th>
                                        <th>Дуусах огноо</th>
                                        <th>Байгууллага</th>
                                        <th>Захиалгын нэр</th>
                                        <th>Батлагдсан төсөв</th>
                                        <th>Төсвийн тодотгол</th>
                                      
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    </table>
                                    </div>
                                    <div class="col-md-10">
                                <br>
                     <table class="table table-striped table-bordered" id="budgetdetail">
                         <thead>
                         <tr role="row">
                         
                             <th>Барааны код</th>
                             <th>Барааны нэр</th>
                             <th>Нэг ширхэгийн үнэ</th>
                             <th>Тоо ширхэг</th>
                             <th>Нийт дүн</th>
                             <th></th>
                         </tr>
                         </thead>
                         <tbody>
                           
                         </tbody>
                     </table>
                     </div>
                     <div class="col-md-2">
                     <br>
                                <button data-toggle="modal" data-target="#budgetmodal" class="btn btn-primary add" style="padding-bottom: 10px;"><i class="fa fa-plus" style="color: rgb(255, 255, 255);"> Бүтээгдэхүүн</i></button>
                                </div>
                     </div>
                 </div></div>
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
                        <h5 class="modal-title" id="modal-title">Төсөв бүртгэх цонх</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                
                        <div class="form-row">
                        <div class="form-group col-md-4">
                                <label for="inputAddress2">Төсвийн жил</label>
                                <input type="text" class="form-control" id="budget_year" name="budget_year" placeholder="" maxlength="50">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Эхлэх огноо</label>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" class="form-control" id="id" name="id">
                                <input class="form-control form-control-inline input-medium date-picker" name="begin_date" id="begin_date"
                                   size="16" type="text" value="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Дуусах огноо</label>
                                <input class="form-control form-control-inline input-medium date-picker" name="end_date" id="end_date"
                                   size="16" type="text" value="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Байгууллага</label>
                                <select class="form-control select2" id="department_id" name="department_id" >
                                @foreach($department as $departments) 
                                <option value= "{{$departments->department_id}}">{{$departments->abbr}}</option>
                                 @endforeach
                                  
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Төсөв</label>
                                <input class="form-control" name="plan_budget" id="plan_budget"
                                   size="16" type="text" value="">
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Төсвийн тодотгол</label>
                                <input class="form-control" name="expanded_money" id="expanded_money"
                                   size="16" type="text" value="">
                               
                            </div>

                        </div>


                    </div>
                    <div class="modal-footer">
                       
                        <div class="col-md-7" style="display: inline-block; text-align: right;" >
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Хаах</button>
                            <button type="submit" class="btn btn-primary">Хадгалах</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade " id="budgetmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="form2" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title1">Бүтээгдэхүүн бүртгэх цонх</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                
                        <div class="form-row">
                        <div class="form-group col-md-4">
                                <label for="inputAddress2">Барааны код</label>
                                <input type="text" class="form-control" id="product_num" name="product_num" placeholder="" maxlength="50">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Барааны нэр</label>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" class="form-control" id="budget_id" name="budget_id">
                                <input type="hidden" class="form-control" id="detail_id" name="detail_id">
                                <input class="form-control" name="product_name" id="product_name"
                                   size="16" type="text" value="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">	Нэг ширхэгийн үнэ</label>
                                <input class="form-control" name="product_price" id="product_price"
                                   size="16" type="text" value="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">	Тоо ширхэг</label>
                                <input class="form-control" name="product_quantity" id="product_quantity"
                                   size="16" type="text" value="">
                            </div>
                          
                        </div>


                    </div>
                    <div class="modal-footer">
                       
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
     $('.order1').on('click',function(){
        $( ".nav-item" ).removeClass("disabled disabledTab");
        $('#profile-tab').trigger('click');
        var itag=$(this).attr('id');
        console.log(itag);
        $('#budget_id').val(itag);
      getbudget(itag);
      getbudgetdetail(itag);
    });
    function getbudget(id)
         {
            $.get('budgetfill/'+id,function(data){
            $("#budget tbody").empty();   
             $.each(data,function(i,qwe){
              var sHtmls = "<tr>" +
        "   <td class='m1'>" + qwe.budget_year + "</td>" +
        "   <td class='m2'>" + qwe.begin_date + "</td>" +    
        "   <td class='m1'>" + qwe.end_date + "</td>" +
        "   <td class='m2'>" + qwe.abbr + "</td>" + 
        "   <td class='m2'>" + qwe.budget_description + "</td>" + 
        "   <td class='m2'>" + qwe.plan_budget + "</td>" +       
        "   <td class='m1'>" + qwe.expanded_money + "</td>" +
        "</tr>";
        $("#budget tbody").append(sHtmls);
         });
         
          });
         }
         function getbudgetdetail(id)
         {
            $.get('budgetdetailsfill/'+id,function(data){
            $("#budgetdetail tbody").empty();   
             $.each(data,function(i,qwe){
              var sHtmls = "<tr>" +
        "   <td class='m1'>" + qwe.product_num + "</td>" +
        "   <td class='m2'>" + qwe.product_name + "</td>" +    
        "   <td class='m1'>" + qwe.product_price + "</td>" +
        "   <td class='m2'>" + qwe.product_quantity + "</td>" + 
        "   <td class='m2'>" + qwe.product_quantity*qwe.product_price + "</td>" + 
        "   <td class='m2'>   <a id="+ qwe.detail_id +"  tag="+ qwe.detail_id +"  onclick=updatebudgetdetail("+ qwe.detail_id +") data-toggle='modal' data-target='#budgetmodal' class='updatebudgetdetail btn btn-primary btn-sm' style='padding-bottom: 10px;'><i class='fa fa-pencil' style='color: rgb(255, 255, 255);'></i></a> </td>" +  
        
        "</tr>";
        $("#budgetdetail tbody").append(sHtmls);
         });
         
          });
         }
         function updatebudgetdetail(id)
         {
            var title = document.getElementById("modal-title1");
            title.innerHTML = "Бүтээгдэхүүн засварлах цонх";
            document.getElementById('form2').action = "updatebudgetdetail";
            document.getElementById('form2').method ="post"
          
            $.get('budgetdetailfill/'+id,function(data){
                
                $.each(data,function(i,qwe){
                    console.log(qwe);
                    $('#detail_id').val(qwe.detail_id);
                    $('#product_num').val(qwe.product_num);
                    $('#product_name').val(qwe.product_name);
                    $('#product_quantity').val(qwe.product_quantity);
                    $('#product_price').val(qwe.product_price);
                
                });

            });
            $('.delete').show();
        }
        $('.add').on('click',function(){
            var title = document.getElementById("modal-title1");
            title.innerHTML = "Бүтээгдэхүүн бүртгэх цонх";
            document.getElementById('form2').action = "addbudgetdetail"
            document.getElementById('form2').method ="post";
            $('#id').val(qwe.id);
                    $('#budget_year').val('');
                    $('#begin_date').val('');
                    $('#end_date').val('');
                    $('#department_id').val('');
                    $('#plan_budget').val('');
                    $('#expanded_money').val('');
                    $('#certificateno').val('');
                
            $('.delete').hide();
        });
        $('.update').on('click',function(){
            var title = document.getElementById("modal-title");
            title.innerHTML = "Төсөв засварлах цонх";
            document.getElementById('form1').action = "updatebudget";
            document.getElementById('form1').method ="post"
            var itag=$(this).attr('tag');
            $.get('budgetfill/'+itag,function(data){
                $.each(data,function(i,qwe){
                    $('#id').val(qwe.id);
                    $('#budget_year').val(qwe.budget_year);
                    $('#begin_date').val(qwe.begin_date);
                    $('#end_date').val(qwe.end_date);
                    $('#department_id').val(qwe.department_id);
                    $('#plan_budget').val(qwe.plan_budget);
                    $('#expanded_money').val(qwe.expanded_money);
                    $('#certificateno').val(qwe.certificateno);
                
                });

            });
            $('.delete').show();
        });
    </script>
    <script>
        $('.add').on('click',function(){
            var title = document.getElementById("modal-title");
            title.innerHTML = "Төсөв бүртгэх цонх";
            document.getElementById('form1').action = "addbudget"
            document.getElementById('form1').method ="post";
            $('#id').val('');
                    $('#budget_year').val('');
                    $('#begin_date').val('');
                    $('#end_date').val('');
                    $('#department_id').val('');
                    $('#plan_budget').val('');
                    $('#expanded_money').val('');
                    $('#certificateno').val('');
            $('.delete').hide();
        });
        $('.delete').on('click',function(){
            var itag = $('#id').val();

            $.ajax(
                {
                    url: "budget/delete/" + itag,
                    type: 'GET',
                    dataType: "JSON",
                    data: {
                        "id": itag,
                        "_method": 'DELETE',
                    },
                    success: function () {
                        alert('Төсөв устгагдлаа');
                    }

                });
            alert('Төсөв устгагдлаа');
            location.reload();
        });
        $(function() {
            $("#begin_date").datepicker({
                format: 'yyyy-mm-dd',
                todayBtn:  1,
                autoclose: true,
            }).on('changeDate', function (selected) {
                var minDate = new Date(selected.date.valueOf());
                $('#end_date').datepicker('setStartDate', minDate);
            });

            $("#end_date").datepicker({
                format: 'yyyy-mm-dd',
            })
                .on('changeDate', function (selected) {
                    var minDate = new Date(selected.date.valueOf());
                    $('#begin_date').datepicker('setEndDate', minDate);
                });
        });
    </script>
@endsection