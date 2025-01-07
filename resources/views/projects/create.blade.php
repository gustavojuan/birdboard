<!DOCTYPE html>
<html>

<head>

</head>

<body>


    <form method="POST" action="/projects" class="container">
        @csrf
        <h1 class="heading is-1">Create a project</h1>
        <div class="field">
            <label for="title">Title</label>
            <div class="control">
                <input type="text" name="title" id="title" placeholder="Title">
            </div>
        </div>

        <div class="field">
            <label for="description">Description</label>
            <div class="control">
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input type="submit" value="Create Project">
            </div>
        </div>

    </form>
</body>

</html>
