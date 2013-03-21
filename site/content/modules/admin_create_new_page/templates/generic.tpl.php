<div id="main">
    <div class="full_w">
        <div class="h_title">Add new page</div>
        <form action="" method="post">
            <div class="element">
                <label for="name">Page title <span class="red">(required)</span></label>
                <input id="name" name="name" class="text err" />
            </div>
            <div class="element">
                <label for="category">Category <span class="red">(required)</span></label>
                <select name="category" class="err">
                    <option value="0">-- select category</option>
                    <option value="1">Category 1</option>
                    <option value="2">Category 4</option>
                    <option value="3">Category 3</option>
                </select>
            </div>
            <div class="element">
                <label for="comments">Comments</label>
                <input type="radio" name="comments" value="on" checked="checked" /> Enabled
                <input type="radio" name="comments" value="off" /> Disabled
            </div>
            <div class="element">
                <label for="content">Page content <span>(required)</span></label>
                <textarea name="content" class="textarea" rows="10"></textarea>
            </div>
            <div class="entry">
                <button type="submit">Preview</button> <button type="submit" class="add">Save page</button> <button class="cancel">Cancel</button>
            </div>
        </form>
    </div>
</div>