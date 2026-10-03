<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration form</title>
</head>
<body>
    <h1> Registration From</h1>
    <form action="{{ url('/') }}/register" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
            <div>
                <span style="color:red">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
            <div>
                <span style="color:red">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
            <div>
                <span style="color:red">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation">
            <div>
                <span style="color:red">
                    @error('password_confirmation')
                        {{ $message }}
                    @enderror
                </span>
            </div>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>