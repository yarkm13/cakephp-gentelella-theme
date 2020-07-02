<?php
$file = '';
if($this->plugin){
    $file = ROOT . DS . 'plugins'.DS.$this->plugin.DS.'src' . DS . 'Template' . DS . 'Users' . DS . 'login.ctp';
}
if(!file_exists($file)){
    $file = ROOT . DS . 'src' . DS . 'Template' . DS . 'Users' . DS . 'login.ctp';
}

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <?= $this->Form->create() ?>
                    <h1><?php echo isset($theme['title']) ? $theme['title'] : 'Спорт для всіх'; ?></h1>
                    <div>
                        <?= $this->Form->input('username',['class'=>'form-control','placeholder'=>'Email','label'=>false,'required'=>true]) ?>
                    </div>
                    <div>
                        <?= $this->Form->input('password',['class'=>'form-control','placeholder'=>'Senha de Acesso','label'=>false,'required'=>true]) ?>
                    </div>
                    <div>
                        <?= $this->Form->button(__d('gentelella','Login'),['class'=>'btn btn-primary btn-block btn-flat']); ?>

                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-futbol-o"></i> </h1>
                            <p>©</p>
                        </div>
                    </div>
                <?= $this->Form->end() ?>
            </section>
        </div>
    </div>
</div>
<?php } ?>
