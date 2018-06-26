<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Biro Hukum Prov NTB</title>
    <link rel="shortcut icon" href="<?php echo base_url() ;?>assets/img/logo_ntb_clear.png">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/cropper/cropper.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-fileupload.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/footable/footable.core.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

</head>
<body class="gray-bg" style="background:#000;">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <?php $this->load->view('Tempelate/sidebar')?>
        </nav>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <?php $this->load->view('Tempelate/navbar')?>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><?php echo $cop ?></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">home</a>
                        </li>
                        <li>
                            <a><?php echo $breadcrumb ?></a>
                        </li>
                        <li class="active">
                            <strong><?php echo $active ?></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeIn">
                <?php $this->load->view($konten); ?>   
            </div>
            <div class="footer">
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
                </div>
            </div>

        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/pace/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/chosen/chosen.jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/jsKnob/jquery.knob.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/jasny/jasny-bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/nouslider/jquery.nouislider.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/switchery/switchery.js"></script>
    <script src="<?php echo base_url(); ?>assets/s/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/clockpicker/clockpicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/cropper/cropper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/fullcalendar/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/select2/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-fileupload.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/footable/footable.all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/jeditable/jquery.jeditable.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.priceformat.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.priceformat.min.js"></script>
    
    <script type="text/javascript">
    $(function(){
          $('#example2').priceFormat({
          prefix: 'Rp ',
          centsSeparator: ',',
          thousandsSeparator: '.'
           });
    })
    </script>
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                   
                ]

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>


       <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  $( function() {
    $( "#datepicker3" ).datepicker();
  } );
   $( function() {
    $( "#datepicker4" ).datepicker();
  } );
    $( function() {
    $( "#datepicker5" ).datepicker();
  } );
     $( function() {
    $( "#datepicker6" ).datepicker();
  } );
     $( function() {
    $( "#datepicker7" ).datepicker();
  } );
     $( function() {
    $( "#datepicker8" ).datepicker();
  } );
        $( function() {
    $( "#datepicker9" ).datepicker();
  } );
     $( function() {
    $( "#datepicker10" ).datepicker();
  } );
        $( function() {
    $( "#datepicker11" ).datepicker();
  } );
     $( function() {
    $( "#datepicker12" ).datepicker();
  } );
  </script>
        
    <script type="text/javascript">
        $(window).load(function(){$("#message").fadeOut(8000);})
    </script>
    <script>
        $(document).ready(function() {
            $('.footable').footable();
            $('.footable2').footable();
            $('.footable2').footable();

        });
    </script>
    <script>
        $(document).ready(function(){
            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                    files = this.files,
                    file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                divStyle.backgroundColor = ev.color.toHex();
            });

            $('.clockpicker').clockpicker();

            $('input[name="daterange"]').daterangepicker();

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

            $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });


            $(".touchspin1").TouchSpin({
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin2").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%',
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin3").TouchSpin({
                verticalbuttons: true,
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });


        });
var config = {
    '.chosen-select'           : {},
    '.chosen-select-deselect'  : {allow_single_deselect:true},
    '.chosen-select-no-single' : {disable_search_threshold:10},
    '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
    '.chosen-select-width'     : {width:"95%"}
}
for (var selector in config) {
    $(selector).chosen(config[selector]);
}

$("#ionrange_1").ionRangeSlider({
    min: 0,
    max: 5000,
    type: 'double',
    prefix: "$",
    maxPostfix: "+",
    prettify: false,
    hasGrid: true
});

$("#ionrange_2").ionRangeSlider({
    min: 0,
    max: 10,
    type: 'single',
    step: 0.1,
    postfix: " carats",
    prettify: false,
    hasGrid: true
});

$("#ionrange_3").ionRangeSlider({
    min: -50,
    max: 50,
    from: 0,
    postfix: "°",
    prettify: false,
    hasGrid: true
});

$("#ionrange_4").ionRangeSlider({
    values: [
    "January", "February", "March",
    "April", "May", "June",
    "July", "August", "September",
    "October", "November", "December"
    ],
    type: 'single',
    hasGrid: true
});

$("#ionrange_5").ionRangeSlider({
    min: 10000,
    max: 100000,
    step: 100,
    postfix: " km",
    from: 55000,
    hideMinMax: true,
    hideFromTo: false
});

$(".dial").knob();

$("#basic_slider").noUiSlider({
    start: 40,
    behaviour: 'tap',
    connect: 'upper',
    range: {
        'min':  20,
        'max':  80
    }
});

$("#range_slider").noUiSlider({
    start: [ 40, 60 ],
    behaviour: 'drag',
    connect: true,
    range: {
        'min':  20,
        'max':  80
    }
});

$("#drag-fixed").noUiSlider({
    start: [ 40, 60 ],
    behaviour: 'drag-fixed',
    connect: true,
    range: {
        'min':  20,
        'max':  80
    }
});

</script>
</body>
</html>
