<div class="content">
    <?php //print_r($data); ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">User</h4>
                            </div>

                            <div class="content">
                                
                                    <?php if(array_key_exists('status_detail', $data)) {?>
                                      <div class="alert alert-info">

                                    <span><?= $data['status_detail']['title']?></span>
                                 <!--   <span><?= $data['output']['status_detail']['description']?></span> -->
                                </div>
                                <?php } ?>
                                <form action="update_user" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>User Code</label>
                                                <input type="text" class="form-control" disabled value="<?= $data['input']['id']?>">
                                                <input type="hidden" name="id" value="<?= $data['input']['id']?>">
                                                <input type="hidden" name="code" value="<?= $data['input']['code']?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Name" value="<?= $data['input']['name']?>" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mobile</label>
                                                <input type="number" class="form-control" placeholder="Mobile" name="mobile" value="<?= $data['input']['mobile']?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>PIN</label>
                                                <input type="text" class="form-control" disabled placeholder="Select" value="<?= $data['input']['add_key']?>">
                                                <input type="hidden" name="add_key" value="<?= $data['input']['add_key']?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Pass</label>
                                                <input type="text" class="form-control" placeholder="Password" 
                                                value="<?php if(array_key_exists('pass', $data['input'])) {
                                                    echo $data['input']['pass'];
                                            }else{
                                             echo $data['input']['mobile'];
                                            }?>" name="pass">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address" value="<?= $data['input']['address']?>" name="address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="text" class="form-control" placeholder="Date of Birth DD/MM/YYYY" value="<?= $data['input']['dob']?>" name="dob">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Fathers Name</label>
                                                <input type="text" class="form-control" placeholder="Fathers Name" value="<?= $data['input']['father_name']?>" name="father_name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" placeholder="Email" value="<?= $data['input']['email']?>" name="email">
                                            </div>
                                        </div>
                                       
                                    </div>

                                     <div class="row">
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nominee Name</label>
                                                <input type="text" class="form-control" placeholder="Name of Nominee" value="<?= $data['input']['nominee']?>" name="nominee">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Relation</label>
                                                <input type="text" class="form-control" placeholder="Relation" value="<?= $data['input']['relation']?>" name="relation">
                                            </div>
                                        </div>
                                       
                                    </div>

                                    

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update User</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
