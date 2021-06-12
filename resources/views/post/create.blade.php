<!doctype html>
<html lang="en">
<body>
<form method="post" action="/post">
@csrf
<div class="form-group">
<label for="title"> Enter the Title </label>
<input type="text" name="title" id="title" placeholder="Write Your Title">
</div>

<div class="form-group">
<label for="description"> Enter the Description </label>
<input type="text" name="description" id="description" placeholder="Write Your Desciption">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>