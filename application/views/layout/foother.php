
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="<?= base_url(); ?>js/jquery-1.7.1.min.js" type="text/javascript"></script>
            <!-- Bootstrap -->
        <script src="<?= base_url(); ?>js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url(); ?>js/AdminLTE/app.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                $("#mas").click(function(e){
                    e.preventDefault();
                    $("#alternativas").append('<div class="form-group">'+
                    '<div class="col-lg-7"><input type="text" class="form-control" id="inputPassword" placeholder="Alternativa">'+
                    '</div><div class="col-lg-2"><div class="radio"><label>'+
                    '<input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>'+
                    'Correcto</label></div></div></div>');
                });
            });
        </script>
    </body>
</html>