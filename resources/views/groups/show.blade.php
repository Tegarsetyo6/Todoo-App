<h1>{{ $group->name }}</h1>
<p>{{ $group->description }}</p>

<form action="{{ route('groups.index') }}">
    <input type="submit" value="<-- Go Back" />
</form>

<form action="{{ route('invites.form') }}">
    <input type="submit" value="Send Invitation" />
</form>