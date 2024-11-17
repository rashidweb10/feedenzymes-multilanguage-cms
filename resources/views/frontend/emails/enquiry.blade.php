<!DOCTYPE html>
<html>

<head>
    <title>Enquiry Details</title>
</head>

<body>
    <h1>Enquiry from {{ $enquiry->name }}</h1>
    <p><strong>Phone:</strong> {{ $enquiry->phone }}</p>
    <p><strong>Email:</strong> {{ $enquiry->email }}</p>
    <p><strong>Address:</strong> {{ $enquiry->message }}</p>
    <p><strong>Product Information:</strong></p>
    <ul>
        @foreach(json_decode($enquiry->additional_info, true) as $info)
        <li>
            <strong>Product:</strong> {{ $info['product'] }}<br>
            <strong>Price:</strong> {{ $info['price'] }} / {{ $info['weight'] }}<br>
            <strong>Category:</strong> {{ $info['category'] }}
        </li>
        @endforeach
    </ul>
</body>

</html>