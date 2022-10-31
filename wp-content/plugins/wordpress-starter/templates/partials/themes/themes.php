<div class="sg-grid sg-grid--gap-responsive sg-grid--autoflow-row sg-tabs-<?php echo $tab['id']; ?> sg-tab-<?php echo $tab['id']; ?> sg-tabs_content <?php echo ( ! empty( $tab['active'] ) ? 'sg-tabs_content--active' : '' ) ?>">
	<div class="filter-drawer">
		<div class="buttons">
			<button type="button" class="apply-filters button"><?php _e( 'Apply Filters' ); ?><span></span></button>
			<button type="button" class="clear-filters button" aria-label="<?php esc_attr_e( 'Clear current filters' ); ?>"><?php _e( 'Clear' ); ?></button>
		</div>
	<?php
	// Use the core list, rather than the .org API, due to inconsistencies
	// and to ensure tags are translated.
	$feature_list = get_theme_feature_list( false );

	foreach ( $feature_list as $feature_name => $features ) {
		echo '<fieldset class="filter-group">';
		$feature_name = esc_html( $feature_name );
		echo '<legend>' . $feature_name . '</legend>';
		echo '<div class="filter-group-feature">';
		foreach ( $features as $feature => $feature_name ) {
			$feature = esc_attr( $feature );
			echo '<input type="checkbox" id="filter-id-' . $feature . '" value="' . $feature . '" /> ';
			echo '<label for="filter-id-' . $feature . '">' . $feature_name . '</label>';
		}
		echo '</div>';
		echo '</fieldset>';
	}
	?>
		<div class="buttons">
			<button type="button" class="apply-filters button"><?php _e( 'Apply Filters' ); ?><span></span></button>
			<button type="button" class="clear-filters button" aria-label="<?php esc_attr_e( 'Clear current filters' ); ?>"><?php _e( 'Clear' ); ?></button>
		</div>
		<div class="filtered-by">
			<span><?php _e( 'Filtering by:' ); ?></span>
			<div class="tags"></div>
			<button type="button" class="button-link edit-filters"><?php _e( 'Edit Filters' ); ?></button>
		</div>
	</div>

	<div class="sg-grid sg-grid--gap-responsive sg-grid--autoflow-row sg-grid--m-3 sg-grid--sm-2 sg-tab-content" data-tab-content="<?php echo $tab['id']; ?>">
		<?php $themes_control->render_themes( $tab['id'] ); ?>
	</div>
	
	<?php include \SiteGround_Central\DIR . '/templates/partials/themes/load-more.php'; ?>
</div>

