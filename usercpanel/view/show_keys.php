<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="alert alert-info">
                                    <span><?= $data['output']['status_detail']['title']?></span>
                                 <!--   <span><?= $data['output']['status_detail']['description']?></span> -->
                                </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">

                                <h4 class="title">New Unlock Keys</h4>
                                <p class="category">Total Count : <?=$data['input']['count'];?></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Key</th>
                                    	<th>Is Used</th>
                                    	<th>Timestamp</th>
                                    	<th>Status</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $count =1;    
                                        foreach ($data['output']['keys'] as $key => $value) { ?>
                                          <tr>
                                            <td><?=$count?></td>
                                            <td><?=$value?></td>
                                            <td>Not in use</td>
                                            <td>Now</td>
                                            <td>Active</td>
                                        </tr>  
                                       <?php $count++; } ?>

                                        
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                   


                </div>
            </div>
        </div>