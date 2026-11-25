<?php

/**

 * Recommended way to include parent theme styles.

 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)

 *

 */



//add_action( 'wp_enqueue_scripts', 'landing_style' );

function landing_style()
{

	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}


/**

 * Your code goes below.

 */


function remove_default_jquery()
{
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_deregister_script('jquery-core');
		wp_deregister_script('jquery-migrate');
	}
}
// add_action('wp_enqueue_scripts', 'remove_default_jquery', 100);

function custom_jquery_cdn()
{
	if (!is_admin()) {
		wp_deregister_script('jquery');

		wp_register_script(
			'jquery',
			'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js',
			[],
			'3.7.1',
			true
		);

		wp_enqueue_script('jquery');
	}
}
add_action('wp_enqueue_scripts', 'custom_jquery_cdn');


function remove_jquery_migrate($scripts)
{
	if (!is_admin() && isset($scripts->registered['jquery'])) {
		$script = $scripts->registered['jquery'];

		if ($script->deps) {
			$script->deps = array_diff($script->deps, ['jquery-migrate']);
		}
	}
}
// add_action('wp_default_scripts', 'remove_jquery_migrate');


function remove_theme_styles()
{
	wp_dequeue_style('twentyseventeen-block-style');
}
// add_action('wp_enqueue_scripts', 'remove_theme_styles', 100);


function remove_theme_fonts()
{
	wp_dequeue_style('twentyseventeen-fonts');
}
// add_action('wp_enqueue_scripts', 'remove_theme_fonts', 100);


// add_filter('wpforms_frontend_recaptcha_disable', '__return_true');

function custom_scripts()
{

	// wp_enqueue_script('jquery');

	// wp_enqueue_script(
	// 	'jquery-ui',
	// 	'https://code.jquery.com/ui/1.13.2/jquery-ui.min.js',
	// 	['jquery'],
	// 	null,
	// 	true
	// );

	wp_enqueue_script('jquery-ui-accordion');

	// wp_enqueue_style(
	// 	'select2-css',
	// 	'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css'
	// );

	// wp_enqueue_script(
	// 	'select2',
	// 	'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js',
	// 	['jquery'],
	// 	null,
	// 	true
	// );

	// wp_enqueue_script(
	// 	'custom-js',
	// 	get_stylesheet_directory_uri() . '/js/app.min.js',
	// 	['jquery', 'jquery-ui-accordion'],
	// 	null,
	// 	true
	// );
}
add_action('wp_enqueue_scripts', 'custom_scripts');


// Add 'form-control' class to all input fields in WPForms
add_filter('wpforms_field_properties', function ($properties, $field, $form_data) {

	// Check if the input type is one of the common input types
	if (in_array($field['type'], ['text', 'email', 'phone', 'textarea', 'number', 'url', 'password'])) {

		// Add 'form-control' class to the primary input
		$properties['inputs']['primary']['class'][] = 'form-control';
	}

	// Check for select fields
	if ($field['type'] === 'select') {
		$properties['inputs']['primary']['class'][] = 'form-control';
	}

	// Check for radio fields
	if ($field['type'] === 'radio') {
		foreach ($properties['inputs']['primary'] as $key => $input) {
			$properties['inputs']['primary'][$key]['class'][] = 'form-control';
		}
	}

	// Check for checkbox fields
	if ($field['type'] === 'checkbox') {
		foreach ($properties['inputs']['primary'] as $key => $input) {
			$properties['inputs']['primary'][$key]['class'][] = 'form-control';
		}
	}

	return $properties;
}, 10, 3);



