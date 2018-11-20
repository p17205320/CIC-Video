    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>
    <script type="text/javascript" src="jquery.tooltipster.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.tooltip').tooltipster();
            $('.tooltip').tooltipster('disable');
        });
    </script>
    
    <script>
  $(function() {
    $( "#button" ).click(function() {
      $('.tooltip').tooltipster('enable');
    });
  });
  </script>