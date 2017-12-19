<ul class="nav navbar-nav">
<!-- 	<li class="{{ Request::is('/') ? "active" : ""}}"><a href="/home">Home</a></li> -->
	<li class=" {{ Request::is('/') ? "active" : "" }}"><a href="{{ route('categories.index')}}">Categories</a></li>

	<li class=" {{ Request::is('/') ? "active" : "" }}"><a href="{{ route('posts.index')}}">Posts</a></li>

	<li class=" {{ Request::is('/') ? "active" : "" }}"><a href="{{ route('posts.create')}}">New Post</a></li>

	<li class=" {{ Request::is('/') ? "active" : "" }}"><a href="{{ route('clients.index')}}">Clients</a></li>

	<li class=" {{ Request::is('/') ? "active" : "" }}"><a href="{{ route('clients.create')}}">New Client</a></li>

	<li class=" {{ Request::is('/') ? "active" : "" }}"><a href="{{ route('comments.index')}}">Comments</a></li>

	<li class=" {{ Request::is('/') ? "active" : "" }}"><a href="{{ route('comments.create')}}">New Comment</a></li>

</ul>