function wpf_dev_char_min_old()
{
?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {

			/* ------------------------------
			 Global min / max
			------------------------------ */
			$('.wpf-char-min input').prop('minLength', 2).prop('maxLength', 50);
			$('.wpf-char-min textarea').prop('minLength', 2).prop('maxLength', 500);

			/* ------------------------------
			 Validator messages
			------------------------------ */
			$.extend($.validator.messages, {
				minlength: $.validator.format("Please enter at least {0} characters"),
				maxlength: $.validator.format("Please enter no more than {0} characters")
			});

			/* ------------------------------
			 Custom validation rules
			------------------------------ */
			$.validator.addMethod("validName", function(value) {
				let v = $.trim(value);
				return v.length >= 2 && /^[\u0900-\u097F\u00C0-\u024F\s'.\-a-zA-Z]+$/.test(v);
			}, "Only letters and spaces are allowed.");

			$.validator.addMethod("validSubject", function(value) {
				let v = $.trim(value);
				return v.length >= 2 &&
					/^[\u0900-\u097F\u00C0-\u024Fa-zA-Z0-9\s',.\-]+$/.test(v) &&
					/[\u0900-\u097F\u00C0-\u024Fa-zA-Z]/.test(v);
			}, "Only letters, numbers, spaces, and punctuation allowed.");

			$.validator.addMethod("validTextArea", function(value) {
				let v = $.trim(value);
				if (v.length === 0) return true;

				return /^[a-zA-Z0-9\s.,!?'"()\-\:;@#&%$*]+$/.test(v) &&
					!/literal|select|insert|update|delete|drop|union|--|\/\*|\*\/|exec|xp_/i.test(v);
			}, "Invalid characters detected.");

			$.validator.addMethod("noScriptTags", function(value, element) {
				return this.optional(element) || !/<[a-z][\s\S]*>/i.test(value);
			}, "Tags are not allowed.");

			$.validator.addMethod("strictEmail", function(value) {
				let v = $.trim(value);
				return !/\s/.test(v) &&
					/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{1,}$/.test(v);
			}, "Please enter a valid email address.");

			$.validator.addMethod("trimPhone", function(value) {
				let v = $.trim(value);
				let digits = v.replace(/\D/g, '');
				return /^[+]?[\d\s().-]{7,20}$/.test(v) &&
					digits.length >= 7 &&
					digits.length <= 15 &&
					!/^(\d)\1+$/.test(digits);
			}, "Please enter a valid phone number.");

			/* ------------------------------
			 AUTO APPLY RULES (NO IDs)
			------------------------------ */
			$('.wpforms-form').each(function() {
				const $form = $(this);

				// Name fields
				$form.find('.wpforms-field-name input').rules('add', {
					validName: true,
					noScriptTags: true,
					minlength: 2,
					maxlength: 50
				});

				// Email fields
				$form.find('.wpforms-field-email input').rules('add', {
					strictEmail: true,
					maxlength: 256
				});

				// Phone fields
				$form.find('.wpforms-field-phone input').rules('add', {
					trimPhone: true,
					noScriptTags: true
				});

				// Text inputs (subject / grade / etc.)
				$form.find('.wpforms-field-text input').rules('add', {
					validSubject: true,
					noScriptTags: true,
					minlength: 2,
					maxlength: 50
				});

				// Textareas
				$form.find('.wpforms-field-textarea textarea').rules('add', {
					validTextArea: true,
					noScriptTags: true,
					maxlength: 500
				});
			});

			/* ------------------------------
			 Trim on blur
			------------------------------ */
			$(document).on('blur', '.wpf-char-min input, .wpf-char-min textarea', function() {
				let val = $.trim($(this).val()).replace(/\s{2,}/g, ' ');
				$(this).val(val);
			});

			/* ------------------------------
			 Trim before submit
			------------------------------ */
			$(document).on('submit', '.wpforms-form', function() {
				$(this).find('.wpf-char-min input, .wpf-char-min textarea').each(function() {
					$(this).val($.trim($(this).val()).replace(/\s{2,}/g, ' '));
				});
			});

		});
	</script>
<?php
}
// add_action('wpforms_wp_footer_end', 'wpf_dev_char_min_old', 10);




function wpf_dev_char_min()
{
?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {

			/* ------------------------------
			 Global min / max
			------------------------------ */
			$('.wpf-char-min input').prop('minLength', 2).prop('maxLength', 50);
			$('.wpf-char-min textarea').prop('minLength', 2).prop('maxLength', 500);

			/* ------------------------------
			 Validator messages
			------------------------------ */
			$.extend($.validator.messages, {
				required: "This field is required.",
				minlength: $.validator.format("Please enter at least {0} characters"),
				maxlength: $.validator.format("Please enter no more than {0} characters")
			});

			/* ------------------------------
			 Custom validation rules
			------------------------------ */

			$.validator.addMethod("validName", function(value) {
				let v = $.trim(value);

				if (v.length === 0) return true;

				return v.length >= 2 &&
					/^[\u0900-\u097F\u00C0-\u024F\s'.\-a-zA-Z]+$/.test(v);

			}, "Only letters and spaces are allowed.");

			$.validator.addMethod("validSubject", function(value) {
				let v = $.trim(value);

				if (v.length === 0) return true;

				return v.length >= 2 &&
					/^[\u0900-\u097F\u00C0-\u024Fa-zA-Z0-9\s',.\-]+$/.test(v) &&
					/[\u0900-\u097F\u00C0-\u024Fa-zA-Z]/.test(v);

			}, "Only letters, numbers, spaces, and punctuation allowed.");

			$.validator.addMethod("validTextArea", function(value) {
				let v = $.trim(value);

				if (v.length === 0) return true;

				return /^[a-zA-Z0-9\s.,!?'"()\-\:;@#&%$*]+$/.test(v) &&
					!/literal|select|insert|update|delete|drop|union|--|\/\*|\*\/|exec|xp_/i.test(v);

			}, "Invalid characters detected.");

			$.validator.addMethod("noScriptTags", function(value, element) {
				return this.optional(element) || !/<[a-z][\s\S]*>/i.test(value);
			}, "Tags are not allowed.");

			$.validator.addMethod("strictEmail", function(value) {
				let v = $.trim(value);

				if (v.length === 0) return true;

				return !/\s/.test(v) &&
					/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{1,}$/.test(v);

			}, "Please enter a valid email address.");

			$.validator.addMethod("trimPhone", function(value) {
				let v = $.trim(value);
				let digits = v.replace(/\D/g, '');

				return /^[+]?[\d\s().-]{7,20}$/.test(v) &&
					digits.length >= 7 &&
					digits.length <= 15 &&
					!/^(\d)\1+$/.test(digits);

			}, "Please enter a valid phone number.");

			/* ------------------------------
			 AUTO APPLY RULES (NO IDs)
			------------------------------ */

			$('.wpforms-form').each(function() {

				const $form = $(this);

				// Name fields
				$form.find('.wpforms-field-name input').rules('add', {
					validName: true,
					noScriptTags: true,
					minlength: 2,
					maxlength: 50
				});

				// Email fields
				$form.find('.wpforms-field-email input').rules('add', {
					strictEmail: true,
					maxlength: 256
				});

				// Phone fields (Required)
				$form.find('.wpforms-field-phone input').rules('add', {
					required: true,
					trimPhone: true,
					noScriptTags: true
				});

				// Text inputs
				$form.find('.wpforms-field-text input').rules('add', {
					validSubject: true,
					noScriptTags: true,
					minlength: 2,
					maxlength: 50
				});

				// Textareas
				$form.find('.wpforms-field-textarea textarea').rules('add', {
					validTextArea: true,
					noScriptTags: true,
					maxlength: 500
				});

			});

			/* ------------------------------
			 Trim on blur
			------------------------------ */

			$(document).on('blur', '.wpf-char-min input, .wpf-char-min textarea', function() {

				let val = $.trim($(this).val()).replace(/\s{2,}/g, ' ');
				$(this).val(val);

			});

			/* ------------------------------
			 Trim before submit
			------------------------------ */

			$(document).on('submit', '.wpforms-form', function() {

				$(this).find('.wpf-char-min input, .wpf-char-min textarea').each(function() {

					$(this).val($.trim($(this).val()).replace(/\s{2,}/g, ' '));

				});

			});

		});
	</script>
<?php
}

add_action('wpforms_wp_footer_end', 'wpf_dev_char_min', 10);






// Open row
// add_action('wpforms_display_fields_before', function () {
// 	echo '<div class="row">';
// });

// // Close row
// add_action('wpforms_display_fields_after', function () {
// 	echo '</div>';
// });

// // Add col-12 (main)
// add_filter('wpforms_field_properties', function ($properties) {
// 	$properties['container']['class'][] = 'col-12';
// 	return $properties;
// }, 10, 3);


// add_filter('wpforms_frontend_submit', function ($button, $form_data) {

// 	$form_id = $form_data['id'];
// 	$img = get_stylesheet_directory_uri() . '/images/white-btn.svg';

// 	$button = '
//     <div class="btnWrap">
//         <button type="submit"
//             name="wpforms[submit]"
//             id="wpforms-submit-' . esc_attr($form_id) . '"
//             class="wpforms-submit viewMore"
//             data-alt-text="Submitting..."
//             data-submit-text="Submit Now"
//             aria-live="assertive"
//             value="wpforms-submit">

//             <span class="icon">
//                 <img src="' . esc_url($img) . '" width="55" height="55" alt="Submit">
//             </span>

//             <span class="txt">
//                 Submit Now
//             </span>

//         </button>
//     </div>';

// 	return $button;
// }, 10, 2);



/**
 * Create Partial Leads Table
 */
function create_partial_leads_table()
{

	global $wpdb;

	$table_name = $wpdb->prefix . 'partial_leads';

	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NULL,
        phone VARCHAR(20) NOT NULL,
        page_url TEXT NULL,
        created_at DATETIME NOT NULL,
        PRIMARY KEY (id),
        KEY phone (phone)
    ) $charset_collate;";

	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);
}


/**
 * AJAX Save Partial Lead
 */
add_action('wp_ajax_save_partial_lead', 'save_partial_lead');
add_action('wp_ajax_nopriv_save_partial_lead', 'save_partial_lead');

function save_partial_lead()
{

	global $wpdb;

	$table_name = $wpdb->prefix . 'partial_leads';

	// Check if table exists
	$table_exists = $wpdb->get_var(
		$wpdb->prepare(
			"SHOW TABLES LIKE %s",
			$table_name
		)
	);

	// Create table if missing
	if ($table_exists !== $table_name) {
		create_partial_leads_table();
	}


	$name     = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
	$phone    = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
	$page_url = isset($_POST['page_url']) ? esc_url_raw($_POST['page_url']) : '';

	if (empty($phone)) {
		wp_send_json_error('Phone required');
	}

	$table_name = $wpdb->prefix . 'partial_leads';

	$existing = $wpdb->get_row(
		$wpdb->prepare(
			"SELECT * FROM {$table_name} WHERE phone = %s LIMIT 1",
			$phone
		)
	);

	if ($existing) {

		if (!empty($name) && empty($existing->name)) {

			$wpdb->update(
				$table_name,
				[
					'name' => $name
				],
				[
					'id' => $existing->id
				],
				['%s'],
				['%d']
			);
		}
	} else {

		$wpdb->insert(
			$table_name,
			[
				'name'       => $name,
				'phone'      => $phone,
				'page_url'   => $page_url,
				'created_at' => current_time('mysql')
			],
			['%s', '%s', '%s', '%s']
		);
	}

	wp_send_json_success();
}


function partial_leads_scripts()
{

	wp_enqueue_script('jquery');

	wp_register_script(
		'partial-leads',
		false,
		array('jquery'),
		null,
		true
	);

	wp_enqueue_script('partial-leads');

	wp_localize_script(
		'partial-leads',
		'partialLeadAjax',
		array(
			'ajax_url' => admin_url('admin-ajax.php')
		)
	);
}
add_action('wp_enqueue_scripts', 'partial_leads_scripts');


/**
 * Admin Menu
 */
add_action('admin_menu', 'partial_leads_menu');

function partial_leads_menu()
{

	add_menu_page(
		'Partial Leads',
		'Partial Leads',
		'manage_options',
		'partial-leads',
		'partial_leads_admin_page',
		'dashicons-phone',
		25
	);
}


function partial_leads_admin_page()
{

	global $wpdb;

	$table_name = $wpdb->prefix . 'partial_leads';

	$leads = $wpdb->get_results(
		"SELECT * FROM {$table_name} ORDER BY id DESC"
	);

?>

	<div class="wrap">

		<h1>Partial Leads</h1>
		<h1 class="wp-heading-inline">Partial Leads</h1>

		<a href="<?php echo admin_url('admin-post.php?action=export_partial_leads'); ?>"
			class="page-title-action">
			Export CSV
		</a>

		<a href="<?php echo wp_nonce_url(
						admin_url('admin-post.php?action=delete_all_partial_leads'),
						'delete_all_partial_leads'
					); ?>"
			class="button button-secondary"
			onclick="return confirm('Delete ALL leads? This cannot be undone.');">
			Delete All
		</a>

		<hr class="wp-header-end">
		<table class="wp-list-table widefat striped">

			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Phone</th>
					<th>Page URL</th>
					<th>Date</th>
					<th>Actions</th>
				</tr>
			</thead>

			<tbody>

				<?php foreach ($leads as $lead) : ?>

					<tr>
						<td><?php echo esc_html($lead->id); ?></td>

						<td>
							<?php echo !empty($lead->name)
								? esc_html($lead->name)
								: '-'; ?>
						</td>

						<td><?php echo esc_html($lead->phone); ?></td>

						<td>
							<a href="<?php echo esc_url($lead->page_url); ?>" target="_blank" rel="noopener noreferrer">
								View Page
							</a>
						</td>

						<td><?php echo esc_html($lead->created_at); ?></td>
						<td>
							<a href="<?php echo wp_nonce_url(
											admin_url(
												'admin-post.php?action=delete_partial_lead&id=' . $lead->id
											),
											'delete_partial_lead_' . $lead->id
										); ?>"
								class="button button-small button-link-delete"
								onclick="return confirm('Delete this lead?');">
								Delete
							</a>
						</td>
					</tr>

				<?php endforeach; ?>

			</tbody>

		</table>

	</div>

<?php
}


