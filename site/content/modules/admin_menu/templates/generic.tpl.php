<div class="adminMenu">
    <?php foreach($this->moduleData->menuItems as $items):?>
        <div class="menuItem">
            <p>
                <?php echo $items->label?>
            </p>
        </div>
    <?php endforeach;?>
</div>
