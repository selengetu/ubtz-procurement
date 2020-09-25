@extends('layouts.master')

@section('style')
    <style>

    </style>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ирсэн захиалга</span>
              <span class="info-box-number">
               753
             
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-line-chart" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Зарлагдсан тендер</span>
              <span class="info-box-number">45</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fa fa-inbox" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Гэрээний хэрэгжилт</span>
              <span class="info-box-number">68</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Дууссан худалдан авалт</span>
              <span class="info-box-number">155</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">9-р сарын худалдан авалтын тайлан</h5>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
               

                  <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <!-- Sales Chart Canvas -->
                    <canvas id="line-chart" width="800" height="300"></canvas> </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Худалдан авалтын төлөвлөгөө</strong>
                  </p>

                  <div class="progress-group">
                Төлөвлөгөөний биелэлт
                    <span class="float-right"><b>81.6</b>/100</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->

                  <div class="progress-group">
                    Дууссан худалдан авалт
                    <span class="float-right"><b>310</b>/400</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-danger" style="width: 75%"></div>
                    </div>
                  </div>

                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Хаагдсан ажил</span>
                    <span class="float-right"><b>480</b>/800</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-success" style="width: 60%"></div>
                    </div>
                  </div>

                  <!-- /.progress-group -->
                  <div class="progress-group">
                    Гэрээт ажил
                    <span class="float-right"><b>250</b>/500</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-warning" style="width: 50%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./card-body -->
            <div class="card-footer">
              <div class="row">
                <div class="col-sm-3 col-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-success"><i class="fa fa-arrow-up" aria-hidden="true"></i> 17%</span>
                    <h5 class="description-header">4,678,210,560.43</h5>
                    <span class="description-text">Нийт худалдан авалт</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-warning"><i class="fa fa-arrows-h" aria-hidden="true"></i> 0%</span>
                    <h5 class="description-header">1,502,560,390.90</h5>
                    <span class="description-text"> Их барилга</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-success"><i class="fa fa-arrow-up" aria-hidden="true"></i> 20%</span>
                    <h5 class="description-header">2,784,813,796.53</h5>
                    <span class="description-text">Их засвар</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-6">
                  <div class="description-block">
                    <span class="description-percentage text-danger"><i class="fa fa-arrow-down" aria-hidden="true"></i> 18%</span>
                    <h5 class="description-header">368,781,850</h5>
                    <span class="description-text">Хөрөнгө оруулалт</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- MAP & BOX PANE -->
      
          <!-- TABLE: LATEST ORDERS -->
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Сүүлийн захиалгууд</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                  <tr>
                    <th>Захиалгын №</th>
                    <th>Захиалгын утга</th>
                    <th>Төлөв</th>
                    <th>Батлагдсан төсөв</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    @foreach($order as $orders)
             <tr>
             
                <td>{{$orders->orderno}}</td>
                <td>{{$orders->ordertitle}}</td>
                <td><span class="badge badge-info">Амжилттай</span></td>
                <td>{{$orders->approvedbudgetcomma}}</td>
              </tr>
                @endforeach

                    </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
          
              <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Бүгдийг үзэх</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
          <!-- Info Boxes Style 2 -->
          <div class="info-box mb-3 bg-warning">
            <span class="info-box-icon"><i class="fa fa-signal" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Нийт захиалга</span>
              <span class="info-box-number">5,200</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box mb-3 bg-success">
            <span class="info-box-icon"><i class="fa fa-file-archive-o" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Нийт тендер</span>
              <span class="info-box-number">450</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
      

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
@endsection

@section('script')

    <script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>

    @include('layouts.script')
    <script>
        new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: ['1-р сар','2-р сар','3-р сар','4-р сар','5-р сар','6-р сар','7-р сар','8-р сар'],
    datasets: [{ 
        data: [3.2,26.3, 25.6, 4.5, 6.3, 144.5, 5.8, 13.7],
        label: "Д",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [5.2,77.3, 298.6, 45.4, 16.3, 42.3, 52.8, 133.7],
        label: "Т",
        borderColor: "#8e5ea2",
        fill: false
      }, { 
        data: [5.56,77.36, 167.76, 24.5, 15.3, 152.5, 89.8, 88.1],
        label: "Л",
        borderColor: "#3cba9f",
        fill: false
      }, { 
        data: [4,2.7,10.7,16.8,24.6,138.1,374.5,216,5,97.4,78],
        label: "НУ",
        borderColor: "#e8c3b9",
        fill: false
      }, { 
        data: [6,3,2,2,7,26,82,172,312,433],
        label: "Ш",
        borderColor: "#c45850",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Алба, аж ахуй нэгжийн сар бүрийн худалдан авалт'
    }
  }
});
    </script>
@endsection