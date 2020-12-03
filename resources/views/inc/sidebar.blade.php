
<ul class="list-group">
    <button type="button" class="list-group-item active1" disabled style="background-color: cadetblue; color: white"><span>DASHBOARD</span></button>
    <a href="{{ route('admin_users') }}" type="button" class="list-group-item list-group-item-action"><i class="fas fa-users"></i> <span>Users</span></a>
    <a href="{{ route('admin_books') }}" type="button" class="list-group-item list-group-item-action"><i class="fas fa-book"></i> <span>Books</span></a>
    <a href="{{ route('admin_authors') }}" type="button" class="list-group-item list-group-item-action"><i class="fas fa-user"></i> <span>Authors</span></a>
    <a href="{{ route('admin_genres') }}" type="button" class="list-group-item list-group-item-action"><i class="fas fa-layer-group"></i> <span>Genres</span></a>
    <a href="{{ route('admin_countries') }}" type="button" class="list-group-item list-group-item-action"><i class="fas fa-globe-americas"></i> <span>Countries</span></a>
</ul>
