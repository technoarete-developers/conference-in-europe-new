
<!DOCTYPE html>
<html>
<head>
    <title>Contact Details</title>
</head>
<body>
    <h1>Contact Details</h1>
    
    <p><strong>Name:</strong> {{ $index->name }}</p>
    <p><strong>Email:</strong> {{ $index->email }}</p>
    <p><strong>Mobile No:</strong> {{ $index->mobile_no }}</p>
    <p><strong>Country:</strong> {{ $index->country }}</p>
    <p><strong>Topic:</strong> {{ $index->topic }}</p>
    <p><strong>Status:</strong> {{ $index->status }}</p>
    <p><strong>Index ID:</strong> {{ $index->index_id }}</p>
    <p><strong>Source:</strong> {{ $index->source }}</p>
    <p><strong>Comments:</strong> {{ $index->comments }}</p>
</body>
</html>
