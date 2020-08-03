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
                                    <h4 class="m-0">Салбар нэгж бүртгэл</h4>
                                </div>
                                <div class="col-md-2 col-xs-5">
                                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary add" style="padding-bottom: 10px;"><i class="fa fa-plus" style="color: rgb(255, 255, 255);"> Салбар нэмэх</i></button>
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
                                        <th>Харьяа</th>
                                        <th>Салбар нэгжийн нэр</th>
                                        <th>Товчилсон нэр</th>
                                        <th>Салбар нэгжийн төрөл</th>
                                        <th>Байгууллагын данс</th>
                                        <th>Холбоо барих</th>
                                        
                                       
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; ?>
                                  
                                    @foreach($dep as $departments)
                             <tr>
                                <td>{{$no}}</td>
                                <td>{{$departments->mainabbr}}</td>
                                <td>{{$departments->fullname}}</td>
                                <td>{{$departments->abbr}}</td>
                                <td>{{$departments->deptypename}}</td>
                                <td>{{$departments->nfaccountno}}</td>
                                <td>{{$departments->contactinfo}}</td>
                                <td class='m1'> <a class='btn btn-xs btn-info update' data-toggle='modal' data-target='#exampleModal' data-id="{{$departments->department_id}}" tag='{{$departments->department_id}}'><i class="fa fa-pencil-square-o" style="color: rgb(255, 255, 255); "></i></a> </td>
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
                        <h5 class="modal-title" id="modal-title">Салбар нэгж бүртгэх цонх</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-row">
                        <div class="form-group col-md-4">
                                <label for="inputAddress2">Харьяа</label>
                                <select class="form-control select2" id="main_department_id" name="main_department_id" >
                                @foreach($department as $departments) 
                                <option value= "{{$departments->department_id}}">{{$departments->abbr}}</option>
                                 @endforeach
                                  
                                </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="inputAddress">Салбар нэгжийн нэр</label>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" class="form-control" id="department_id" name="department_id">
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="" maxlength="50">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Товчилсон нэр</label>
                                <input type="text" class="form-control" id="abbr" name="abbr" placeholder="" maxlength="50">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Салбар нэгжийн төрөл</label>
                                <select class="form-control select2" id="deptypecode" name="deptypecode" >
                                @foreach($type as $types) 
                                <option value= "{{$types->deptypecode}}">{{$types->deptypename}}</option>
                                 @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Байгууллагын данс</label>
                                <input type="number" class="form-control" id="nfaccountno" name="nfaccountno" placeholder="" maxlength="18">
                            
                               
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress2">Холбоо барих</label>
                                <input type="number" class="form-control" id="contactinfo" name="contactinfo" placeholder="" maxlength="250">
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
            title.innerHTML = "Салбар засварлах цонх";
            document.getElementById('form1').action = "updatedepartment";
            document.getElementById('form1').method ="post"
            var itag=$(this).attr('tag');
            $.get('departmentfill/'+itag,function(data){
                $.each(data,function(i,qwe){
                    $('#department_id').val(qwe.department_id);
                    $('#abbr').val(qwe.abbr);
                    $('#fullname').val(qwe.fullname);
                    $('#deptypecode').val(qwe.deptypecode);
                    $('#nfaccountno').val(qwe.nfaccountno);
                    $('#contactinfo').val(qwe.contactinfo);
                    $('#main_department_id').val(qwe.main_department_id);
                });

            });
            $('.delete').show();
        });
    </script>
    <script>
        $('.add').on('click',function(){
            var title = document.getElementById("modal-title");
            title.innerHTML = "Салбар бүртгэх цонх";
            document.getElementById('form1').action = "adddepartment"
            document.getElementById('form1').method ="post";
            $('#department_id').val('');
            $('#deptypecode').val('1');
                    $('#abbr').val('');
                    $('#fullname').val('');
                    $('#nfaccountno').val('');
                    $('#contactinfo').val();
                    $('#main_department_id').val('1');
            $('.delete').hide();
        });
        $('.delete').on('click',function(){
            var itag = $('#department_id').val();

            $.ajax(
                {
                    url: "department/delete/" + itag,
                    type: 'GET',
                    dataType: "JSON",
                    data: {
                        "id": itag,
                        "_method": 'DELETE',
                    },
                    success: function () {
                        alert('Байгууллага устгагдлаа');
                    }

                });
            alert('Байгууллага устгагдлаа');
            location.reload();
        });
    </script>
@endsection