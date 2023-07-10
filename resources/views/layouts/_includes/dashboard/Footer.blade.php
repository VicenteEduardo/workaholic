<footer class="py-1 mt-4 bg-primary">

    <p class="text-center mt-3 text-white">© {{date('Y')}} Rede de Mediatecas de Angola, ReMA</p>
</footer>
@if (session('create'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Cadastrado com sucesso!',
            showConfirmButton: true
        })
    </script>

@elseif(session('destroy'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Eliminado com sucesso!',
            showConfirmButton: true
        })
    </script>

@elseif(session('update'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Atulização realizada com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('edit'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Alterações foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('create_image'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Imagens foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('NoAuth'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Não tem autorização para visualizar esta página!',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
@endif
</div> <!-- .wrapper -->
<script src="/dashboard/js/jquery.min.js"></script>
<script src="/dashboard/js/popper.min.js"></script>
<script src="/dashboard/js/moment.min.js"></script>
<script src="/dashboard/js/bootstrap.min.js"></script>
<script src="/dashboard/js/simplebar.min.js"></script>
<script src='/dashboard/js/daterangepicker.js'></script>
<script src='/dashboard/js/jquery.stickOnScroll.js'></script>
<script src="/dashboard/js/tinycolor-min.js"></script>
<script src="/dashboard/js/config.js"></script>
<script src="/dashboard/js/d3.min.js"></script>
<script src="/dashboard/js/topojson.min.js"></script>
<script src="/dashboard/js/datamaps.all.min.js"></script>
<script src="/dashboard/js/datamaps-zoomto.js"></script>
<script src="/dashboard/js/datamaps.custom.js"></script>
<script src="/dashboard/js/Chart.min.js"></script>
<script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
</script>
<script src="/dashboard/js/gauge.min.js"></script>
<script src="/dashboard/js/jquery.sparkline.min.js"></script>
<script src="/dashboard/js/apexcharts.min.js"></script>
<script src="/dashboard/js/apexcharts.custom.js"></script>
<script src='/dashboard/js/jquery.mask.min.js'></script>
<script src='/dashboard/js/select2.min.js'></script>
<script src='/dashboard/js/jquery.steps.min.js'></script>
<script src='/dashboard/js/jquery.validate.min.js'></script>
<script src='/dashboard/js/jquery.timepicker.js'></script>
<script src='/dashboard/js/dropzone.min.js'></script>
<script src='/dashboard/js/uppy.min.js'></script>
<script src='/dashboard/js/quill.min.js'></script>
<script src='/dashboard/js/jquery.dataTables.min.js'></script>
<script src='/dashboard/js/dataTables.bootstrap4.min.js'></script>
<script>
    $('#dataTable-1').DataTable({
        autoWidth: true,
        "lengthMenu": [
            [8, 16, 32, -1],
            [8, 16, 32, "All"]
        ],
        "order": [
            [0, 'desc']
        ]
    });
</script>
<script src="/js/sweetalert2.all.min.js"></script>


<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
</script>


<script>
    $('.select2').select2({
        theme: 'bootstrap4',
    });
    $('.select2-multi').select2({
        multiple: true,
        theme: 'bootstrap4',
    });
    $('.drgpicker').daterangepicker({
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale: {
            format: 'MM/DD/YYYY'
        }
    });
    $('.time-input').timepicker({
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
    });
    /** date range picker */
    if ($('.datetimes').length) {
        $('.datetimes').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
                format: 'M/DD hh:mm A'
            }
        });
    }
    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
                'month')]
        }
    }, cb);
    cb(start, end);
    $('.input-placeholder').mask("00/00/0000", {
        placeholder: "__/__/____"
    });
    $('.input-zip').mask('00000-000', {
        placeholder: "____-___"
    });
    $('.input-money').mask("#.##0,00", {
        reverse: true
    });
    $('.input-phoneus').mask('(000) 000-0000');
    $('.input-mixed').mask('AAA 000-S0S');
    $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
            'Z': {
                pattern: /[0-9]/,
                optional: true
            }
        },
        placeholder: "___.___.___.___"
    });

    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>




<style>
    /* style a mexer */
    .select2-container .select2-selection--single {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: 35px;
        user-select: none;
        -webkit-user-select: none;

    }

</style>



<script>
    $("#img-input").click(function() {
        $("#image_visible").hide();
    });
</script>

<script src="/dashboard/js/apps.js"></script>
</body>

</html>