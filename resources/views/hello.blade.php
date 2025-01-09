<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$siteTitle}}</title>
</head>
<body>
<p>Xin chào mọi người</p>
<p>{!! $name !!}</p>

@if ($name == 'Nguyen Van A')
    <p>Bạn tên là: {{$name}}</p>
    @include('share.notify', ['alertMessage' => 'Thông báo của file notify.'])
@else
    <p><strong>Bạn có tên khác!</strong></p>
@endif

</body>
</html>