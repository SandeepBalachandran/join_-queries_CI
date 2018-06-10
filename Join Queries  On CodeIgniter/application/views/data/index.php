<div class="col-lg-12 mainBody">
    <div class="row">
        <div class="col-lg-6 signUp">
            <div class="row">
                <?php echo form_open('scaredController/saveData');?>
                <label>Name</label><br>
                <?php
                $name=array('name'=>'name',
                            'id'=>'name',
                            'placeholder'=>'Enter you name
                            to save',
                            'value'=>set_value('name')
                        );
                 echo form_input($name);?>
                    <br>
                    <div class="error">
                        <?php echo form_error('name');?>
                    </div>

                    <br>

                    <label>Password</label><br>
                    <?php
                    $password=array('name'=>'password',
                                'id'=>'password',
                                'placeholder'=>'Enter you password
                                to save',
                                'value'=>set_value('password')
                            );
                     echo form_input($password);?>
                        <br>
                        <div class="error">
                            <?php echo form_error('password');?>
                        </div>

                        <br>
                        <?php $submitBtn=array( 'name'=>'submitbtn',
                                                'class'=>'btn btn-success',
                                                'value'=>'Register'
                                            );
                     ?>
                        <?php echo form_submit($submitBtn);?>
                        <?php echo form_close();?>

                        <?php echo $this->session->flashdata('signupmsg');?>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <?php echo form_open('scaredController/checkData');?>
                    <label>Name</label><br>
                    <?php
                    $name=array('name'=>'uname',
                                'id'=>'uname',
                                'placeholder'=>'Enter you name
                                to save',
                                'value'=>set_value('uname')
                            );
                     echo form_input($name);?>
                        <br>
                        <div class="error">
                            <?php echo form_error('uname');?>
                        </div>

                        <br>

                        <label>Password</label><br>
                        <?php
                        $password=array('name'=>'upassword',
                                    'id'=>'upassword',
                                    'placeholder'=>'Enter you password
                                    to save',
                                    'value'=>set_value('upassword')
                                );
                         echo form_input($password);?>
                            <br>
                            <div class="error">
                                <?php echo form_error('upassword');?>
                            </div>

                            <br>
                            <?php $submitBtn=array( 'name'=>'submitbtn',
                                                    'class'=>'btn btn-success',
                                                    'value'=>'Login'
                                                );
                         ?>
                            <?php echo form_submit($submitBtn);?>
                            <?php echo form_close();?>
                            <div class="error">
                                <?php echo $this->session->flashdata('signinmsg');?>
                            </div>
                            
