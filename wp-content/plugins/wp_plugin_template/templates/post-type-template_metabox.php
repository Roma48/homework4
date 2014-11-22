<table> 
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Meta A</label>
        </th>
        <td>
            <input type="text" id="meta_a" name="meta_a" value="<?php echo @get_post_meta($post->ID, 'meta_a', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Meta B</label>
        </th>
        <td>
            <select id="meta_b" multiple name="meta_b" value="<?php echo @get_post_meta($post->ID, 'meta_b', true); ?>">
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </select>         </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Meta C</label>
        </th>
        <td>
            <input type="file" id="meta_c" name="meta_c" value="<?php echo @get_post_meta($post->ID, 'meta_c', true); ?>" />
        </td>
    </tr>                
</table>
