<div class=" row" style="padding:1% 0;">
	<div class="col-md-12">
	
		<a class="btn btn-primary pull-right"  href="<?php echo site_url('site/createsuggestion'); ?>">Suggest Content</a> 
	</div>
	
</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
                Suggested Posts
            </header>
			<div class="drawchintantable">
                <?php $this->chintantable->createsearch("");?>
                <table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
                <thead>
                    <tr>
                        <th data-field="id">Id</th>
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
                var status="";
                
                if(resultrow.suggestionstatus=="Publish")
                {
                    status="Approved";
                }
                else if(resultrow.suggestionstatus=="Unublish")
                {
                    status="UnApproved";
                }
                else
                {
                    status="Pending";
                }
                if(resultrow.image=="")
                {
                    resultrow.image="NA";
                }
                else
                {
                     resultrow.image="<img src='<?php echo base_url('uploads');?>/" + resultrow.image + "' width='100px' height='auto'>";
                }
                if(resultrow.suggestionstatus=="Publish")
                {
                return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.text + "</td><td>"+resultrow.image+"</td><td>"+status+"</td><td>" + resultrow.adminmessage + "</td><td>" + resultrow.timestamp + "</td><td><a href='#' class='btn btn-primary'  onclick=\"postsocial('"+resultrow.id+"','"+resultrow.text+"','" + base_url + "uploads/" + resultrow.image + "','facebook','')\">Publish</a></td><tr>";
                }
                else
                {
                return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.text + "</td><td>"+resultrow.image+"</td><td>"+status+"</td><td>" + resultrow.adminmessage + "</td><td>" + resultrow.timestamp + "</td><td></td><tr>";
                }
            }
            generatejquery('<?php echo $base_url;?>');
        </script>
	</div>
</div>
