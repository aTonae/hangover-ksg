<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Create New Keys</h4>
                            </div>

                            <div class="content">
                                
                                <form action="create_key" method="post">
                                    <div class="row">
                                     
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Key Count</label>
                                                <input type="number" class="form-control" placeholder="Key Count" value="" name="count">
                                            </div>
                                        </div>
                                       </div>

                                    

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Create Keys</button>

                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>


             <div class="content">


            <div class="container-fluid">
                <div class="row">
                   
                    <div class="col-md-12">
                         
                        <div class="card">
                            <div class="header">

                                <h4 class="title">Your Keys</h4>
                                <p class="category">Total Count : <?php echo count($data['data']['values']);?></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Key</th>
                                        <th>is active</th>
                                        <th>status</th>
                                        <th>Timestamp</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $count =1;    
                                        foreach ($data['data']['values'] as $key => $value) { ?>
                                          <tr>
                                            <td><?=$count?></td>
                                            <td><?=$value['key']?></td>
                                            <td><?=$value['is_active']?></td>
                                            <td><?=$value['status']?></td>
                                            <td><?=$value['created']?></td>
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
        </div>
      