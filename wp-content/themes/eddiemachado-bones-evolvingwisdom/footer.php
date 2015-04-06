
				<footer id="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
					<nav id="navEWFooter" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'ew-footer' ) ); ?>
					</nav> <!-- end #navEWFooter -->

					<p class="source-org copyright">&copy; Evolving Wisdom LLC 2009-<?php echo date('Y'); ?>  |  This site is published by Evolving Wisdom LLC which is solely responsible for the content. It is intended for visitors from the U.S.</p>
				</footer> <!-- end #footer -->
			</div> <!-- end #content -->
		</div> <!-- end #wrap -->

		<?php // all js scripts are loaded in library/bones.php ?>

		<?php wp_footer(); ?>
	</body>
</html>
