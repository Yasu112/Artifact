<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link 
        href="https:/
        /fonts.googleapis.com/css?family=Nunito:200,600"
        rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                    
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button> 
                    </form>
                </div>
            @endforeach
            

        </div>
        
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        
        <h2 class='title'>

            @foreach ($posts as $post)
                
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                
            @endforeach
            
        </h2>
        
        <h2>
            [<a href='/posts/create'>create</a>]
        </h2>
        
        
        
    </body>

</html>