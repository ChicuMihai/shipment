<html>

@include("layouts.navbar")<br><br>
<body>
<head>
    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Include Editor style. -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
        <!-- Create a tag that we will use as the editable area. -->
        <!-- You can use a div tag as well. -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

        <!-- Include Editor JS files. -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1//js/froala_editor.pkgd.min.js"></script>
        <script>
            $(function() {
                $('textarea').froalaEditor({
                    // Set custom buttons with separator between them.
                    placeholderText: '{!! $page->body !!}',
                    toolbarButtons: ['undo', 'redo' , '|', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'outdent', 'indent', 'clearFormatting', 'insertTable', 'html'],
                    toolbarButtonsXS: ['undo', 'redo' , '-', 'bold', 'italic', 'underline']

                })
            });
        </script>
    </head>
</head>
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Edit Page</h1>
            <form action="{{url("/pages/".$page->id)}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PATCH')}}
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
                    <span class="require">*</span> <textarea rows="5" class="form-control" name="body" placeholder="{!! $page->body !!}"></textarea>
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
                        Update
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