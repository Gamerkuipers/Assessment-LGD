<form method="POST" action="get-route">
    @method('POST')
    @csrf

    {{--  first name  --}}
    <label for="first-name">First Name</label>
    <input type="text"
        id="first-name"
        class="@error('first-name') is-invalid @else is-valid @enderror">

    {{--  surname  --}}
    <label for="surname">Surname</label>
    <input type="text"
           id="surname"
           class="@error('surname') is-invalid @else is-valid @enderror">

    {{--  initials  --}}
    <label for="initials">Initials</label>
    <input type="text"
           id="initials"
           class="@error('initials') is-invalid @else is-valid @enderror">

    {{--  password  --}}
    <label for="password">Password</label>
    <input type="text"
           id="password"
           class="@error('password') is-invalid @else is-valid @enderror">

    {{--  confirm-password  --}}
    <label for="confirm-password">Confirm Password</label>
    <input type="text"
           id="confirm-password"
           class="@error('confirm-password') is-invalid @else is-valid @enderror">

    {{--  email  --}}
    <label for="email">Email</label>
    <input type="text"
           id="email"
           class="@error('email') is-invalid @else is-valid @enderror">

    {{--  postal-code  --}}
    <label for="postal-code">Postal Code</label>
    <input type="text"
           id="postal-code"
           class="@error('postal-code') is-invalid @else is-valid @enderror">

    {{--  house-number  --}}
    <label for="house-number">House Number</label>
    <input type="text"
           id="house-number"
           class="@error('house-number') is-invalid @else is-valid @enderror">

    {{--  phone-number  --}}
    <label for="phone-number">Phone Number</label>
    <input type="text"
           id="phone-number"
           class="@error('phone-number') is-invalid @else is-valid @enderror">
</form>
