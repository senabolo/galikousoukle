<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <base href="<?php echo base_url(); ?>" />
        <title><?php echo $this->config->item('company'); ?></title>
        <link href="<?php echo bootstrapcss_url('bootstrap'); ?>" rel="stylesheet" />
        <link href="<?php echo bootstrapcss_url('bootstrap-responsive'); ?>" rel="stylesheet" />
        <link rel="stylesheet" rev="stylesheet" href="<?php echo base_url(); ?>css/ospos.css" />

        <!-- Le styles -->

        <style type="text/css">
            html {
                overflow: auto;
            }

            body {
                padding-top: 60px;
                padding-bottom: 40px;
                /*background-color: blue;*/
                /*color: blue;*/
                background-color: white;
            }

            .sidebar-nav {
                padding: 9px 0;
                /*color: blue;*/
            }

            @media (max-width: 980px) {
                /* Enable use of floated navbar text */
                .navbar-text.pull-right {
                    float: none;
                    padding-left: 5px;
                    padding-right: 5px;
                    /*color: blue;*/
                }

                .cv {
                    /*background-color: blue;*/
                    color: blue;
                }
            }
        </style>

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() . 'assets/bootstrap-2.3.2/docs/assets/ico/apple-touch-icon-144-precomposed.png'; ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() . "assets/bootstrap-2.3.2/docs/assets/ico/apple-touch-icon-114-precomposed.png"; ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() . "assets/bootstrap-2.3.2/docs/assets/ico/apple-touch-icon-72-precomposed.png"; ?>" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() . "assets/bootstrap-2.3.2/docs/assets/ico/apple-touch-icon-57-precomposed.png"; ?>" />
        <link rel="shortcut icon" href="<?php echo base_url() . "assets/bootstrap-2.3.2/docs/assets/ico/favicon.png"; ?>" />



        <script>BASE_URL = '<?php echo site_url(); ?>';</script>
        <script src="<?php echo base_url(); ?>js/jquery-1.2.6.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.color.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.metadata.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.form.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.tablesorter.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.ajax_queue.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.bgiframe.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.autocomplete.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.validate.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/jquery.jkey-1.1.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/thickbox.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/common.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/manage_tables.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/swfobject.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/date.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url(); ?>js/datepicker.js" type="text/javascript" language="javascript" charset="UTF-8"></script>

    </head>
    <body>
        <div id="top-navbar" class="navbar navbar-inverse navbar-fixed-top brand">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="brand" href="<?php echo site_url("home"); ?>">Electo-Sondage</a>
                    <div class="nav-collapse collapse">



                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="background-color: white">    

