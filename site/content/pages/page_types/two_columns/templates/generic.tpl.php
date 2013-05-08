<body id = "<?php echo $section?>">
    <div id= "twoColumnsPage">
        <div id="header">
            <?php echo isset($modulesHtml["header"])? $modulesHtml["header"]: "" ?>
        </div>
        <div id="content">
            <div id = "leftColumn">
                <?php echo isset($modulesHtml["left_column"])? $modulesHtml["left_column"]: "" ?>
            </div>
            <div id = "rightColumn">
                <?php echo isset($modulesHtml["right_column"])? $modulesHtml["right_column"]: "" ?>
            </div>
        </div>
        <div id = "footer">
            <?php echo isset($modulesHtml["footer"])? $modulesHtml["footer"]: "" ?>
        </div>
    </div>
</body>