<!DOCTYPE html>
<html>

<head>
    <title>Blog List</title>
</head>

<body>
    @if (session()->has('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif
    <h1>Blog List</h1>

    <ul>
        @forelse ($blogs as $blog)
            <li>
                <h2>{{ $blog->title }}</h2>
                <p><strong>Category:</strong> {{ $blog->category }}</p>
                <p>{{ $blog->description }}</p>
                <a href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
                <form action="{{ route('blogs.destroy', $blog->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        onclick="return confirm('Are you sure you want to delete this blog?');">Delete</button>
                </form>
            </li>
        @empty
            <p>Tidak Ada Data</p>
        @endforelse
    </ul>
    <a href="{{ route('blogs.create') }}" class="">New Blogs</a>



</body>

</html>
