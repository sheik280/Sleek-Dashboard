       <div class="right-sidebar-2">
         <div class="right-sidebar-container-2">
           <div class="slim-scroll-right-sidebar-2">
             <div class="right-sidebar-2-header">
               <h2>Layout Settings</h2>
               <p>User Interface Settings</p>
               <div class="btn-close-right-sidebar-2">
                 <i class="mdi mdi-window-close"></i>
               </div>
             </div>

             <div class="right-sidebar-2-body">
               <span class="right-sidebar-2-subtitle">Header Layout</span>
               <div class="no-col-space">
                 <a href="javascript:void(0);" class="btn-right-sidebar-2 header-fixed-to btn-right-sidebar-2-active">Fixed</a>
                 <a href="javascript:void(0);" class="btn-right-sidebar-2 header-static-to">Static</a>
               </div>

               <span class="right-sidebar-2-subtitle">Sidebar Layout</span>
               <div class="no-col-space">
                 <select class="right-sidebar-2-select" id="sidebar-option-select">
                   <option value="sidebar-fixed">Fixed Default</option>
                   <option value="sidebar-fixed-minified">
                     Fixed Minified
                   </option>
                   <option value="sidebar-fixed-offcanvas">
                     Fixed Offcanvas
                   </option>
                   <option value="sidebar-static">Static Default</option>
                   <option value="sidebar-static-minified">
                     Static Minified
                   </option>
                   <option value="sidebar-static-offcanvas">
                     Static Offcanvas
                   </option>
                 </select>
               </div>

               <span class="right-sidebar-2-subtitle">Header Background</span>
               <div class="no-col-space">
                 <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active header-light-to">Light</a>
                 <a href="javascript:void(0);" class="btn-right-sidebar-2 header-dark-to">Dark</a>
               </div>

               <span class="right-sidebar-2-subtitle">Navigation Background</span>
               <div class="no-col-space">
                 <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active sidebar-dark-to">Dark</a>
                 <a href="javascript:void(0);" class="btn-right-sidebar-2 sidebar-light-to">Light</a>
               </div>

               <span class="right-sidebar-2-subtitle">Direction</span>
               <div class="no-col-space">
                 <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active ltr-to">LTR</a>
                 <a href="javascript:void(0);" class="btn-right-sidebar-2 rtl-to">RTL</a>
               </div>

               <div class="d-flex justify-content-center" style="padding-top: 30px">
                 <div id="reset-options" style="width: auto; cursor: pointer" class="btn-right-sidebar-2 btn-reset">
                   Reset Settings
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       </div>

       <footer class="footer mt-auto">
         <div class="copyright bg-white">
           <p>
             &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard
             Bootstrap Template by
             <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
           </p>
         </div>
         <script>
           var d = new Date();
           var year = d.getFullYear();
           document.getElementById("copy-year").innerHTML = year;
         </script>
       </footer>
       </div>
       </div>

       <script src="assets/plugins/jquery/jquery.min.js"></script>
       <script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
       <script src="assets/plugins/jekyll-search.min.js"></script>

       <script src="assets/plugins/charts/Chart.min.js"></script>

       <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
       <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>

       <script src="assets/plugins/daterangepicker/moment.min.js"></script>
       <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
       <script>
         jQuery(document).ready(function() {
           jQuery('input[name="dateRange"]').daterangepicker({
             autoUpdateInput: false,
             singleDatePicker: true,
             locale: {
               cancelLabel: "Clear",
             },
           });
           jQuery('input[name="dateRange"]').on(
             "apply.daterangepicker",
             function(ev, picker) {
               jQuery(this).val(picker.startDate.format("MM/DD/YYYY"));
             }
           );
           jQuery('input[name="dateRange"]').on(
             "cancel.daterangepicker",
             function(ev, picker) {
               jQuery(this).val("");
             }
           );
           jQuery(document).ready(function() {
             jQuery('#basic-data-table').DataTable({
               "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
             });
           });
         });
       </script>

       <script src="assets/plugins/toastr/toastr.min.js"></script>
       <script src="assets/plugins/data-tables/jquery.datatables.min.js"></script>
       <script src="assets/plugins/data-tables/datatables.bootstrap4.min.js"></script>

       <script src="assets/js/sleek.bundle.js"></script>
       </body>

       </html>