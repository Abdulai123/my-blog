<link rel="stylesheet" href="/CSS/styles.css">
<div class="signup-form-div">
    <div class="logo">
        <img src="{{ asset('storage/logo.png') }}" alt="Logo" srcset="">
    </div>
    <h3>SignUp</h3>
    <form action="/auth/signup" method="post">
        @csrf
        <input type="text" name="name" placeholder="Full Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="confirm-password" placeholder="Confirm Password">
        <input type="submit" value="Register">
    </form>
    <p>Already have an account? <a href="/auth/login">LogIn here</a></p>
</div>