<link rel="stylesheet" href="/CSS/styles.css">
<h3 style="text-align: center;">__Creating a post -></h3>
<div class="post-form">
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <form action="/add/post" method="post">
        @csrf
        <input type="text" name="title" placeholder="Blog Title">
        <textarea name="contents" id="" placeholder="Blog Contents here....." cols="30" rows="12"></textarea>
        <select name="categories" id="">
            <option value="">--Select Category--</option>
            {{-- @foreach ($categories as $category)
                <option value="{{$category['id']}}">{{$category['name']}}</option>
            @endforeach --}}
        </select>
        <div class="draft-publish">
            <input type="submit" name="back" value="« Back" class="back">
            {{-- <a href="/" class="back">« Back</a> --}}
            <input type="submit" name='draft' style="background-color: darkorange" value="Save As Draft">
            <input type="submit" name="publish" style="background-color: darkgreen" value="Publish">
        </div>
    </form>
</div>
