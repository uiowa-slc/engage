<% include Header %>


<div class="container">
	<div class="row justify-content-md-center">
		<div class=" col-md-10" role="main">
			<article class="py-5">
				<h1>$Title</h1>
				<div class="content">$Content</div>
				<%--<% include MagnificExample %> -- %>
				<%-- <% include SlideshowExample %> --%>
				<%-- <% include ContentExample %> --%>
			</article>
			$Form
			$PageComments

		</div>
		<% if $Menu(2) || $SideBarView.Widgets %>
			<% include SideBar %>
		<% end_if %>
	</div>
</div>

