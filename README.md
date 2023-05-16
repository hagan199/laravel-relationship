Laravel RESTful API
This is a simple example of how to create a RESTful API in Laravel 8.

Endpoints
Get all posts
Retrieves all posts.

URL: GET /api/posts
Get a single post
Retrieves a single post by its ID.

URL: GET /api/posts/{id}
Parameters:
id (integer): The ID of the post.
Create a new post
Creates a new post.

URL: POST /api/posts
Request Body:
title (string): The title of the post.
content (string): The content of the post.
Update a post
Updates an existing post by its ID.

URL: PUT /api/posts/{id}
Parameters:
id (integer): The ID of the post.
Request Body:
title (string): The updated title of the post.
content (string): The updated content of the post.
Delete a post
Deletes a post by its ID.

URL: DELETE /api/posts/{id}
Parameters:
id (integer): The ID of the post.
