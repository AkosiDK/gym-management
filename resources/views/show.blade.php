<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container p-5 m-5">
        <h1 class="fw-bold">Member</h1>
        <p>Shows more information about the Member.</p>
        <a href="{{ route('index') }}" class="btn btn-light btn-sm">← Go back</a>
        <div class="card py-5 px-4 mt-3">
            <h2>{{ $member->name }}</h2>
            <p>{{ $member->email }}</p>
            <p>{{ $member->membership_type }}</p>
            <p>{{ $member->membership_expiration }}</p>
            <p>{{ $member->trainer_id }}</p>
            <p>{{ $member->membership_id }}</p>
        </div>
    </div>

</body>

</html>