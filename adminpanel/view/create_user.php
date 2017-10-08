<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add New User</h4>
                            </div>

                            <div class="content">
                                
                                <form action="create_user" method="post">
                                <input type="hidden" name="identifier" value="0">

                                    <div class="row">
                                       <!-- <div class="col-md-4">
                                            <div class="form-group">
                                                <label>User Code</label>
                                                <input type="text" class="form-control" disabled value="<?=$data['code']?>">
                                                <input type="hidden" name="code" value="<?=$data['code']?>">
                                            </div>
                                        </div> -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Name" value="" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Fathers Name</label>
                                                <input type="text" class="form-control" placeholder="Fathers Name"  name="father_name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mobile</label>
                                                <input type="number" class="form-control" placeholder="Mobile" name="mobile">
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="row">
                                        
                                     <!--   <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Pass</label>
                                                <input type="text" class="form-control" placeholder="Password" value="123456" name="pass">
                                            </div>
                                        </div> -->
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Key</label>
                                                
                                                <select class="form-control" name="add_key" required="true">
                                                 <option>Select Key</option>
                                                <?php 
                                                foreach ($data['keys']['values'] as $key => $value) { ?>
                                                <option value="<?= $value['key'] ?>"><?= $value['key'] ?></option>
                                                    
                                               <?php } ?>
                            
                          </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address" value="" name="address">
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="row">

                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="text" class="form-control" placeholder="Date of Birth DD/MM/YYYY"  name="dob">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" placeholder="Email" value="" name="email">
                                            </div>
                                        </div>
                                       
                                    </div>

                                     <div class="row">
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nominee Name</label>
                                                <input type="text" class="form-control" placeholder="Name of Nominee"  name="nominee">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Relation</label>
                                                <input type="text" class="form-control" placeholder="Relation"  name="relation">
                                            </div>
                                        </div>
                                       
                                    </div>

                                    

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Create User</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
