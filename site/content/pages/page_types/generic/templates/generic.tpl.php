<body>
    <div id = "<?php echo $section;?>">

        <div id= "genericPage">
            <div id="header">
                <?php echo ArrayHelper::getValueForIndexIfExists($this->content, "header");?>
            </div>
            <div id="content">
                <?php echo ArrayHelper::getValueForIndexIfExists($this->content, "content");?>
            </div>
            <div id = "footer">
                <?php echo ArrayHelper::getValueForIndexIfExists($this->content, "footer");?>
            </div>
        </div>
    </div>
</body>