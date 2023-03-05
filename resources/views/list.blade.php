<html>
<head>

</head>
<body>
<a href="{{url('/create')}}"><button>Create</button></a>
<a href="{{url('/logout')}}"></a>
<br>
<table>
    <tr>Name of member</tr>
    <tr>Price of membership</tr>
[p;l,`
    @foreach($member as $member)
        <tr>
            <td>{{$member->member_name}}</td>
            <td>{{$member->membership_price}}</td>

    @endforeach
</table>
</body>
</html>
