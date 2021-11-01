
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laratour</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <!-- Halfmoon CSS -->
<link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.11.0/css/bootstrap-tour.css'>
<link rel="stylesheet" href="{{ config('laratour.css_path') }}">

</head>
<body class="{{ config('laratour.dark_mode') == 'true' ? 'dark-mode' : '' }} overflow-hidden">

<div class="container">
  @yield('content')
</div>

</body>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<!-- Halfmoon JS -->
<script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.11.0/js/bootstrap-tour.js'></script>
<script>
    var tour = new Tour({
  steps: [
    @forelse(tour() as $tour)
    {
          element: '{{ $tour->element }}',
          title: '{{ $tour->title ?? null }}',
          content: '{{ $tour->content ?? null }}',
          placement: '{{ $tour->placement ?? null }}',
          @if ($tour->path != null)
            path: '{{ $tour->path }}',
          @endif
    },
    @empty
    @endforelse
  ],
  backdrop: false,
  storage: false
});

tour.init();
// tour.start();
$("#startTourBtn").click(function() {
  tour.restart();
});

</script>

<script  src="{{ config('laratour.script_path') }}"></script>

</body>
</html>