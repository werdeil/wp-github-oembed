<div class="github-embed github-embed-repository <?php echo $data['logo_class'] ?>">
    <p>
        <a href="<?php echo esc_attr( $data['repo']->html_url ) ?>" target="_blank">
			<?php echo esc_html( $data['repo']->title ) ?>
		</a>
		<strong>
				<?php echo esc_html( $data['repo']->description ) ?>
		</strong>
		<br>
        <a href="<?php echo esc_attr( $data['repo']->html_url ) ?>" target="_blank"><?php echo esc_html( $data['repo']->html_url ) ?></a><br>
        <a href="<?php echo esc_attr( $data['repo']->html_url ) ?>/network" target="_blank"><?php echo esc_html( number_format_i18n( $data['repo']->forks_count ) ) ?></a> forks.<br>
        <a href="<?php echo esc_attr( $data['repo']->html_url ) ?>/stargazers" target="_blank"><?php echo esc_html( number_format_i18n( $data['repo']->stargazers_count ) ) ?></a> stars.<br>
        <a href="<?php echo esc_attr( $data['repo']->html_url ) ?>/issues" target="_blank"><?php echo esc_html( number_format_i18n( $data['repo']->open_issues_count ) ) ?></a> open issues.<br>
    </p>
</div>
