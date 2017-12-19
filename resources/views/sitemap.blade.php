<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
   <url>
      <loc>http://www.bmngraphics.co.ke/</loc>
      <lastmod>2017-12-01</lastmod>
      <changefreq>weekly</changefreq>
      <priority>1.0</priority>
   </url>
	@foreach($posts as $post)
		<url>
			<loc>{{ URL::route('posts.show', [$post->id])}}</loc>
			<lastmod>{{ gmdate(DateTime::W3C, strtotime($post->updated_at))}}</lastmod>
			<changefreq>daily</changefreq>
			<priority>1.0</priority>
		</url>
	@endforeach
		<url>
			<loc>{{ URL::route('index')</loc>
			<lastmod></lastmod>
			<changefreq>daily</changefreq>
			<priority>1.0</priority>
		</url>
		@foreach($posts as $post)
		<url>
			<loc>{{ URL::route('all')</loc>
			<lastmod>{{ gmdate(DateTime::W3C, strtotime($post->updated_at))}}</lastmod>
			<changefreq>daily</changefreq>
			<priority>1.0</priority>
		</url>
		@endforeach
</urlset>