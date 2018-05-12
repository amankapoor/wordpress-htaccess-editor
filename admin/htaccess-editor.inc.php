<?php
namespace O10n;

/**
 * .htaccess editor admin template
 *
 * @package    optimization
 * @subpackage optimization/admin
 * @author     Optimization.Team <info@optimization.team>
 */
if (!defined('ABSPATH') || !defined('O10N_ADMIN')) {
    exit;
}

// print form header
$this->form_start(__('.htaccess Editor', 'o10n'), 'htaccess');

$htaccess = $view->get_htaccess();
$htaccess_location = $view->get_htaccess_location();

?>

<table class="form-table">
    <tr valign="top">
        <td colspan="2">
        <textarea class="json-array-lines" id="htaccess_editor" name="o10n[htaccess.content]"><?php print esc_html($htaccess); ?></textarea>
        </td>
    </tr>

    <tr valign="top">
        <th scope="row">File Location</th>
        <td>
            <input type="text" style="width:100%;" name="o10n[htaccess.location]" value="<?php print esc_attr($htaccess_location); ?>" placeholder="<?php print trailingslashit(ABSPATH) . '.htaccess'; ?>" />
            <p class="description">Optionally enter an alternative .htaccess file location. The default is <code><?php print trailingslashit(ABSPATH) . '.htaccess'; ?></code>.</p>
            <p class="info_white"><strong>Note:</strong> If you change the file location, the .htaccess text will not be saved.</p>
        </td>
    </tr>
    </table>
<hr />
<?php
    submit_button(__('Save'), 'primary large', 'is_submit', false);

// print form header
$this->form_end();
