
<div class="nav-div">
    @auth
    <div class="logo">
        <img src="{{ asset('storage/logo.png') }}" alt="Logo" srcset="">
    </div>
    <div class="actions">
        <a href=""><span class="mov">[1]</span> Technology</a>
        <a href=""><span class="mov">[2]</span> Web Hosting</a>
        <a href=""><span class="mov">[3]</span> Programming</a>
        <a href=""><span class="mov">[4]</span> Cyber Security</a>
        <a href=""><span class="mov">[5]</span> News</a>
    </div>
    <div>
       
        <form action="/logout" method="get">
            @csrf
            <input type="submit" style="max-width: 8em" value="LogOut">
        </form>
        
    </div>

    @else

    <div class="actions">
        <a href="{{ url('/auth/signup') }}">SignUp</a>
        <a href="{{ url('/auth/login') }}">LogIn</a>
    </div>
    @endauth
</div>
