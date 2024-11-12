<!DOCTYPE html>
<html>
<head>
    <title>New Subscription</title>
</head>
<body>
    <h1>New Subscription</h1>

    <p><strong>Name:</strong> {{ $subscription->name }}</p>
    <p><strong>Email:</strong> {{ $subscription->email }}</p>
    <p><strong>Mobile No:</strong> {{ $subscription->mobile_no }}</p>
    <p><strong>Topic:</strong> {{ $subscription->topic }}</p>
    <p><strong>Category:</strong> {{ $subscription->category }}</p>
    <p><strong>Country:</strong> {{ $subscription->country }}</p>
    <p><strong>Index_ID:</strong> {{ $subscription->index_id }}</p>
    <p><strong>Source:</strong> {{ $subscription->source }}</p>
    <p><strong>Comments:</strong> {{ $subscription->comments }}</p>
    
</body>
</html>
