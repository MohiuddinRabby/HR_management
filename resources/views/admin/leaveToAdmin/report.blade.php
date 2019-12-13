<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Invoice</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        .text-right {
            text-align: right;
        }

    </style>

</head>

<body class="login-page" style="background: white">

    <div>
        <div class="row">
            <div class="col-xs-7">
                <strong>Human Resource Company Name</strong><br>
                123 Company Ave. <br>
                E: copmany@company.com <br>
                Date: {{now()->toDateString('d-m-Y')}}<br>
                System Info: <br>
                <p>
                    {{$agent->platform()}}
                    {{$version = $agent->version($platform)}}
                    {{ $agent->browser()}}
                    {{ $version = $agent->version($browser)}}
                </p>
                <br>
            </div>
            <div class="col-xs-4">
                <img src="https://res.cloudinary.com/dqzxpn5db/image/upload/v1537151698/website/logo.png" alt="logo">
            </div>
        </div>
        <div style="margin-bottom: 0px">&nbsp;</div>
        <table class="table">
            <thead style="background: #F5F5F5;">
                <tr>
                    <th>Employee Name</th>
                    <th>Email</th>
                    <th>Application sent Date</th>
                    <th>Date of leave</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($applicationsToAdmin as $_applicationsToAdmin)
                <tr>
                    <td>{{ $_applicationsToAdmin->e_l_name}}</td>
                    <td>{{ $_applicationsToAdmin->e_l_email}}</td>
                    <td>{{date('d-M-y', strtotime($_applicationsToAdmin->e_l_leave_date))}}</td>
                    <td>{{date('d-M-y', strtotime($_applicationsToAdmin->created_at))}}</td>
                    <td>
                        @if($_applicationsToAdmin->status == true)
                        <span class="badge badge-success">Confirmed</span>
                        @else
                        <span class="badge badge-danger">Not Confirmed yet</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="margin-bottom: 0px">&nbsp;</div>
    </div>

</body>

</html>
