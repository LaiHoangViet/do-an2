<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Phân trang </title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="content-city col-md-6 col-md-offset-3">
                <table class="table table-bordered">
                    <thead>
                        <th>Ma Xe</th>
                        <th>Tên</th>
                    </thead>
                    @foreach($xe as $key => $value)
                        <tr>
                            <td>{{ $value->Ma_xe }}</td>
                            <td>{{ $value->Ten_xe }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="text-center">
                {{ $xe->appends(['sort' => 'Ma_xe'])->links() }}
            </div>         
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>