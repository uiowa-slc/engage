<% include Header %>


<div class="container">
	<div class="row justify-content-md-center">
		<div class="<% if $Children || $Menu(2) %>col-lg-8<% else %>col-lg-10<% end_if %>" role="main">
			<article class="my-5">
				<h1>$Title</h1>
				<div class="content">$Content</div>
			</article>
			$Form
			$PageComments
		</div>
		<% if $Menu(2) %>
			<% include SideBar %>
		<% end_if %>
	</div>
</div>

