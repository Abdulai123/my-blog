<link rel="stylesheet" href="/CSS/styles.css">
<div class="login-form-div">
    <div class="logo">
        <img src="{{ asset('storage/logo.png') }}" alt="Logo" srcset="">
    </div>
    <h3>LogIn</h3>
    <form action="/auth/login" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="LogIn">
    </form>
    <p>Don't have an account? <a href="/auth/signup">Create account here</a></p>
</div>