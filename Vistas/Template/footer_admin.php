<script>
  const base_url = "<?= base_url(); ?>";
  </script>
<!-- Essential javascripts for application to work-->
    <script src="<?=mediaStivenjs ();?>/jquery-3.3.1.min.js"></script>
    <script src="<?=mediaStivenjs ();?>/popper.min.js"></script>
    <script src="<?=mediaStivenjs ();?>/bootstrap.min.js"></script>
    <script src="<?=mediaStivenjs ();?>/main.js"></script>
  
    <script src="<?=mediaStivenjs ();?>/functions_admin.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?=mediaStivenjs ();?>/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="<?=mediaStivenjs ();?>/plugins/sweetalert.min.js"></script>
     <!-- Data table plugin-->

    <script type="text/javascript" src="<?=mediaStivenjs(); ?>/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?=mediaStivenjs(); ?>/plugins/dataTables.bootstrap.min.js"></script>
    
    <script src="<?=mediaStivenjs(); ?>/functions_admin.js"></script>
    <script src="<?=mediaStivenjs(); ?>/<?= $data['page_functions_js']; ?>"></script>
    

  </body>
</html>