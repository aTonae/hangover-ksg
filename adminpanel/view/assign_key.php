<div class="content">



            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Assign PIN</h4>
                            </div>

                            <div class="content">
                                
                                <form action="assign_key" method="post">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>User Code</label>
                                                <input type="text" class="form-control" disabled value="<?=$data['values']['id']?>">
                                                <input type="hidden" name="code" value="<?=$data['values']['id']?>">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Name" value="<?=$data['values']['name']?>" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mobile</label>
                                                <input type="number" class="form-control" placeholder="Mobile" name="mobile" value="<?=$data['values']['mobile']?>">
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>PIN Count</label>
                                                <input type="number" class="form-control" placeholder="PIN Count" name="count" ">
                                                
                                            </div>
                                        </div>
                                        
                                    </div>

                                  

                                    

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Assign Key</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
