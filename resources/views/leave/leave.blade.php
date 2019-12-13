<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Leave application</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{asset('employeedash/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('employeedash/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('employeedash/css/demo.css')}}" rel="stylesheet" />
</head>

<body>
    <div class="image-container set-full-height" style="background-image: url('employeedash/img/bg3.jpg')">
        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="green" id="wizard">
                            <form action="{{route('apply.send')}}" method="POST">
                                @csrf
                                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                        Leave Applicatio Form
                                    </h3>
                                    <h5>Fill form to make a leave applicaiton to Admin</h5>
                                </div>
                                @include('layouts.partial.msg')
                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#details" data-toggle="tab">Leave Application</a></li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane" id="details">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text">Fill info Provied by Admin</h4>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Your Name</label>
                                                        <input name="el_name" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Your Email</label>
                                                        <input name="el_email" type="email" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Phone</label>
                                                        <input name="el_phone" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">date_range</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"></label>
                                                        <input name="el_date" type="date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd'
                                            name='finish' value='Send' />
                                    </div>
                                    <div class="pull-left">
                                      <a href="">Logout</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div> <!-- row -->
        </div> <!--  big container -->

        <div class="footer">
            <div class="container text-center">
                Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>.
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{asset('employeedash/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('employeedash/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('employeedash/js/jquery.bootstrap.js')}}" type="text/javascript"></script>

    <!--  Plugin for the Wizard -->
    <script src="{{asset('employeedash/js/material-bootstrap-wizard.js')}}" type="text/javascript"></script>

    <script src="{{asset('employeedash/js/jquery.validate.min.js')}}"></script>
</body>

</html>
