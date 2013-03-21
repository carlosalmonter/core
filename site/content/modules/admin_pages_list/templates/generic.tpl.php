<div id="main">
    <div class="full_w">
        <div class="h_title">Manage pages - table</div>
        <h2>Lorem ipsum dolor sit ame</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumyeirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvolupt</p>
        <div class="entry">
            <div class="sep"></div>
        </div>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Author</th>
                    <th scope="col">Section</th>
                    <th scope="col">Page Type</th>
                    <th scope="col" style="width: 65px;">Modify</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($this->moduleData as $data):?>
                <tr>
                    <td class="align-center"><?php echo $data->id?></td>
                    <td><?php echo $data->name?></td>
                    <td>Carlos</td>
                    <td><?php echo $data->sectionType?></td>
                    <td><?php echo $data->pageType?></td>
                    <td>
                        <a href="#" class="table-icon edit" title="Edit"></a>
                        <a href="#" class="table-icon archive" title="Archive"></a>
                        <a href="#" class="table-icon delete" title="Delete"></a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        <div class="entry">
            <div class="pagination">
                <span>« First</span>
                <span class="active">1</span>
                <a href="">2</a>
                <a href="">3</a>
                <a href="">4</a>
                <span>...</span>
                <a href="">23</a>
                <a href="">24</a>
                <a href="">Last »</a>
            </div>
            <div class="sep"></div>
            <a class="button add" href="">Add new page</a> <a class="button" href="">Categories</a>
        </div>
    </div>
</div>