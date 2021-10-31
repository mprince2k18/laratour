
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - bootstrap tour</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <!-- Halfmoon CSS -->
<link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.11.0/css/bootstrap-tour.css'>
<link rel="stylesheet" href="{{ config('laratour.css_path') }}">

</head>
<body class="dark-mode-none overflow-hidden">

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
    {
      element: "#panel1",
      title: "Installation",
      content: "This is the installation panel",
      placement: "bottom"
    },
    {
      element: "#panel2",
      title: "CLI commands",
      content: "This is the CLI commands panel",
      placement: "bottom"
    },
    {
      element: "#panel3",
      title: "File Explorer",
      content: "This is the File Explorer panel",
      placement: "right",
    //   path: "tour.html"
    },
    {
      element: "#panel4",
      title: "Card Title",
      content: "This is the Card Title",
      placement: "bottom",
    //   path: "tour.html"
    },
  ],
  backdrop: false,
  storage: false
});

// tour.init();
// tour.start();
tour.init();
// tour.start();
$("#startTourBtn").click(function() {
  tour.restart();
});

</script>

<script  src="{{ config('laratour.script_path') }}"></script>

</body>
</html>