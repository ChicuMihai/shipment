<html>

@include("layouts.navbar")<br><br>
<body>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<!-- Include Editor style. -->
<link href="{{ asset('/css/froala_editor.pkgd.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('/css/froala_style.min.css')}}" rel="stylesheet" type="text/css" />
<!-- Create a tag that we will use as the editable area. -->
<!-- You can use a div tag as well. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- Include Editor JS files. -->
<script type="text/javascript" src="{{asset('/js/froala_editor.min.js')}}"></script>
 <script>
  $(function() {
    $('textarea').froalaEditor({
      // Set custom buttons with separator between them.
      toolbarButtons: ['undo', 'redo' , '|', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'outdent', 'indent', 'clearFormatting', 'insertTable', 'html'],
      toolbarButtonsXS: ['undo', 'redo' , '-', 'bold', 'italic', 'underline']
    })
  });
</script>
</head>
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Create new page</h1>
            <form action="{{url("pages")}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif


                <div class="form-group">
                    <label for="title">Title <span class="require">*</span></label>
                    <input type="text" class="form-control" name="title" required />
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <span class="require">*</span> <textarea rows="6" class="form-control" name="body" required></textarea>
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