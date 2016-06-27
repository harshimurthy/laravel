
<html>

<body>


<!-- This approach was used before -->
<?php foreach($people as $person): ?>
	<li><?= $person; ?></li>
<?php endforeach; ?>


<!-- This is the new approach 
Replace <?php with @ 
remove ?>
<?= with {{ 
?> with }} ->echo
-->

@foreach($people as $person)
<li>{{ $person }} </li>
@endforeach	

<!-- if else -->

@if (empty($people))
	There are no people
@else
	There are some people
@endif

<!-- Unless -> if(! ) -->
@unless(empty($people))
	There are some people
@endunless


</body>
</html>