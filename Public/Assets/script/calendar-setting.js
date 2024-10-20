jQuery(document).ready(function () {
	jQuery("#add-event").submit(function () {
		alert("Submitted");
		var values = {};
		$.each($("#add-event").serializeArray(), function (i, field) {
			values[field.name] = field.value;
		});
		console.log(values);
	});
});

(function () {
	"use strict";
	// ------------------------------------------------------- //
	// Calendar
	// ------------------------------------------------------ //
	jQuery(function () {
		// page is ready
		jQuery("#calendar").fullCalendar({
			themeSystem: "bootstrap4",
			// emphasizes business hours
			businessHours: false,
			defaultView: "month",
			// event dragging & resizing
			editable: true,
			hiddenDays: [0],
			// header
			header: {
				left: "",
				center: "",
				right: "",
			},
			events: [
				{
					title: "Barber",
					description:
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.",
					start: "2023-05-05",
					end: "2023-05-05",
					className: "fc-bg-default",
					icon: "circle",
				},
				{
					title: "Flight Paris",
					description:
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.",
					start: "2022-08-08T14:00:00",
					end: "2022-08-08T20:00:00",
					className: "fc-bg-deepskyblue",
					icon: "cog",
					allDay: false,
				}
			],
			dayClick: function () {
				jQuery("#modal-view-event-add").modal();
			},
			eventClick: function (event, jsEvent, view) {
				jQuery(".event-icon").html("<i class='fa fa-" + event.icon + "'></i>");
				jQuery(".event-title").html(event.title);
				jQuery(".event-body").html(event.description);
				jQuery(".eventUrl").attr("href", event.url);
				jQuery("#modal-view-event").modal();
			},
		});
	});
})(jQuery);
