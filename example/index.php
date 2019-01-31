<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="./assets/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./assets/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="./assets/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="./assets/plugins/iCheck/square/blue.css">
    <title>Index</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./index.js"></script>
</head>
<body>
    <!-- <button id="btnClick">Click</button>
    <textarea name="txt" id="txtResult" cols="30" rows="10"></textarea> -->
    <!-- <button id="btnGet">Click</button>
    <input type="text" name="" id="txtInput">
    <button id="btnGetID">Get id</button>
    <div id="contentGet"></div> -->
    <button id="btnGetData">Get id</button>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Bordered Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered" id="table-data">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Task</th>
                            <th>Progress</th>
                            <th style="width: 40px">Label</th>
                        </tr>
                        <!-- <tr>
                            <td>1.</td>
                            <td>Update software</td>
                            <td>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-red">55%</span></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Clean database</td>
                            <td>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-yellow">70%</span></td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Cron job running</td>
                            <td>
                                <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-light-blue">30%</span></td>
                        </tr>
                        <tr> -->
                            <!-- <td>4.</td>
                            <td>Fix and squish bugs</td>
                            <td>
                                <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-green">90%</span></td>
                        </tr> -->
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>