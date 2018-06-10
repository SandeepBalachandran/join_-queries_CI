Hello <?php echo $this->session->userdata('username');?>

<a href=<?php echo base_url('scaredController/logout');?>><button
    class='btn btn-danger' >Log out</button></a>

    <div class="col-lg-12 mainDiv">
        <div class="row">
            <div class="col-lg-4 projectDiv">
                <div class="row">
                    <?php echo form_open('scaredController/newproject');?>
                    <label>Project Name</label>
                    <br>
                    <?php
                    $p_name=array('name'=>'p_name',
                                'id'=>'p_name',
                                'placeholder'=>'Enter you Project name
                                to save',
                                'value'=>set_value('p_name')
                            );
                     echo form_input($p_name);?>
                        <br>
                        <div class="error">
                            <?php echo form_error('p_name');?>
                        </div>
                        <br>

                        <?php $p_submitBtn=array( 'name'=>'p_submitbtn',
                                                'class'=>'btn btn-success',
                                                'value'=>'Store'
                                            );
                     ?>
                        <?php echo form_submit($p_submitBtn);?>
                        <?php echo form_close();?>

                        <div class="error">
                            <?php echo $this->session->flashdata('projectAddMsg');?>
                        </div>

                </div>
            </div>


            <div class="col-lg-4 moduleDiv">
                <div class="row">
                    <?php echo form_open('scaredController/newmodule');?>
                    <label>Module Name</label>
                    <br>
                    <?php
                    $m_name=array('name'=>'m_name',
                                'id'=>'m_name',
                                'placeholder'=>'Enter you Module name
                                to save',
                                'value'=>set_value('m_name')
                            );
                     echo form_input($m_name);?>
                        <br>
                        <div class="error">
                            <?php echo form_error('m_name');?>
                        </div>
                        <br>

                        <?php
                        $p_Id=array('name'=>'p_Id',
                                    'id'=>'p_Id',
                                    'placeholder'=>'Enter you Project Id
                                    to save',
                                    'value'=>set_value('p_Id')
                                );
                         echo form_input($p_Id);?>
                            <br>
                            <div class="error">
                                <?php echo form_error('p_Id');?>
                            </div>

                        <?php $m_submitBtn=array( 'name'=>'m_submitbtn',
                                                'class'=>'btn btn-success',
                                                'value'=>'Store'
                                            );
                     ?>
                        <?php echo form_submit($m_submitBtn);?>
                        <?php echo form_close();?>
                        <div class="error">
                            <?php echo $this->session->flashdata('moduleAddMsg');?>
                        </div>

                </div>
            </div>


            <div class="col-lg-4 resourceDiv">
                <div class="row">
                    <?php echo form_open('scaredController/newresource');?>
                    <label>Resource Name</label>
                    <br>
                    <?php
                    $r_name=array('name'=>'r_name',
                                'id'=>'r_name',
                                'placeholder'=>'Enter you resource name
                                to save',
                                'value'=>set_value('r_name')
                            );
                     echo form_input($r_name);?>
                        <br>
                        <div class="error">
                            <?php echo form_error('r_name');?>
                        </div>
                        <br>
                        <label>Module Id</label>
                        <br>

                        <?php
                        $r_Id=array('name'=>'m_Id',
                                    'id'=>'m_Id',
                                    'placeholder'=>'Enter you Module Id
                                    to save',
                                    'value'=>set_value('m_Id')
                                );
                         echo form_input($r_Id);?>
                         <div class="error">
                             <?php echo form_error('m_Id');?>
                         </div>
                            <br>

                            <label>Project Id</label>
                            <br>

                            <?php
                            $project_Id=array('name'=>'project_Id',
                                        'id'=>'project_Id',
                                        'placeholder'=>'Enter you Project Id
                                        to save',
                                        'value'=>set_value('project_Id')
                                    );
                             echo form_input($project_Id);?>
                            <div class="error">
                                <?php echo form_error('project_Id');?>
                            </div>

                        <?php $r_submitBtn=array( 'name'=>'r_submitbtn',
                                                'class'=>'btn btn-success',
                                                'value'=>'Store'
                                            );
                     ?>
                        <?php echo form_submit($r_submitBtn);?>
                        <?php echo form_close();?>
                        <div class="error">
                            <?php echo $this->session->flashdata('resourceAddMsg');?>
                        </div>

                </div>
            </div>

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4 pTable">
                        <div class="row">

                            <table class="table-hover table-responsive" border="1">
                                <tr>
                                    <th>Id</th>
                                    <th>Project Name</th>
                                    <th>Created_at</th>
                                    <th>Actions</th>
                                </tr>
                                <?php
                                if($infos)
                                {
                                    foreach($infos as $info)
                                    {
                                        ?>
                                        <tr>
                                            <td><?php echo $info->id;?></td>
                                            <td><?php echo $info->name;?></td>
                                            <td><?php echo $info->reg_date;?></td>
                                            <td><button class="btn btn-warning">Edit</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>


                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4 mTable">
                        <div class="row">
                            <table class="table-hover table-responsive" border="1">
                                <th>Id</th>
                                <th>Module Name</th>
                                <th>Created_at</th>
                                <th>Actions</th>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4 rTable">
                        <div class="row">
                            <table class="table-hover table-responsive" border="1">
                                <th>Id</th>
                                <th>Resource Name</th>
                                <th>Created_at</th>
                                <th>Actions</th>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
