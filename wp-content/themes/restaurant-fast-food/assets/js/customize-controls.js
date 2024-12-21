( function( api ) {

	// Extends our custom "restaurant-fast-food" section.
	api.sectionConstructor['restaurant-fast-food'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );