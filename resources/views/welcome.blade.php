<h1>Welcome!</h1>

<a href = "{{ route('greeting', ['name' => 'Amanda']) }}">Greetings</a> <br>
<a href = "{{ route('books') }}">Books</a> <br>

</form method = "get" action = "{{ route('greetingForm') }}">
Name: <input type = "text" id = "name" name = "name">
<input type = "submit" value = "SUBMIT">
</form>
