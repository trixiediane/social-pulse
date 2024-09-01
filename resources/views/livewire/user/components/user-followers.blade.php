<div>
    <h2>Followers</h2>
    <ul>
        @forelse ($followers as $follower)
            <li>{{ $follower->username }}</li>
        @empty
            <li>No followers found.</li>
        @endforelse
    </ul>

    {{ $followers->links() }} <!-- Pagination links for followers -->

    <h2>Following</h2>
    <ul>
        @forelse ($following as $followedUser)
            <li>{{ $followedUser->username }}</li>
        @empty
            <li>Not following anyone yet.</li>
        @endforelse
    </ul>

    {{ $following->links() }} <!-- Pagination links for following -->
</div>
