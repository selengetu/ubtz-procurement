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
                                    <h4 class="m-0">Ажилтан бүртгэл</h4>
                                </div>
                                <div class="col-md-2 col-xs-5">
                                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary add" style="padding-bottom: 10px;"><i class="fa fa-plus" style="color: rgb(255, 255, 255);">Ажилтан нэмэх</i></button>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body text-center">

                            <div class="m-scrollable" data-scrollable="true" data-height="400" >
                                <table class="table table-striped table-bordered" id="example">
                                    <thead>
                                    <tr role="row">
                                        <th>#</th>
                                        <th>Овог</th>
                                        <th>Нэр</th>
                                        <th>Байгууллага</th>
                                        <th>Албан тушаал</th>
                                        <th>Ажилд орсон огноо</th>
                                        <th>Ажлаас гарсан огноо</th>
                                        <th>Гэрчилгээний дугаар</th>
                                       
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; ?>
                                    @foreach($employee as $employees)
                             <tr>
                                <td>{{$no}}</td>
                                <td>{{$employees->firstname}}</td>
                                <td>{{$employees->lastname}}</td>
                                <td>{{$employees->abbr}}</td>
                                <td>{{$employees->jobtitle}}</td>
            
                                <td>{{$employees->hired}}</td>
                                <td>{{$employees->fired}}</td>
                                <td>{{$employees->certificateno}}</td>
              
                                <td class='m1'> <a class='btn btn-xs btn-info update' data-toggle='modal' data-target='#exampleModal' data-id="{{$employees->employee_id}}" tag='{{$employees->employee_id}}'><i class="fa fa-pencil-square-o" style="color: rgb(255, 255, 255); "></i></a> </td>
                                </tr>
                                @endforeach




                                    </tbody>
                                </table>
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
                        <h5 class="modal-title" id="modal-title">Ажилтан бүртгэх цонх</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                
                        <div class="form-row">
                        <div class="form-group col-md-4">
                                <label for="inputAddress2">Овог</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="" maxlength="50">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Нэр</label>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" class="form-control" id="employee_id" name="employee_id">
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="" maxlength="50">
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
                                <label for="inputAddress2">Албан тушаал</label>
                                <input type="text" class="form-control" id="jobtitle" name="jobtitle" placeholder="" maxlength="80">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Ажилд орсон огноо </label>
                                <input class="form-control form-control-inline input-medium date-picker" name="hired" id="hired"
                                   size="16" type="text" value="">
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Ажлаас гарсан огноо</label>
                                <input class="form-control form-control-inline input-medium date-picker" name="fired" id="fired"
                                   size="16" type="text" value="">
                               
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Гэрчилгээний дугаар</label>
                                <input type="number" class="form-control" id="certificateno" name="certificateno" placeholder="" maxlength="50">
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

        $('.update').on('click',function(){
            var title = document.getElementById("modal-title");
            title.innerHTML = "Ажилтан засварлах цонх";
            document.getElementById('form1').action = "updateemployee";
            document.getElementById('form1').method ="post"
            var itag=$(this).attr('tag');
            $.get('employeefill/'+itag,function(data){
                $.each(data,function(i,qwe){
                    $('#employee_id').val(qwe.employee_id);
                    $('#lastname').val(qwe.lastname);
                    $('#firstname').val(qwe.firstname);
                    $('#jobtitle').val(qwe.jobtitle);
                    $('#department_id').val(qwe.department_id);
                    $('#hired').val(qwe.hired);
                    $('#fired').val(qwe.fired);
                    $('#certificateno').val(qwe.certificateno);
                
                });

            });
            $('.delete').show();
        });
    </script>
    <script>
        $('.add').on('click',function(){
            var title = document.getElementById("modal-title");
            title.innerHTML = "Ажилтан бүртгэх цонх";
            document.getElementById('form1').action = "addemployee"
            document.getElementById('form1').method ="post";
                    $('#employee_id').val('');
                    $('#lastname').val('');
                    $('#firstname').val('');
                    $('#jobtitle').val('');
                    $('#department_id').val('1');
                    $('#hired').val('');
                    $('#fired').val('');
                    $('#certificateno').val('');
            $('.delete').hide();
        });
        $('.delete').on('click',function(){
            var itag = $('#employee_id').val();

            $.ajax(
                {
                    url: "method/delete/" + itag,
                    type: 'GET',
                    dataType: "JSON",
                    data: {
                        "id": itag,
                        "_method": 'DELETE',
                    },
                    success: function () {
                        alert('Ажилтан устгагдлаа');
                    }

                });
            alert('Ажилтан устгагдлаа');
            location.reload();
        });
        $(function() {
            $("#hired").datepicker({
                format: 'yyyy-mm-dd',
                todayBtn:  1,
                autoclose: true,
            }).on('changeDate', function (selected) {
                var minDate = new Date(selected.date.valueOf());
                $('#fired').datepicker('setStartDate', minDate);
            });

            $("#fired").datepicker({
                format: 'yyyy-mm-dd',
            })
                .on('changeDate', function (selected) {
                    var minDate = new Date(selected.date.valueOf());
                    $('#hired').datepicker('setEndDate', minDate);
                });
        });
    </script>
@endsection