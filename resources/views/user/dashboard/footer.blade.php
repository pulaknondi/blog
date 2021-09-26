<footer class="sl-footer">
        <div class="footer-left">
          
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{asset('/backend/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('/backend/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('/backend/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('/backend/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('/backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('/backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('/backend/lib/d3/d3.js')}}"></script>
    <script src="{{asset('/backend/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('/backend/lib/chart.js/Chart.js')}}"></script>
    <script src="{{asset('/backend/lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('/backend/lib/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('/backend/lib/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('/backend/lib/flot-spline/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('/backend/js/starlight.js')}}"></script>
    <script src="{{asset('/backend/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('/backend/js/dashboard.js')}}"></script>
    <script src="{{asset('/backend/lib/highlightjs/highlight.pack.js')}}"></script>
    <script src="{{asset('/backend/lib/select2/js/select2.min.js')}}"></script>

    <script src="{{asset('/backend/lib/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('/backend/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
    <script src="{{asset('/backend/js/starlight.js')}}"></script>
    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>

    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      })
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
