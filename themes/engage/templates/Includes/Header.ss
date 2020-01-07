<header role="banner">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;">
        <a class="navbar-brand" href="$BaseHref">$SiteConfig.Title</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <% loop $Menu(1) %>
                    <li class="$LinkingMode nav-item<% if $isCurrent || $isSection %> active<% end_if %>">
                        <a class="nav-link" href="$Link" title="$Title.XML">$MenuTitle.XML</a>
                    </li>
		        <% end_loop %>
            </ul>
            <!-- <div class="navbar-text">
                <a href="#" class="btn btn-outline-dark">Log In</a>
            </div> -->
        </div>
    </nav>
</header>
