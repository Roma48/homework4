<table> 
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Text</label>
        </th>
        <td>
            <input type="text" id="meta_a" name="meta_a" value="<?php echo @get_post_meta($post->ID, 'meta_a', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Multiselect</label>
        </th>
        <td>
            <select id="multiselect" multiple name="multiselect" value="<?php echo @get_post_meta($post->ID, 'meta_b', true); ?>">
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </select>         </td>
    </tr>

</table>
