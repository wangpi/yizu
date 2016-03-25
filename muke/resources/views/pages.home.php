@section('content')  
@foreach ($posts->results as $post)  
<div class="post">  
<h1>{{ HTML::link('view/'.$post->id, $post->title) }}</h1>  
<p>{{ substr($post->body,0, 120).' [..]' }}</p>  
<p>{{ $post->author->username }} {{ $post->created_at }}</p>  
<p>{{ HTML::link('view/'.$post->id, '阅读更多 →') }}</p>  
</div>  
@endforeach  
{{ $posts->links() }}  
@endsection  