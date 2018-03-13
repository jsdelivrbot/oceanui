<?php
  $data = array('name' => 'albin');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP - styleguide</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <div class="navbar-primary-horizontal">
      <ul class="navbar-horizontal-list" >
        <li class="navbar-primary-list-item" ><a class="text-link-horizontal-primary" href="#">Item 1</a></li>
        <li class="navbar-primary-list-item" ><a class="text-link-horizontal-primary" href="#">Item 1</a></li>
        <li class="navbar-primary-list-item" ><a class="text-link-horizontal-primary" href="#">Item 1</a></li>
      </ul>
    </div>

    <!-- <div class="navbar-default-horizontal">
      <ul class="navbar-horizontal-list" >
        <li class="navbar-primary-list-item" ><a class="text-link-horizontal-default" href="#">Item 1</a></li>
        <li class="navbar-primary-list-item" ><a class="text-link-horizontal-default" href="#">Item 1</a></li>
        <li class="navbar-primary-list-item" ><a class="text-link-horizontal-default" href="#">Item 1</a></li>
      </ul>
    </div> -->


    <!-- Page content -->
    <div class="page-wrapper" >
      <!-- Buttons &  -->

      <div class="row" >
        <div class="col-12">
          <button type="button" class='button-primary-large' name="button">Primary</button>
        </div>
        <div class="col-12">
          <button type="button" class='button-primary' name="button">Primary</button>
        </div>
      </div>
      <div class="row" >
        <div class="col-24">
            <button type="button" class='button-primary-small' name="button">Primary</button>
        </div>
      </div>
      <div class="row" >
        <div class="col-24">
            <div class="table" >
              <div class="table-header">
                <h4 class="primary-font-secondary-weight">My projects</h4>
              </div>
              <div class="table-seperator"></div>
              <div class="table-content">
                <h4 class="primary-font">Project</h4>
                <a class="text-link" href="#">Open project</a>
              </div>
              <div class="table-seperator">
              </div>
              <div class="table-content">
                <h4 class="primary-font">Project</h4>
                <a class="text-link" href="#">Open project</a>
              </div>
              <div class="table-seperator">
              </div>
              <div class="table-content">
                <h4 class="primary-font">Project</h4>
                <a class="text-link" href="#">Open project</a>
              </div>
            </div>
          </div>
        </div>

    <!-- Button default -->
    <div class="row">
      <div class="col-24">
        <button type="button" class='button-default-large' name="button">Default</button>

        <br />
        <br />

        <button type="button" class='button-default' name="button">Default</button>

        <br />
        <br />

        <button type="button" class='button-default-small' name="button">Default</button>
      </div>
    </div>

  </body>
</html>
