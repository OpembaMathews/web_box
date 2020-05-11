@extends('layouts.index')

@section('content')
<div class="page-head" data-bg-image="{{ asset ('frontend/libraryindexes/images/koyo_back.PNG') }}">
	<div class="container">
		<h2 class="page-title">My Name</h2>
	</div>
</div>

<main class="main-content">
	<div class="fullwidth-block">
		<div class="container">
			<div class="row">
				<div class="content col-md-8">
					<h2 class="section-title">Upcoming Events</h2>
					<ul class="event-list large">
						<li>
							<h3 class="event-title"><a href="#">africa mission trip</a></h3>
							<span class="event-meta">
								<span><i class="fa fa-calendar"></i>30 mar 2014</span>
								<span><i class="fa fa-map-marker"></i> Africa</span>
							</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque recusandae rerum alias veniam nisi repellat, libero molestias praesentium dolore harum quisquam quam dolorum repudiandae et, earum doloremque repellendus fugiat ab.</p>
							<a href="#" class="button">Join to this event</a>
							<a href="#" class="button secondary">Ask a question</a>
						</li>
						<li>
							<h3 class="event-title"><a href="#">Bible school</a></h3>
							<span class="event-meta">
								<span><i class="fa fa-calendar"></i>30 mar 2014</span>
								<span><i class="fa fa-map-marker"></i> Saint paul church</span>
							</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, consectetur explicabo beatae blanditiis dignissimos hic esse, voluptatum eaque maxime magni id possimus repudiandae ut exercitationem et temporibus ex vitae? Consequuntur!</p>
							<a href="#" class="button">Join to this event</a>
							<a href="#" class="button secondary">Ask a question</a>
						</li>
						<li>
							<h3 class="event-title"><a href="#">praying for kids</a></h3>
							<span class="event-meta">
								<span><i class="fa fa-calendar"></i>30 mar 2014</span>
								<span><i class="fa fa-map-marker"></i> true church</span>
							</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit dicta dolores vero ipsum mollitia, laborum maiores beatae molestias numquam, eaque rerum optio facere nobis et voluptate, similique harum totam! At.</p>
							<a href="#" class="button">Join to this event</a>
							<a href="#" class="button secondary">Ask a question</a>
						</li>
						<li>
							<h3 class="event-title"><a href="#">love giving</a></h3>
							<span class="event-meta">
								<span><i class="fa fa-calendar"></i>30 mar 2014</span>
								<span><i class="fa fa-map-marker"></i> St cathedral</span>
							</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit earum, minus error ipsum optio praesentium exercitationem necessitatibus accusamus reiciendis veritatis iste, aliquam nulla neque magni debitis deleniti harum molestias. Suscipit.</p>
							<a href="#" class="button">Join to this event</a>
							<a href="#" class="button secondary">Ask a question</a>
						</li>
						<li>
							<h3 class="event-title"><a href="#">god ont the vacation</a></h3>
							<span class="event-meta">
								<span><i class="fa fa-calendar"></i>30 mar 2014</span>
								<span><i class="fa fa-map-marker"></i> greenie lake</span>
							</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae error officia, vero quo ducimus maiores, itaque consequatur vitae tempore nulla beatae quis. Asperiores perspiciatis facere harum ducimus doloribus. Neque, accusamus?</p>
							<a href="#" class="button">Join to this event</a>
							<a href="#" class="button secondary">Ask a question</a>
						</li>
						<li>
							<h3 class="event-title"><a href="#">homeless helping</a></h3>
							<span class="event-meta">
								<span><i class="fa fa-calendar"></i>30 mar 2014</span>
								<span><i class="fa fa-map-marker"></i> Detroit city</span>
							</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, minus perspiciatis. Ad vero maxime iusto nemo, id optio iure officiis quisquam incidunt, ipsum suscipit! Unde facilis nisi totam. Reiciendis, accusamus.</p>
							<a href="#" class="button">Join to this event</a>
							<a href="#" class="button secondary">Ask a question</a>
						</li>
					</ul>
				</div>
				<div class="sidebar col-md-3 col-md-offset-1">
					<div class="widget">
						<h3 class="widget-title">Categories</h3>
						<ul class="arrow">
							<li><a href="#">Perspiciatis unde</a></li>
							<li><a href="#">Omnis iste natus</a></li>
							<li><a href="#">Voluptatem accusantium</a></li>
							<li><a href="#">Doloremque eaque</a></li>
							<li><a href="#">Totam rem aperiam</a></li>
						</ul>
					</div>

					<div class="widget">
						<h3 class="widget-title">Donations</h3>
						<p>Distinctio unde consequuntur delectus, repudiandae, impedit atque earum adipisci, explicabo perferendis.</p>
						<a href="#" class="button">Make a donation</a>
					</div>

					<div class="widget">
						<h3 class="widget-title">Gallery updates</h3>

						<div class="galery-thumb">
							<a href="#"><img src="{{ asset ('frontend/libraryindexes/images/gallery-thumb-1.jpg') }}" alt=""></a>
							<a href="#"><img src="{{ asset ('frontend/libraryindexes/images/gallery-thumb-2.jpg') }}" alt=""></a>
							<a href="#"><img src="{{ asset ('frontend/libraryindexes/images/gallery-thumb-3.jpg') }}" alt=""></a>
							<a href="#"><img src="{{ asset ('frontend/libraryindexes/images/gallery-thumb-4.jpg') }}" alt=""></a>
							<a href="#"><img src="{{ asset ('frontend/libraryindexes/images/gallery-thumb-5.jpg') }}" alt=""></a>
							<a href="#"><img src="{{ asset ('frontend/libraryindexes/images/gallery-thumb-6.jpg') }}" alt=""></a>
						</div>
					</div>

					<div class="widget">
						<h3 class="widget-title">Text widget </h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum aliquam obcaecati velit, atque necessitatibus molestias ullam tempore itaque quidem sequi ea sed consectetur, eligendi cupiditate saepe! Hic veniam maiores explicabo.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main> <!-- .main-content -->


@endsection
