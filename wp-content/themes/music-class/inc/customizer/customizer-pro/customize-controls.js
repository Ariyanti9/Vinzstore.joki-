( function( api ) {

	// Extends our custom "music-class" section.
	api.sectionConstructor['music-class'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );