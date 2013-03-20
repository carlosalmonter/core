<div id="sidebar">
    <div id="<?php echo $this->moduleType;?>" class="box">
    <?php foreach($this->moduleData as $index=>$moduleData):?>
        <div class="h_title">&#8250; <?php echo $moduleData->menuTitle; ?></div>
        <ul id="<?php echo $index==0? "home": "";?>">
            <?php foreach($moduleData->menuItems as $key=>$item):?>
                <li class="b<?php echo $key%2 ==0? "1":"2"?>">
                    <a class="icon <?php echo $item->icon;?>" href="#"><?php echo $item->label?></a>
                </li>
            <?php endforeach;?>
        </ul>
    <?php endforeach;?>
    </div>
</div>

