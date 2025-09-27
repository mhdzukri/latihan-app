<!DOCTYPE html>
<html>

<head>
    <title>Create Blog</title>
</head>

<body>
    <h1>Create Blog</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('blogs.update', $blog->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ old('title', $blog->title) }}">
        </div>

        <div>
            <label>Total View:</label>
            <input type="text" name="total_views" value="{{ old('total_views', $blog->total_views) }}">
        </div>

        <div>
            <label>Category:</label>
            <input type="text" name="category" value="{{ old('category', $blog->category) }}">
        </div>

        <div>
            <label>Description:</label>
            <textarea name="description">{{ old('description', $blog->description) }}</textarea>
        </div>

        <button type="submit">Update Blog</button>
    </form>
</body>

</html>
