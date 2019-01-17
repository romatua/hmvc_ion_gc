<!-- page content -->
<div class="main-content">
        <div class="main-content-inner">
          <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
              <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
              </li>

              <li>
                <a href="#">Other Pages</a>
              </li>
              <li class="active">Blank Page</li>
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
              <form class="form-search">
                <span class="input-icon">
                  <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                  <i class="ace-icon fa fa-search nav-search-icon"></i>
                </span>
              </form>
            </div><!-- /.nav-search -->
          </div>

          <div class="page-content">
            <div class="row">
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
        					<?php 
        					foreach($css_files as $file): ?>
        						<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        					<?php endforeach; ?>

        						<div style="padding: 5px">
        							<?php echo $output; ?>
        						</div>

        					<?php foreach($js_files as $file): ?>
        						<script src="<?php echo $file; ?>"></script>
        					<?php endforeach; ?>
          
                <!-- PAGE CONTENT ENDS -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.page-content -->
        </div>
      </div><!-- /.main-content -->
<!-- /page content -->