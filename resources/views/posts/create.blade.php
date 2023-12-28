<form action="{{ route('posts.store') }}" method='post'>
    @csrf
    <input type="text" name="title"><br><br>

    <input type="text" name="body"><br><br>
    <button>submit</button>


