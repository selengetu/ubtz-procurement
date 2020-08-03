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
                                    <h5 class="m-0">Барааны үлдэгдэл</h5>
                                </div>
                              
                            </div>
                        </div>
                      
                      
                                <div class="card-body table-responsive">
                                <div class="form-row">
                                <div class="col-md-4 mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend2">Байгууллага</span>
                                    </div>
                                    <select class="form-control select2" id="deptypecode" name="deptypecode" >
                                @foreach($dep as $deps) 
                                <option value= "{{$deps->department_id}}">{{$deps->abbr}}</option>
                                 @endforeach
                                </select>
                                </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend2">Барааны №</span>
                                    </div>
                                    <input type="text" class="form-control" id="validationDefaultUsername" placeholder="11259756314" aria-describedby="inputGroupPrepend2" required>
                                </div>
                                </div>
                            <div class="form-group col-md-3" >
                            <button type="submit" class="btn btn-primary">Хайх</button>
                        </div>
                          
                        </div>
                        <br>
                        <table class="table table-striped table-bordered" >
                                    <thead>
                                    <tr role="row">
                                  
                                        <th>Байгууллагын нэр</th>
                                        <th>Барааны дугаар</th>
                                        <th>Барааны нэр</th>
                                        <th>Хэмжих нэгж</th>
                                        <th>Нэгж өртөг</th>
                                        <th> Нийт тоо</th>
                                      
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
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->

   
@endsection
@section('script')
 
@endsection