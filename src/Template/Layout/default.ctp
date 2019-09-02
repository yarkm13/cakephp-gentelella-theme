<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo isset($theme['title']) ? $theme['title'] : 'Gentelella'; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.5 -->
    <?php echo $this->Html->css('Gentelella./vendors/bootstrap/dist/css/bootstrap.min'); ?>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Switchery -->
    <?php echo $this->Html->css('Gentelella./vendors/abpetkov/switchery/dist/switchery.min'); ?>
    <!-- Cropperjs -->
    <?php echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.4/cropper.min.css'); ?>
    <?php echo $this->Html->css('Gentelella./vendors/fengyuanchen/jquery-cropper/dist/jquery-cropper.min'); ?>

    <?php echo $this->Html->css('Gentelella./vendors/iCheck/skins/flat/green'); ?>
    <?php echo $this->Html->css('Gentelella./vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min'); ?>
    <?php echo $this->Html->css('Gentelella./css/maps/jquery-jvectormap-2.0.3'); ?>
    <?php echo $this->Html->css('Gentelella./build/css/custom.min'); ?>
    <?php echo $this->Html->css('custom'); ?>

    <?php echo $this->fetch('css'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="nav-md  footer_fixed">
<div class="container body">
    <div class="main_container">
        <!-- Left side column. contains the sidebar -->
        <?php echo $this->element('aside-main-sidebar'); ?>

        <!-- Header Navbar: style can be found in header.less -->
        <?php echo $this->element('nav-top') ?>
        <!-- page content -->
        <div class="right_col" role="main">
            <?php echo $this->Flash->render(); ?>
            <?php echo $this->Flash->render('auth'); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php echo $this->element('footer'); ?>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery 2.1.4 -->
<?php echo $this->Html->script('Gentelella./vendors/jquery/dist/jquery.min'); ?>
<!-- Bootstrap 3.3.5 -->
<?php echo $this->Html->script('Gentelella./vendors/bootstrap/dist/js/bootstrap.min'); ?>
<!-- SlimScroll -->
<?php echo $this->Html->script('Gentelella./vendors/fastclick/lib/fastclick'); ?>
<!-- FastClick -->
<?php echo $this->Html->script('Gentelella./vendors/nprogress/nprogress'); ?>
<!-- jQuery 2.1.4 -->
<?php echo $this->Html->script('Gentelella./vendors/Chart.js/dist/Chart.min'); ?>
<!-- Bootstrap 3.3.5 -->
<?php echo $this->Html->script('Gentelella./vendors/bernii/gauge.js/dist/gauge.min'); ?>
<!-- SlimScroll -->
<?php echo $this->Html->script('Gentelella./vendors/bootstrap-progressbar/bootstrap-progressbar.min'); ?>
<!-- Switchery -->
<?php echo $this->Html->script('Gentelella./vendors/abpetkov/switchery/dist/switchery.min'); ?>
<!-- Cropperjs -->
<?php echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.4/cropper.min.js', ['block' => true]); ?>
<?php echo $this->Html->script('Gentelella./vendors/fengyuanchen/jquery-cropper/dist/jquery-cropper.min', ['block' => true]); ?>
<!-- FastClick -->
<?php echo $this->Html->script('Gentelella./vendors/iCheck/icheck.min'); ?>
<?php echo $this->Html->script('Gentelella./vendors/skycons/skycons'); ?>
<?php echo $this->Html->script('Gentelella./vendors/Flot/jquery.flot'); ?>
<?php echo $this->Html->script('Gentelella./vendors/Flot/jquery.flot.pie'); ?>
<?php echo $this->Html->script('Gentelella./vendors/Flot/jquery.flot.time'); ?>
<?php echo $this->Html->script('Gentelella./vendors/Flot/jquery.flot.stack'); ?>
<?php echo $this->Html->script('Gentelella./vendors/Flot/jquery.flot.resize'); ?>
<?php echo $this->Html->script('Gentelella./js/flot/jquery.flot.orderBars'); ?>
<?php echo $this->Html->script('Gentelella./js/flot/date'); ?>
<?php echo $this->Html->script('Gentelella./js/flot/jquery.flot.spline'); ?>
<?php echo $this->Html->script('Gentelella./js/maps/jquery-jvectormap-2.0.3.min'); ?>
<?php echo $this->Html->script('Gentelella./js/moment/moment.min'); ?>
<?php echo $this->Html->script('Gentelella./js/datepicker/daterangepicker'); ?>
<?php echo $this->Html->script('Gentelella./build/js/custom', ['block' => true]); ?>

<?php echo $this->fetch('script'); ?>
<?php echo $this->fetch('scriptBottom'); ?>

<!-- bootstrap-daterangepicker -->
<script>
    $(document).ready(function() {

        var cb = function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
            dateLimit: {
                days: 60
            },
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
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
            console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
            console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
            console.log("cancel event fired");
        });
        $('#options1').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
            $('#reportrange').data('daterangepicker').remove();
        });
    });
</script>
<!-- /bootstrap-daterangepicker -->

</body>
</html>
