<!doctype html>
<html lang="en">
<body>
<form method="post" action="/post/{{$data->id}}">
@method('put')
@csrf
<div class="form-group">
<label for="title"> Enter the Title </label>
<input type="text" name="title" id="title" value="{{$data->title}}"  placeholder="Write Your Title">
</div>

<div class="form-group">
<label for="description"> Enter the Description </label>
<input type="text" name="description"  id="description" value="{{$data->description}}"  placeholder="Write Your Desciption">
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
</body>