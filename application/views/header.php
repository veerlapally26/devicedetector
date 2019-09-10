<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!-- Latest compiled and minified Jquery library -->
        <script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
	<style type="text/css">
    .Table
    {
        display: table;        
        width: 100%;
        text-align: center;
    }
    .Title
    {
        display: table-caption;
        text-align: center;
        font-weight: bold;
        font-size: larger;
    }
    .Heading
    {
        display: table-row;
        font-weight: bold;
        text-align: center;
    }
    .Row
    {
        display: table-row;
    }
    .Cell
    {
        display: table-cell;
        border: solid;
        border-width: thin;
        padding-left: 5px;
        padding-right: 5px;
    }
</style>
<body>	
    <div class="container">
        <div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="<?php echo base_url() ?>">Plista GmBH Coding Challenge</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="<?php echo base_url() ?>">Home</a>
						</li>
						<li>
							<a href="<?php echo base_url() ?>home/restfulapis">Restful API List</a>
						</li>
						<li>
							<a href="<?php echo base_url() ?>home/mysqlqueries">MySql Queries</a>
						</li>						
					</ul>					
				</div>				
			</nav>
		</div>
	</div>
        
    </div>	