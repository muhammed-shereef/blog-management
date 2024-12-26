<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Blog Management</h1>

    <!-- Form -->
    <form id="blogForm">
        <input type="hidden" id="blog_id">
        <div class="mb-3">
            <label>Title</label>
            <input type="text" id="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea id="description" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Content</label>
            <textarea id="content" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Image</label>
            <input type="file" id="image" class="form-control">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select id="status" class="form-control">
                <option value="1">Enabled</option>
                <option value="0">Disabled</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    <!-- Blog List -->
    <h2 class="mt-4">All Blogs</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="blogList">
            @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->description }}</td>
                <td>
                    <button class="btn btn-warning edit" data-id="{{ $blog->id }}">Edit</button>
                    <button class="btn btn-danger delete" data-id="{{ $blog->id }}">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
