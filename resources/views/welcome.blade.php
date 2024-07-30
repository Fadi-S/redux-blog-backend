<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">.turbo-progress-bar {
            position: fixed;
            display: block;
            top: 0;
            left: 0;
            height: 3px;
            background: #0076ff;
            z-index: 9999;
            transition: width 300ms ease-out,
            opacity 150ms 150ms ease-in;
            transform: translate3d(0, 0, 0);
        }
    </style>
    <title>BlogApiV2</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-param" content="authenticity_token">
    <meta name="csrf-token"
          content="mrebTsJDUZc72yNKtjJkBqjFoPGqNv8GA1xD7A_U9uqmC9KflQtwWClm0PmRxgOHp9OUM-OjHodHGJKKszPTcQ">


    <link rel="stylesheet" href="./BlogApiV2_files/bootstrap.min.css">
    <link rel="stylesheet"
          href="./BlogApiV2_files/application-7179a99479c8732fae2f96240a1ed594f3e378672d81cafe2e6c6fe7c52cba75.css"
          data-turbo-track="reload">
    <script type="importmap" data-turbo-track="reload">{
  "imports": {
    "application": "/assets/application-6472b71b26d30a0e6525e3872d53125ac65db0d91d4217d27b92d9323cefbb16.js",
    "@hotwired/turbo-rails": "/assets/turbo.min-e5023178542f05fc063cd1dc5865457259cc01f3fba76a28454060d33de6f429.js"
  }
}
    </script>
    <link rel="modulepreload"
          href="https://reduxblog.herokuapp.com/assets/application-6472b71b26d30a0e6525e3872d53125ac65db0d91d4217d27b92d9323cefbb16.js">
    <link rel="modulepreload"
          href="https://reduxblog.herokuapp.com/assets/turbo.min-e5023178542f05fc063cd1dc5865457259cc01f3fba76a28454060d33de6f429.js">
    <script
        src="./BlogApiV2_files/es-module-shims.min-b8099fffdbd758070d4801321d43b389c5b6174a50782f9f4cb57061533b7ac2.js"
        async="async" data-turbo-track="reload"></script>
    <script type="module">import "application"</script>
</head>

<body data-new-gr-c-s-check-loaded="14.1189.0" data-gr-ext-installed="">

<div class="container">
    <h3>Redux Blog Post API Reference</h3>

    <p>ALL requests require a key parameter, eg `{{ $url }}/api/posts?key=123`</p>

    <table class="table">
        <thead>
        <tr>
            <th>Endpoint</th>
            <th>Method</th>
            <th>Example</th>
            <th>Sample Response</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><i>/api/posts</i></td>
            <td>GET</td>
            <td>{{ $url }}/api/posts</td>
            <td>
<pre>[
  { id: 1,
    title: 'Hi!',
    categories: 'Computer, Friends',
    content: 'Post about Friends'
  },
  {
    id: 2,
    title: 'New Post',
    categories: 'Candy',
    content: 'Post about Candy'
  }
]
</pre>
            </td>
            <td>
                Fetches the 40 most recent posts in the database.
                Note this list is occasionally cleaned out.
            </td>
        </tr>
        <tr>
            <td><i>/api/posts</i></td>
            <td>POST</td>
            <td>{{ $url }}/api/posts</td>
            <td>
<pre>{
  id: 1,
  title: 'Hi!',
  categories: 'Computer, Friends',
  content: 'Blog post content'
}
</pre>
            </td>
            <td>Creates a new blog post entry. Returns the created blog post with the ID</td>
        </tr>
        <tr>
            <td><i>/api/posts/:id</i></td>
            <td>GET</td>
            <td>{{ $url }}/api/posts/5</td>
            <td>
<pre>{
  id: 1,
  title: 'Hi!',
  categories: 'Computer, Friends',
  content: 'Blog post content'
}
</pre>
            </td>
            <td>Fetches a single blog post with the given ID. Includes the blog's content.</td>
        </tr>
        <tr>
            <td><i>/api/posts/:id</i></td>
            <td>DELETE</td>
            <td>{{ $url }}/api/posts/5</td>
            <td>
<pre>  {
    id: 1,
    title: 'Hi!',
    categories: 'Computer, Friends',
    content: 'Blog post content'
  }
</pre>
            </td>
            <td>Deletes a single blog post with the given ID. Returns the post</td>
        </tr>
        </tbody>
    </table>
</div>


</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true">
    <template shadowrootmode="open">
        <style>
            div.grammarly-desktop-integration {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                white-space: nowrap;
                border: 0;
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            div.grammarly-desktop-integration:before {
                content: attr(data-content);
            }
        </style>
        <div aria-label="grammarly-integration" role="group" tabindex="-1" class="grammarly-desktop-integration"
             data-content="{&quot;mode&quot;:&quot;full&quot;,&quot;isActive&quot;:true,&quot;isUserDisabled&quot;:false}"></div>
    </template>
</grammarly-desktop-integration>
</html>
