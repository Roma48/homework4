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
            <label for="meta_b">Multiselect</label>
        </th>
        <td>

            <select multiple="multiple" id="meta_b" name="meta_b[]" >
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </select>
             </td>
    </tr>

</table>
