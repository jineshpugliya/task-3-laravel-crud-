<!-- <form method="get">
<table class="table">
<thead>
<tr>
<th scope="col">S.No.</th>
<th scope="col">Title</th>
<th scope="col">Description</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
    @foreach($data as $dt)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$dt->title}}</td>
        <td>{{$dt->description}}</td>
        
    </tr>
    @endforeach
</tbody>
</table>
</form>



 -->




    <table class="table" id='example'>
        <thead>
          <tr>
            <th scope="col">S.No.</th>
            <th scope="col">Name</th>
            <th scope="col">Category Desciption</th>
            
            <th scope="col">Action</th>
            {{-- <th scope="col">Delete</th> --}}
            <th><a href="/post/create" >Add New Column</a></th>

        </tr>

    </thead>
        <tbody>
          @foreach ($data as $dt)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$dt->title}}</td>
            <td>{{$dt->description}}</td>
            <td><h5 class="btn btn-primary">
                <a href="/post/{{$dt->id}}/edit">Edit</a>  </td>
                <td>  <form method="post" action="/post/{{$dt->id}}">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>

        </tr>
          @endforeach
        </tbody>
      </table>
 

