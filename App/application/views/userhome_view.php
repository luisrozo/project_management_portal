<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HomePage</title>
    <style>
        body {
            margin: 10px;
            padding-left: 20px;
        }
        
        .img {
            margin: 10px;
            padding-left: 20px;
        }
        
        .jumbotron {
            margin: 20px;
            padding-left: 20px;
        }
        
        p {
            margin: 10px;
            padding-left: 30px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark justify-content-between">
  <a class="navbar-brand" href="<?=base_url() . "userhome"?>">Home</a>
  <form class="form-inline">
    <a href="<?=base_url() . "user/profile"?>"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>&#8195
    <a href="<?=base_url() . "user/log_out"?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a>
  </form>
</nav>

<div class="jumbotron col-sm-3">
    <h1>Your Projects</h1>
</div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4">Project Name &#8195 Project Start Date &#8195 Project Finish Date</div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="list-group col-sm-4">
        <?php
foreach ($projects as $proyecto) {
    echo "<a href=\"" . base_url() . "userhome/project/$proyecto->Project_ID\" class=\"list-group-item\"> $proyecto->Project_Name &#8195 &#8195 &#8195 $proyecto->Project_StartDate &#8195 &#8195 &#8195 $proyecto->Project_FinishDate</a>";
}
?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</body>
</html>