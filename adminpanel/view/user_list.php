<div class="content">
    <?php // print_r($data); ?>
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <?php if(array_key_exists('status_detail', $data)) {?>
                                      <div class="alert alert-info">

                                    <span><?= $data['status_detail']['title']?></span>
                                 <!--   <span><?= $data['output']['status_detail']['description']?></span> -->
                                </div>
                                <?php } ?>

                                <h4 class="title">All Users</h4>
                                <p class="category">Total Count : <?=count($data['values']);?></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Mobile</th>
                                    	<th>Password</th>
                                    	<th>User Code</th>
                                        <th>Address</th>
                                        <th>Timestamp</th>
                                       <!-- <th>Status</th> -->
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $count =1;    
                                        foreach ($data['values']as $key => $value) { ?>
                                          <tr>
                                            <td><?=$count?></td>
                                            <td><?=$value['name']?></td>
                                            <td><?=$value['mobile']?></td>
                                            <td><?=$value['pass']?></td>
                                            <td><?=$value['id']?></td>
                                            <td><?=$value['address']?></td>
                                            <td><?=$value['created']?></td>
                                           <!-- <td><?=$value['status']?></td> -->
                                            <td class="td-actions text-right">
                                             <a href="user?action=view&code=<?= $value['code']?>">   <button type="button" rel="tooltip" title="View User" class="btn btn-success btn-simple btn-xs">
                                                        <i class="fa fa-eye"></i>
                                                    </button></a>
                                                 <a href="user?action=update&code=<?= $value['code']?>">   <button type="button" rel="tooltip" title="Edit User" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button></a>
                                                 <a href="user?action=delete&code=<?= $value['code']?>">    <button type="button" rel="tooltip" title="Remove User" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button></a>

                                                   
                                                    
                                            </td>

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