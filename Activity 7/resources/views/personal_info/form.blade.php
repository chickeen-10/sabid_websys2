<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input {
            margin-bottom: 10px;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>
    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <form action="{{ route('personal_info.store') }}" method="POST">
        @csrf
        
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" maxlength="50" required>
        @error('first_name') <p class="error">{{ $message }}</p> @enderror

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" maxlength="50" required>
        @error('last_name') <p class="error">{{ $message }}</p> @enderror

        <label>Sex:</label>
        <input type="radio" name="sex" value="Male" required> Male
        <input type="radio" name="sex" value="Female" required> Female
        @error('sex') <p class="error">{{ $message }}</p> @enderror

        <label for="mobile_phone">Mobile Phone:</label>
        <input type="tel" id="mobile_phone" name="mobile_phone" value="{{ old('mobile_phone') }}" pattern="(09[89]\d-\d{3}-\d{3})" required>
        @error('mobile_phone') < p class="error">{{ $message }}</p> @enderror

        <label for="tel_no">Tel No.:</label>
        <input type="tel" id="tel_no" name="tel_no" value="{{ old('tel_no') }}" required>
        @error('tel_no') <p class="error">{{ $message }}</p> @enderror

        <label for="birth_date">Birth Date:</label>
        <input type="date" id="birth_date" name="birth_date" value="{{ old('birth_date') }}" required>
        @error('birth_date') <p class="error">{{ $message }}</p> @enderror

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ old('address') }}" required>
        @error('address') <p class="error">{{ $message }}</p> @enderror

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" maxlength="100" required>
        @error('email') <p class="error">{{ $message }}</p> @enderror

        <label for="website">Website:</label>
        <input type="url" id="website" name="website" value="{{ old('website') }}">
        @error('website') <p class="error">{{ $message }}</p> @enderror

        <button type="submit">Submit</button>
    </form>
</body>
</html>