<link rel="stylesheet" href="/CSS/styles.css">
<h3 style="text-align: center;">__Creating a category -></h3>
<div class="post-form">
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <form action="/add/category" method="post">
        @csrf
        <input type="text" name="name" placeholder="Catrgory Name...">
        <textarea name="description" id="" placeholder="Category descriptions here....." cols="30" rows="12"></textarea>
        @foreach ($collection as $item)
            
        @endforeach
        <div class="draft-publish">
            <input type="submit" name="back" value="« Back" class="back">
            <input type="submit" style="background-color: darkgreen" value="Save">
        </div>
    </form>
</div>
