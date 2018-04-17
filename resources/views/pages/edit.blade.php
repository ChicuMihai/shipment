<html>

@include("layouts.navbar")<br><br>
<body>

<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Edit page</h1>
            <form action="{{url('/pages/'.$page->id)}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
               {{ method_field('PATCH') }}
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif


                <div class="form-group">
                    <label for="title">Title <span class="require">*</span></label>
                    <input type="text" class="form-control" name="title" placeholder="{{$page->title}}"/>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <span class="require">*</span> <textarea rows="5" class="form-control" name="body" placeholder="{{$page->body}}"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload picture</label>
                    <input type="file" class="form-control-file" name="img">
                </div>

                <div class="form-group">
                    <p><span class="require">*</span> - required fields</p>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Create
                    </button>
                    <button class="btn btn-default">
                        Cancel
                    </button>
                </div>


            </form>
        </div>
    </div>
</div>
</body>
@include("layouts.footer")


</html>