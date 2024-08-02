<!-- End of Page Wrapper -->


</div>

<footer class="footer ptb-20">
      <div class="col-md-12 text-center">
        <div class="copy_right">
          <p>
            Copyright <a href="#" target="_blank">Pos UMKM 2024</a>. All rights reserved.
          </p>
        </div>

      </div>
</footer>


</div>


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Pilih "Keluar" untuk mengakhiri sesi Anda saat ini.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url(); ?>administrator/logout">Keluar</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url(); ?>assets/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>

<script type="text/javascript" src="<?= base_url(); ?>assets/admin/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/admin/assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/admin/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/admin/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!--echarts-->
<script type="text/javascript" src="<?= base_url(); ?>assets/admin/assets/js/echarts/echarts-all-3.js"></script>
<!--init echarts-->

<!--datatables-->
<script src="<?= base_url(); ?>assets/admin/assets/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/assets/js/dataTables.bootstrap4.min.js"></script>


<script type="text/javascript" src="<?= base_url(); ?>assets/admin/assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?= base_url(); ?>assets/admin/assets/js/custom.js" type="text/javascript"></script>
<script>
  $(document).ready(function() {
    $('#bs4-table').DataTable();
  });
</script>



<script>
$(document).ready(function() {

 var dom = document.getElementById("b-area");
 var myChart = echarts.init(dom);

 var app = {};
 option = null;
 option = {
     color: ['#eac459','#DC143C', '#34bfa3' ],

     tooltip : {
         trigger: 'axis'
     },
     legend: {
         data:['Sale']
     },

     calculable : true,
     xAxis : [
         {
             type : 'category',
             boundaryGap : false,
             data : [
                <?php $this->db->limit(6); $data = $this->db->order_by('total_all', 'asc')->get_where('invoice', ['process' => 1]); ?>
                    <?php foreach($data->result_array() as $d): ?>
                      <?= $d['total_all'] ?>,
                <?php endforeach; ?>
              ]
         }
     ],
     yAxis : [
         {
             type : 'value'
         }
     ],
     series : [
         {
             name:'Terjual',
             type:'line',
             smooth:true,
             itemStyle: {normal: {areaStyle: {type: 'default'}}},
             data:[
                <?php $this->db->limit(6); $data = $this->db->order_by('total_all', 'asc')->get_where('invoice', ['process' => 1]); ?>
                <?php foreach($data->result_array() as $d): ?>
                  <?= $d['total_all'] ?>,
                <?php endforeach; ?>
              ]

             
         }
     ]
 };


 if (option && typeof option === "object") {
     myChart.setOption(option, false);
 }


 /**
  * Resize chart on window resize
  * @return {void}
  */

$(window).on('resize', function(){
setTimeout(function(){
   myChart.resize();
 },100);
  
})
$(".menu-toggler").on('click', function(){

     setTimeout(function(){
   myChart.resize();
 },100);

})
});

</script>


<script>

ClassicEditor
.create( document.querySelector( '#description' ) )
.then( editor => {
        console.log( editor );
} )
.catch( error => {
        console.error( error );
} );

$("#settingSelectRegency").select2({
    placeholder: 'Pilih Kabupaten/Kota',
    language: 'id'
})

$("#sendMailTo").select2({
    placeholder: 'Pilih Tujuan',
    language: 'id'
})

$("#selectProductForAddPackage").select2({
    placeholder: 'Pilih Produk',
    language: 'id'
})

</script>

</body>

</html>
