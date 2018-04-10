<html>

@include("layouts.navbar")<br><br>
<body>

<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Create new page</h1>
            <form action="{{url("pages")}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title <span class="require">*</span></label>
                    <input type="text" class="form-control" name="title" />
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <span class="require">*</span> <textarea rows="5" class="form-control" name="body" ></textarea>
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