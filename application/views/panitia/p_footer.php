<!--Footer Starts-->
<!-- <footer class="page-footer">
    <div class="footer-copyright">
        <div class="container center-align card-text-home" style="color:white">
            ©ARA HMIT 2021
        </div>
    </div>
</footer> -->
<!--Footer Ends-->

<script>
    // document.addEventListener('DOMContentLoaded', function () {
    //     var elems = document.querySelectorAll('.modal');
    //     var instances = M.Modal.init(elems, options);
    // });

    // Or with jQuery
    // $(document).ready(function(){
    //     $('.modal').modal();
    // });
</script>

<!-- Script Start -->
<!-- <script type="text/javascript" src="js/materialize.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/js/materialize.js"></script> -->
<script src="<?php echo base_url(); ?>assets/js/init.js"></script>
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
<!-- Script End -->

<!-- <script>
    $(document).ready(function () {

        load_data();

        function load_data(query) {
            $.ajax({
                // url: "<?php echo base_url() . 'panitiaaraonly/fetch/' . $onpage ; ?>",
                url: "<?php echo base_url() . 'panitiaaraonly/fetchwebinar'; ?>",
                method: "POST",
                data: { query: query },
                success: function (data) {
                    $('#result').html(data);
                }
            })
        }

        $('#keyword').keyup(function () {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            }
            else {
                load_data();
            }
        });

    });
</script> -->

</body>

</html>