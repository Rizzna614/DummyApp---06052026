<h1>Books</h1>

<ul>
@foreach ($books as $i)
<li>
    <h2>Title - {{ $i->getTitle() }}</h2>
    <p>Author - {{ $i->getAuthor() }}</p> <br>
    <p>Total page count - {{ $i->getTotalPagesCount() }}</p> <br>
    <p>Read page count - {{ $i->getReadPagesCount() }}</p> <br>

</li>
@endforeach
</ul>