add_action('admin_post_export_partial_leads', 'export_partial_leads_csv');

function export_partial_leads_csv()
{

	if (!current_user_can('manage_options')) {
		wp_die('Unauthorized');
	}

	global $wpdb;

	$table_name = $wpdb->prefix . 'partial_leads';

	$results = $wpdb->get_results(
		"SELECT * FROM {$table_name} ORDER BY id DESC",
		ARRAY_A
	);

	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=partial-leads-' . date('Y-m-d') . '.csv');

	$output = fopen('php://output', 'w');

	// CSV Headers
	fputcsv($output, [
		'ID',
		'Name',
		'Phone',
		'Page URL',
		'Created At'
	]);

	// Data Rows
	foreach ($results as $row) {

		fputcsv($output, [
			$row['id'],
			$row['name'],
			$row['phone'],
			$row['page_url'],
			$row['created_at']
		]);
	}

	fclose($output);
	exit;
}


add_action('admin_post_delete_partial_lead', 'delete_partial_lead');

function delete_partial_lead()
{

	if (!current_user_can('manage_options')) {
		wp_die('Unauthorized');
	}

	$id = isset($_GET['id']) ? absint($_GET['id']) : 0;

	if (!$id) {
		wp_die('Invalid Lead ID');
	}

	check_admin_referer('delete_partial_lead_' . $id);

	global $wpdb;

	$table_name = $wpdb->prefix . 'partial_leads';

	$wpdb->delete(
		$table_name,
		['id' => $id],
		['%d']
	);

	wp_redirect(admin_url('admin.php?page=partial-leads'));
	exit;
}


