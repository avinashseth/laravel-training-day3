<form action="{{ route('post-add-new-lesson') }}" method="post">
    @csrf
    <p><label>Lesson Name</label></p>
    <p><input type="text" name="lesson_name" /></p>
    @error('lesson_name')
        <p style="color: red">{{ $message }}</p>
    @enderror
    <p><label>Is Public</label></p>
    <p>
        <select name="is_public">
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select>
    </p>
    @error('is_public')
        <p style="color: red">{{ $message }}</p>
    @enderror
    <p><input type="submit" value="Add New Lesson" /></p>
</form>