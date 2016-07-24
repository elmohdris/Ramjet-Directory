<?php
/* @var $this yii\web\View */

    $row  = \Yii::$app->db->createCommand("SELECT count(id) AS count FROM enquiry")->queryOne();
    $new_enq = $row['count'];

  $row  = \Yii::$app->db->createCommand("SELECT count(id) AS count FROM students")->queryOne();
    $new_reg = $row['count'];

$row  = \Yii::$app->db->createCommand("SELECT count(id) AS count FROM students")->queryOne();
    $new_act = $row['count'];

?>



<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php print $new_enq   ?></h3>

              <p>New Enquiries</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php print $new_reg   ?></h3>

              <p>Prospective Students</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php print $new_act ?></h3>

              <p>Staff Activities</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>



<div class="box">

                                <div class="box-header">

                                    <h3 class="box-title">Bordered Table</h3>

                                </div><!-- /.box-header -->

                                <div class="box-body">

                                    <table class="table table-bordered">

                                        <tbody><tr>

                                            <th style="width: 10px">#</th>

                                            <th>Task</th>

                                            <th>Progress</th>

                                            <th style="width: 40px">Label</th>

                                        </tr>

                                        <tr>

                                            <td>1.</td>

                                            <td>Unique Visitors</td>

                                            <td>

                                                <div class="progress xs">

                                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>

                                                </div>

                                            </td>

                                            <td><span class="badge bg-red">55%</span></td>

                                        </tr>

                                        <tr>

                                            <td>2.</td>

                                            <td>Staff Activities</td>

                                            <td>

                                                <div class="progress xs">

                                                    <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>

                                                </div>

                                            </td>

                                            <td><span class="badge bg-yellow">70%</span></td>

                                        </tr>

                                        <tr>

                                            <td>3.</td>

                                            <td>New Enquiries</td>

                                            <td>

                                                <div class="progress xs progress-striped active">

                                                    <div class="progress-bar progress-bar-primary" style="width: 30%"></div>

                                                </div>

                                            </td>

                                            <td><span class="badge bg-light-blue">30%</span></td>

                                        </tr>

                                        <tr>

                                            <td>4.</td>

                                            <td>Prospective Students</td>

                                            <td>

                                                <div class="progress xs progress-striped active">

                                                    <div class="progress-bar progress-bar-success" style="width: 90%"></div>

                                                </div>

                                            </td>

                                            <td><span class="badge bg-green">90%</span></td>

                                        </tr>

                                    </tbody></table>

                                </div><!-- /.box-body -->

                                <div class="box-footer clearfix">

                                    <ul class="pagination pagination-sm no-margin pull-right">

                                        <li><a href="#">«</a></li>

                                        <li><a href="#">1</a></li>

                                        <li><a href="#">2</a></li>

                                        <li><a href="#">3</a></li>

                                        <li><a href="#">»</a></li>

                                    </ul>

                                </div>

                            </div>



                            <div class="box box-primary">

                                <div class="box-header">

                                    <i class="fa fa-bar-chart-o"></i>

                                    <h3 class="box-title">Bar Chart</h3>

                                </div>

                                <div class="box-body">

                                    <div id="bar-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 653px; height: 300px;" width="653" height="300"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 283px; left: 30px; text-align: center;">January</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 283px; left: 138px; text-align: center;">February</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 283px; left: 256px; text-align: center;">March</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 283px; left: 370px; text-align: center;">April</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 283px; left: 483px; text-align: center;">May</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 283px; left: 591px; text-align: center;">June</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 270px; left: 7px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 203px; left: 7px; text-align: right;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 135px; left: 1px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 68px; left: 1px; text-align: right;">15</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">20</div></div></div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 653px; height: 300px;" width="653" height="300"></canvas></div>

                                </div><!-- /.box-body-->

                            </div>

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->





<!--

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>








          
