<!-- side menu -->
<h1 class="d-none d-lg-block">Navigation</h1>
<ul>
    <li class="link @if(ROUTE::is('admin_dashboard')) active @endif">
        <a href="{{ route('admin_dashboard') }}">
            <i class="fas fa-th" aria-hidden="true"></i>
            <span class="d-none d-lg-inline">Dashboard</span>
        </a>
    </li>
    <li class="link @if(ROUTE::is([
                        'admin_article_create', 'article_create',
                        'admin_article_index', 'article_index',
                    ])) active @endif">
        <a href="#collapse-post"  data-toggle="collapse" aria-controls="collapse-post">
            <i class="fas fa-list-alt" aria-hidden="true"></i>
            <span class="d-none d-lg-inline">Article</span>
            <span class="badge badge-success float-right d-none d-lg-inline">20</span>
        </a>
        <ul class="collapse collapseable" id="collapse-post">
            <li><a href="{{ route($admin.'article_create') }}">Create New</a></li>
            <li><a href="{{ route($admin.'article_index') }}">View Article</a></li>
        </ul>
    </li>

    <li class="link @if(ROUTE::is(['admin_comments_approved', 'admin_comments_unapproved'])) active @endif">
        <a href="#collapse-comments"  data-toggle="collapse" aria-controls="collapse-comments">
            <i class="fas fa-pencil-alt" aria-hidden="true"></i>
            <span class="d-none d-lg-inline">Comments</span>
        </a>
        <ul class="collapse collapseable" id="collapse-comments">
            <li>
                <a href="{{ route('admin_comments_approved') }}">Approved
                    <span class="badge badge-success float-right d-none d-lg-inline">10</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin_comments_unapproved') }}">Unapproved
                    <span class="badge badge-warning float-right d-none d-lg-inline">10</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="link">
        <a href="#">
            <i class="fas fa-user" aria-hidden="true"></i>
            <span class="d-none d-lg-inline">Commenters</span>
            <span class="badge badge-success float-right d-none d-lg-inline">20</span>
        </a>
    </li>
    <li class="link @if(ROUTE::is(['admin_tags_index'])) active @endif">
        <a href="{{ route('admin_tags_index') }}">
            <i class="fas fa-tags" aria-hidden="true"></i>
            <span class="d-none d-lg-inline">Tags</span>
        </a>
    </li>
    <li class="link settings-btn">
        <a href="#">
            <i class="fas fa-cog" aria-hidden="true"></i>
            <span class="d-none d-lg-inline">Settings</span>
        </a>
    </li>
</ul>