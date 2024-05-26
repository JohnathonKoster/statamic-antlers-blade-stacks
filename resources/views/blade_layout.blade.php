<!doctype html>
<html lang="en">
<head>
	<title>Stacks on Stacks</title>
</head>
<body>
	<h1>Blade Layout</h1>

	<ul>
		<li><a href="/">Antlers Layout</a></li>
		<li><a href="/blade-layout">Blade Layout</a></li>
	</ul>

	{{-- Test to ensure things to not get doubled up. --}}
	@push('the_stack')
		<br /> * I am pushed from within the Layout itself.
	@endpush

	@stack('the_stack')
</body>
</html>