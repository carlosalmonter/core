<body id = "<?php echo $section;?>">
    <div id= "twoColumnsPage">
        <div id="header">
            <?php echo ArrayHelper::getValueForIndexIfExists($this->content, "header");?>
        </div>
        <div id="content">
            <div id = "leftColumn">
                <?php echo ArrayHelper::getValueForIndexIfExists($this->content, "left_column");?>
            </div>
            <div id = "rightColumn">
                <?php echo ArrayHelper::getValueForIndexIfExists($this->content, "right_column");?>
            </div>
        </div>
        <div id = "footer">
            <?php echo ArrayHelper::getValueForIndexIfExists($this->content, "footer");?>
        </div>
    </div>
</body>