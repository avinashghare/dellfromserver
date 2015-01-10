<!--
<div class=" row" style="padding:1% 0;">
	<div class="col-md-12">
	
		<a class="btn btn-primary pull-right"  href="<?php echo site_url('site/createsuggestion'); ?>"><i class="icon-plus"></i>Create </a>	</div>
	
</div>
-->
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
                Suggested Posts
            </header>
			<div class="drawchintantable">
                <table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
                <thead>
                    <tr>
                        <th data-field="text">text</th>
                        <th data-field="image">image</th>
                        <th data-field="suggestionstatus">Status</th>
                        <th data-field="adminmessage">Admin Message</th>
                        <th data-field="timestamp">Timestamp</th>
                        <th data-field="action"> Actions </th>


                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
                </table>
                   <?php $this->chintantable->createpagination();?>
            </div>
		</section>
		<script>
            function drawtable(resultrow) {
                if(!resultrow.adminstatus)
                {
                    resultrow.adminstatus="";
                }
                return "<tr><td>" + resultrow.text + "</td><td><img src='<?php echo base_url('uploads');?>/" + resultrow.image + "' width='100px' height='auto'></td><td>" + resultrow.suggestionstatus + "</td><td>" + resultrow.adminmessage + "</td><td>" + resultrow.timestamp + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editsuggestion?id=');?>"+resultrow.id +"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deletesuggestion?id='); ?>"+resultrow.id +"'><i class='icon-trash '></i></td></tr>";
            }
            generatejquery('<?php echo $base_url;?>');
        </script>
	</div>
</div>