add_action('admin_post_delete_all_partial_leads', 'delete_all_partial_leads');

function delete_all_partial_leads()
{

	if (!current_user_can('manage_options')) {
		wp_die('Unauthorized');
	}

	check_admin_referer('delete_all_partial_leads');

	global $wpdb;

	$table_name = $wpdb->prefix . 'partial_leads';

	$wpdb->query("TRUNCATE TABLE {$table_name}");

// 	wp_redirect(admin_url('admin.php?page=partial-leads'));
	wp_safe_redirect(admin_url('admin.php?page=partial-leads'));
	exit;
}

/*
// Enqueue calculator script
function enqueue_calculator_script()
{
	wp_enqueue_script('calculator-js', get_stylesheet_directory_uri() . '/js/calculator-modal.js', ['jquery'], time(), true);
	wp_localize_script(
		'calculator-js',
		'landing_ajax',
		[
			'ajaxurl' => admin_url('admin-ajax.php')
		]
	);
}
add_action('wp_enqueue_scripts', 'enqueue_calculator_script');

// =====================
// LANDING LEADS
// =====================

function create_landing_leads_table()
{
	global $wpdb;
	$table_name = $wpdb->prefix . 'landing_leads';
	$charset_collate = $wpdb->get_charset_collate();
	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        project_type VARCHAR(255) NULL,
        business_type VARCHAR(255) NULL,
        project_size VARCHAR(255) NULL,
        brand_name VARCHAR(255) NULL,
        phone VARCHAR(20) NULL,
        budget VARCHAR(255) NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);
}
add_action('after_switch_theme', 'create_landing_leads_table');
add_action('admin_init', 'create_landing_leads_table');

add_action('wp_ajax_landing_calculator_submit', 'landing_calculator_submit');
add_action('wp_ajax_nopriv_landing_calculator_submit', 'landing_calculator_submit');

function landing_calculator_submit()
{
	global $wpdb;
	$table = $wpdb->prefix . 'landing_leads';
	$page_source = isset($_POST['page_url']) ? esc_url_raw($_POST['page_url']) : (isset($_SERVER['HTTP_REFERER']) ? esc_url_raw($_SERVER['HTTP_REFERER']) : '');

	$data = [
		'project_type'  => sanitize_text_field($_POST['project_type'] ?? ''),
		'business_type' => sanitize_text_field($_POST['business_type'] ?? ''),
		'project_size'  => sanitize_text_field($_POST['project_size'] ?? ''),
		'brand_name'    => sanitize_text_field($_POST['brand_name'] ?? ''),
		'phone'         => sanitize_text_field($_POST['phone'] ?? ''),
		'budget'        => sanitize_text_field($_POST['budget'] ?? ''),
	];
	$wpdb->insert($table, $data);

	$subject = 'Popup lead form - ' . $data['brand_name'];

	$message = "<html><body><p><strong>New Landing Lead Submission:</strong></p>";
	foreach ($data as $key => $value) {
		$message .= "<p>" . ucfirst(str_replace('_', ' ', $key)) . ": " . $value . "</p>";
	}
	if (!empty($page_source)) {
		$message .= "<p>Page Source: <a href='" . esc_url($page_source) . "'>View Page</a></p>";
	}
	$message .= "</body></html>";
	$headers = ['Content-Type: text/html; charset=UTF-8'];
	wp_mail('jishnu@intersmart.in, rony@intersmart.ae, shaino@intersmart.ae, gokul@intersmart.in', $subject, $message, $headers);
	wp_send_json_success();
}

function landing_leads_menu()
{
	add_menu_page('Landing Leads', 'Landing Leads', 'manage_options', 'landing-leads', 'render_landing_leads_page', 'dashicons-chart-pie', 26);
}
add_action('admin_menu', 'landing_leads_menu');

function export_landing_leads_csv()
{
	if (isset($_GET['page']) && $_GET['page'] === 'landing-leads' && isset($_GET['action']) && $_GET['action'] === 'export_csv') {
		if (!current_user_can('manage_options')) {
			wp_die('Unauthorized');
		}

		global $wpdb;
		$table = $wpdb->prefix . 'landing_leads';
		$leads = $wpdb->get_results("SELECT * FROM $table ORDER BY id DESC", ARRAY_A);

		header('Content-Type: text/csv; charset=utf-8');
		header('Content-Disposition: attachment; filename=landing-leads-' . date('Y-m-d') . '.csv');

		$output = fopen('php://output', 'w');
		fputcsv($output, ['ID', 'Date', 'Project Type', 'Business Type', 'Project Size', 'Brand Name', 'Phone', 'Budget']);

		if (!empty($leads)) {
			foreach ($leads as $lead) {
				fputcsv($output, [
					$lead['id'],
					$lead['created_at'],
					$lead['project_type'],
					$lead['business_type'],
					$lead['project_size'],
					$lead['brand_name'],
					$lead['phone'],
					$lead['budget'],
				]);
			}
		}

		fclose($output);
		exit;
	}
}
add_action('admin_init', 'export_landing_leads_csv');

add_action('admin_init', 'handle_landing_lead_actions');

function handle_landing_lead_actions()
{
	if (!isset($_GET['page']) || $_GET['page'] !== 'landing-leads') {
		return;
	}

	global $wpdb;
	$table = $wpdb->prefix . 'landing_leads';

	// Delete single lead
	if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {

		check_admin_referer('delete_landing_lead_' . $_GET['id']);

		if (current_user_can('manage_options')) {
			$wpdb->delete($table, ['id' => absint($_GET['id'])]);

			wp_safe_redirect(admin_url('admin.php?page=landing-leads'));
			exit;
		}
	}

	// Delete all leads
	if (isset($_GET['action']) && $_GET['action'] === 'delete_all') {

		check_admin_referer('delete_all_landing_leads');

		if (current_user_can('manage_options')) {
			$wpdb->query("TRUNCATE TABLE $table");

			wp_safe_redirect(admin_url('admin.php?page=landing-leads'));
			exit;
		}
	}
}


function render_landing_leads_page()
{
	global $wpdb;
	$table = $wpdb->prefix . 'landing_leads';

	$leads = $wpdb->get_results("SELECT * FROM $table ORDER BY id DESC");
?>
	<div class="wrap">
		<h1 class="wp-heading-inline">Landing Leads</h1>
		<a href="<?php echo admin_url('admin.php?page=landing-leads&action=export_csv'); ?>" class="page-title-action">Export CSV</a>
		<a href="<?php echo wp_nonce_url(admin_url('admin.php?page=landing-leads&action=delete_all'), 'delete_all_landing_leads'); ?>" class="page-title-action" onclick="return confirm('Are you sure you want to delete all leads?');" style="color: #bc0b0b;">Delete All Leads</a>
		<hr class="wp-header-end">

		<table class="wp-list-table widefat striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Date</th>
					<th>Project Type</th>
					<th>Business Type</th>
					<th>Project Size</th>
					<th>Brand Name</th>
					<th>Phone</th>
					<th>Budget</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if (empty($leads)) : ?>
					<tr>
						<td colspan="9">No leads found.</td>
					</tr>
				<?php else : ?>
					<?php foreach ($leads as $lead) : ?>
						<tr>
							<td><?php echo esc_html($lead->id); ?></td>
							<td><?php echo esc_html($lead->created_at); ?></td>
							<td><?php echo esc_html($lead->project_type); ?></td>
							<td><?php echo esc_html($lead->business_type); ?></td>
							<td><?php echo esc_html($lead->project_size); ?></td>
							<td><?php echo esc_html($lead->brand_name); ?></td>
							<td><?php echo esc_html($lead->phone); ?></td>
							<td><?php echo esc_html($lead->budget); ?></td>
							<td>
								<a href="<?php echo wp_nonce_url(admin_url('admin.php?page=landing-leads&action=delete&id=' . $lead->id), 'delete_landing_lead_' . $lead->id); ?>" class="submitdelete" onclick="return confirm('Are you sure?');" style="color: #a00;">Delete</a>
							</td>
						</tr>
					<?php endforeach; ?>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
<?php
}

// =====================
// PHONE LEADS
// =====================

function create_phone_leads_table()
{
	global $wpdb;
	$table_name = $wpdb->prefix . 'phone_leads';
	$charset_collate = $wpdb->get_charset_collate();
	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        project_type VARCHAR(255) NULL,
        business_type VARCHAR(255) NULL,
        project_size VARCHAR(255) NULL,
        brand_name VARCHAR(255) NULL,
        phone VARCHAR(20) NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);
}
add_action('after_switch_theme', 'create_phone_leads_table');
add_action('admin_init', 'create_phone_leads_table');

add_action('wp_ajax_phone_lead_submit', 'phone_lead_submit');
add_action('wp_ajax_nopriv_phone_lead_submit', 'phone_lead_submit');

function phone_lead_submit()
{
	global $wpdb;
	$table = $wpdb->prefix . 'phone_leads';
	$page_source = isset($_POST['page_url']) ? esc_url_raw($_POST['page_url']) : (isset($_SERVER['HTTP_REFERER']) ? esc_url_raw($_SERVER['HTTP_REFERER']) : '');

	$data = [
		'project_type'  => sanitize_text_field($_POST['project_type'] ?? ''),
		'business_type' => sanitize_text_field($_POST['business_type'] ?? ''),
		'project_size'  => sanitize_text_field($_POST['project_size'] ?? ''),
		'brand_name'    => sanitize_text_field($_POST['brand_name'] ?? ''),
		'phone'         => sanitize_text_field($_POST['phone'] ?? ''),
	];

	if (empty($data['phone'])) {
		wp_send_json_error('No phone number');
		return;
	}

	$wpdb->insert($table, $data);

	$subject = 'Popup phone lead - ' . $data['brand_name'];

	$message = "<html><body><p><strong>New Phone Lead:</strong></p>";
	foreach ($data as $key => $value) {
		$message .= "<p>" . ucfirst(str_replace('_', ' ', $key)) . ": " . $value . "</p>";
	}
	if (!empty($page_source)) {
		$message .= "<p>Page Source: <a href='" . esc_url($page_source) . "'>View Page</a></p>";
	}
	$message .= "</body></html>";
	$headers = ['Content-Type: text/html; charset=UTF-8'];
	wp_mail('jishnu@intersmart.in, rony@intersmart.ae, shaino@intersmart.ae, gokul@intersmart.in', $subject, $message, $headers);

	wp_send_json_success();
}

function phone_leads_menu()
{
	add_menu_page('Phone Leads', 'Phone Leads', 'manage_options', 'phone-leads', 'render_phone_leads_page', 'dashicons-phone', 27);
}
add_action('admin_menu', 'phone_leads_menu');

function export_phone_leads_csv()
{
	if (isset($_GET['page']) && $_GET['page'] === 'phone-leads' && isset($_GET['action']) && $_GET['action'] === 'export_csv') {
		if (!current_user_can('manage_options')) {
			wp_die('Unauthorized');
		}

		global $wpdb;
		$table = $wpdb->prefix . 'phone_leads';
		$leads = $wpdb->get_results("SELECT * FROM $table ORDER BY id DESC", ARRAY_A);

		header('Content-Type: text/csv; charset=utf-8');
		header('Content-Disposition: attachment; filename=phone-leads-' . date('Y-m-d') . '.csv');

		$output = fopen('php://output', 'w');
		fputcsv($output, ['ID', 'Date', 'Project Type', 'Business Type', 'Project Size', 'Brand Name', 'Phone']);

		if (!empty($leads)) {
			foreach ($leads as $lead) {
				fputcsv($output, [
					$lead['id'],
					$lead['created_at'],
					$lead['project_type'],
					$lead['business_type'],
					$lead['project_size'],
					$lead['brand_name'],
					$lead['phone'],
				]);
			}
		}

		fclose($output);
		exit;
	}
}
add_action('admin_init', 'export_phone_leads_csv');


add_action('admin_init', 'handle_phone_lead_actions');

function handle_phone_lead_actions()
{
	if (!isset($_GET['page']) || $_GET['page'] !== 'phone-leads') {
		return;
	}

	global $wpdb;
	$table = $wpdb->prefix . 'phone_leads';

	// Delete single lead
	if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {

		check_admin_referer('delete_phone_lead_' . $_GET['id']);

		if (current_user_can('manage_options')) {
			$wpdb->delete($table, ['id' => absint($_GET['id'])]);

			wp_safe_redirect(admin_url('admin.php?page=phone-leads'));
			exit;
		}
	}

	// Delete all leads
	if (isset($_GET['action']) && $_GET['action'] === 'delete_all') {

		check_admin_referer('delete_all_phone_leads');

		if (current_user_can('manage_options')) {
			$wpdb->query("TRUNCATE TABLE $table");

			wp_safe_redirect(admin_url('admin.php?page=phone-leads'));
			exit;
		}
	}
}


function render_phone_leads_page()
{
	global $wpdb;
	$table = $wpdb->prefix . 'phone_leads';

	$leads = $wpdb->get_results("SELECT * FROM $table ORDER BY id DESC");
?>
	<div class="wrap">
		<h1 class="wp-heading-inline">Phone Leads</h1>
		<a href="<?php echo admin_url('admin.php?page=phone-leads&action=export_csv'); ?>" class="page-title-action">Export CSV</a>
		<a href="<?php echo wp_nonce_url(admin_url('admin.php?page=phone-leads&action=delete_all'), 'delete_all_phone_leads'); ?>" class="page-title-action" onclick="return confirm('Are you sure?');" style="color: #bc0b0b;">Delete All</a>
		<hr class="wp-header-end">

		<table class="wp-list-table widefat striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Date</th>
					<th>Project Type</th>
					<th>Business Type</th>
					<th>Project Size</th>
					<th>Brand Name</th>
					<th>Phone</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if (empty($leads)) : ?>
					<tr>
						<td colspan="8">No phone leads found.</td>
					</tr>
				<?php else : ?>
					<?php foreach ($leads as $lead) : ?>
						<tr>
							<td><?php echo esc_html($lead->id); ?></td>
							<td><?php echo esc_html($lead->created_at); ?></td>
							<td><?php echo esc_html($lead->project_type); ?></td>
							<td><?php echo esc_html($lead->business_type); ?></td>
							<td><?php echo esc_html($lead->project_size); ?></td>
							<td><?php echo esc_html($lead->brand_name); ?></td>
							<td><?php echo esc_html($lead->phone); ?></td>
							<td>
								<a href="<?php echo wp_nonce_url(admin_url('admin.php?page=phone-leads&action=delete&id=' . $lead->id), 'delete_phone_lead_' . $lead->id); ?>" class="submitdelete" onclick="return confirm('Are you sure?');" style="color: #a00;">Delete</a>
							</td>
						</tr>
					<?php endforeach; ?>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
<?php
}

*/

/**
 * Enquiry success page for campaign tracking. Any successful WPForms ajax submit sends the visitor
 * to /?enquiry=success&form=<id>, which renders thank-you.php (no WP page needed). Use that URL as the
 * conversion URL in Google Ads / Analytics; the page also pushes dataLayer event "enquiry_success".
 */
add_action('template_redirect', function () {
	if (isset($_GET['enquiry']) && $_GET['enquiry'] === 'success') {
		status_header(200);
		nocache_headers();
		add_filter('wp_robots', 'wp_robots_no_robots');
		include get_stylesheet_directory() . '/thank-you.php';
		exit;
	}
});
add_action('wp_footer', function () {
	if (isset($_GET['enquiry'])) {
		return;
	}
	$url = esc_url_raw(add_query_arg('enquiry', 'success', home_url('/')));
	echo '<script>jQuery(document).on("wpformsAjaxSubmitSuccess",function(e,r){if(r&&r.data&&r.data.redirect_url){return;}var f=parseInt(jQuery(e.target).data("formid"),10)||0;window.location.href=' . wp_json_encode($url) . '+(f?"&form="+f:"");});</script>';
}, 100);
