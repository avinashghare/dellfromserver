<a class="btn btn-default pull-right"  href="<?php echo site_url('site/createpost'); ?>">Create Post</a>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
                Post Details 
            </header>
            
			<div class="drawchintantable">
                <?php $this->chintantable->createsearch("");?>
                <table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
                <thead>
                    <tr>
                        <th data-field="text" style="width:30%">text</th>
                        <th data-field="posttypename">Platform</th>
                        <th data-field="image">Image</th>
                        <th data-field="link">Link</th>
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
                
                return "<tr><td>" + resultrow.text + "</td><td>" + resultrow.posttypename + "</td><td><img src='<?php echo base_url('/uploads/');?>/" + resultrow.image + "' width=100px;></td><td>" + resultrow.link + "</td><td>" + resultrow.timestamp + "</td><td><a class='btn btn-round btn-xs' href='<?php echo site_url('site/editpost?id=');?>"+resultrow.id +"'><i class='icon-pencil'></i></a><a class='btn btn-round btn-xs' href='<?php echo site_url('site/deletepost?id='); ?>"+resultrow.id +"'><i class='icon-trash '></i></a></td><tr>";
            }
            generatejquery('<?php echo $base_url;?>');
        </script>
	</div>
</div>