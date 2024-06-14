<style>
  .fc button {
    background-color: #4CAF50 !important;
  }
</style>
<div class="collapse navbar-collapse justify-content-end">
  <form class="navbar-form">
    <div class="input-group no-border">
      <input type="text" value="" class="form-control" placeholder="Search...">
      <button type="submit" class="btn btn-white btn-round btn-just-icon">
        <i class="material-icons">search</i>
        <div class="ripple-container"></div>
      </button>
    </div>
  </form>

</div>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">content_copy</i>
                    </div>
                    <p class="card-category">Total Programms</p>
                    <h3 class="card-title"><?php if($programs){echo sizeof($programs);}else{echo '0';} ?>

                    </h3>
                  </div>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Total Classes</p>
                    <h3 class="card-title"><?php if($classes){echo sizeof($classes);}else{echo '0';} ?></h3>
                  </div>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">info_outline</i>
                    </div>
                    <p class="card-category">Total Attendees</p>
                    <h3 class="card-title"><?php if($attendees){echo sizeof($attendees);}else{echo '0';} ?></h3>
                  </div>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                      <i class="fa fa-user"></i>
                    </div>
                    <p class="card-category">Upcoming Classes</p>
                    <h3 class="card-title"><?php if($upcoming_classes){echo sizeof($upcoming_classes);}else{echo '0';} ?></h3>
                  </div>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="content">
                  <div class="container-fluid">

                    <div class="card card-calendar">
                      <div class="card-header card-header-info">
                        <h4 class="card-title">Class Schedule</h4>
                      </div>

                      <div class="card-body ">
                        <div id="fullCalendar"></div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<link href='<?php print_r(base_url('assets/css/fc.css')); ?>' rel='stylesheet' />


<script>
  $(document).ready(function() {
    

cd = {
	misc: {
		navbar_menu_visible: 0,
		active_collapse: true,
		disabled_collapse_init: 0,
	},

	checkSidebarImage: function () {
		$sidebar = $('.sidebar');
		image_src = $sidebar.data('image');

		if (image_src !== undefined) {
			sidebar_container = '<div class="sidebar-background" style="background-image: url(' + image_src + ') "/>';
			$sidebar.append(sidebar_container);
		}
	},

	showNotification: function (from, align) {
		type = ['', 'info', 'danger', 'success', 'warning', 'rose', 'primary'];

		color = Math.floor((Math.random() * 6) + 1);

		$.notify({
			icon: "add_alert",
			message: "Welcome to <b>Material Dashboard Pro</b> - a beautiful admin panel for every web developer."

		}, {
			type: type[color],
			timer: 3000,
			placement: {
				from: from,
				align: align
			}
		});
	},

	initDocumentationCharts: function () {
		if ($('#dailySalesChart').length != 0 && $('#websiteViewsChart').length != 0) {
			/* ----------==========     Daily Sales Chart initialization For Documentation    ==========---------- */

			dataDailySalesChart = {
				labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
				series: [
					[12, 17, 7, 17, 23, 18, 38]
				]
			};

			optionsDailySalesChart = {
				lineSmooth: Chartist.Interpolation.cardinal({
					tension: 0
				}),
				low: 0,
				high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
				chartPadding: {
					top: 0,
					right: 0,
					bottom: 0,
					left: 0
				},
			}

			var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);

			var animationHeaderChart = new Chartist.Line('#websiteViewsChart', dataDailySalesChart, optionsDailySalesChart);
		}
	},


	initFormExtendedDatetimepickers: function () {
		$('.datetimepicker').datetimepicker({
			icons: {
				time: "fa fa-clock-o",
				date: "fa fa-calendar",
				up: "fa fa-chevron-up",
				down: "fa fa-chevron-down",
				previous: 'fa fa-chevron-left',
				next: 'fa fa-chevron-right',
				today: 'fa fa-screenshot',
				clear: 'fa fa-trash',
				close: 'fa fa-remove'
			}
		});

		$('.datepicker').datetimepicker({
			format: 'MM/DD/YYYY',
			icons: {
				time: "fa fa-clock-o",
				date: "fa fa-calendar",
				up: "fa fa-chevron-up",
				down: "fa fa-chevron-down",
				previous: 'fa fa-chevron-left',
				next: 'fa fa-chevron-right',
				today: 'fa fa-screenshot',
				clear: 'fa fa-trash',
				close: 'fa fa-remove'
			}
		});

		$('.timepicker').datetimepicker({
			//          format: 'H:mm',    // use this format if you want the 24hours timepicker
			format: 'h:mm A', //use this format if you want the 12hours timpiecker with AM/PM toggle
			icons: {
				time: "fa fa-clock-o",
				date: "fa fa-calendar",
				up: "fa fa-chevron-up",
				down: "fa fa-chevron-down",
				previous: 'fa fa-chevron-left',
				next: 'fa fa-chevron-right',
				today: 'fa fa-screenshot',
				clear: 'fa fa-trash',
				close: 'fa fa-remove'

			}
		});
	},


	initSliders: function () {
		// Sliders for demo purpose
		var slider = document.getElementById('sliderRegular');

		noUiSlider.create(slider, {
			start: 40,
			connect: [true, false],
			range: {
				min: 0,
				max: 100
			}
		});

		var slider2 = document.getElementById('sliderDouble');

		noUiSlider.create(slider2, {
			start: [20, 60],
			connect: true,
			range: {
				min: 0,
				max: 100
			}
		});
	},

	initSidebarsCheck: function () {
		if ($(window).width() <= 991) {
			if ($sidebar.length != 0) {
				md.initRightMenu();
			}
		}
	},

	checkFullPageBackgroundImage: function () {
		$page = $('.full-page');
		image_src = $page.data('image');

		if (image_src !== undefined) {
			image_container = '<div class="full-page-background" style="background-image: url(' + image_src + ') "/>'
			$page.append(image_container);
		}
	},

	initDashboardPageCharts: function () {

		if ($('#dailySalesChart').length != 0 || $('#completedTasksChart').length != 0 || $('#websiteViewsChart').length != 0) {
			/* ----------==========     Daily Sales Chart initialization    ==========---------- */

			dataDailySalesChart = {
				labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
				series: [
					[12, 17, 7, 17, 23, 18, 38]
				]
			};

			optionsDailySalesChart = {
				lineSmooth: Chartist.Interpolation.cardinal({
					tension: 0
				}),
				low: 0,
				high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
				chartPadding: {
					top: 0,
					right: 0,
					bottom: 0,
					left: 0
				},
			}

			var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);

			md.startAnimationForLineChart(dailySalesChart);



			/* ----------==========     Completed Tasks Chart initialization    ==========---------- */

			dataCompletedTasksChart = {
				labels: ['12p', '3p', '6p', '9p', '12p', '3a', '6a', '9a'],
				series: [
					[230, 750, 450, 300, 280, 240, 200, 190]
				]
			};

			optionsCompletedTasksChart = {
				lineSmooth: Chartist.Interpolation.cardinal({
					tension: 0
				}),
				low: 0,
				high: 1000, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
				chartPadding: {
					top: 0,
					right: 0,
					bottom: 0,
					left: 0
				}
			}

			var completedTasksChart = new Chartist.Line('#completedTasksChart', dataCompletedTasksChart, optionsCompletedTasksChart);

			// start animation for the Completed Tasks Chart - Line Chart
			md.startAnimationForLineChart(completedTasksChart);


			/* ----------==========     Emails Subscription Chart initialization    ==========---------- */

			var dataWebsiteViewsChart = {
				labels: ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
				series: [
					[542, 443, 320, 780, 553, 453, 326, 434, 568, 610, 756, 895]

				]
			};
			var optionsWebsiteViewsChart = {
				axisX: {
					showGrid: false
				},
				low: 0,
				high: 1000,
				chartPadding: {
					top: 0,
					right: 5,
					bottom: 0,
					left: 0
				}
			};
			var responsiveOptions = [
				['screen and (max-width: 640px)', {
					seriesBarDistance: 5,
					axisX: {
						labelInterpolationFnc: function (value) {
							return value[0];
						}
					}
				}]
			];
			var websiteViewsChart = Chartist.Bar('#websiteViewsChart', dataWebsiteViewsChart, optionsWebsiteViewsChart, responsiveOptions);

			//start animation for the Emails Subscription Chart
			md.startAnimationForBarChart(websiteViewsChart);
		}
	},

	initMinimizeSidebar: function () {

		$('#minimizeSidebar').click(function () {
			var $btn = $(this);

			if (md.misc.sidebar_mini_active == true) {
				$('body').removeClass('sidebar-mini');
				md.misc.sidebar_mini_active = false;
			} else {
				$('body').addClass('sidebar-mini');
				md.misc.sidebar_mini_active = true;
			}

			// we simulate the window Resize so the charts will get updated in realtime.
			var simulateWindowResize = setInterval(function () {
				window.dispatchEvent(new Event('resize'));
			}, 180);

			// we stop the simulation of Window Resize after the animations are completed
			setTimeout(function () {
				clearInterval(simulateWindowResize);
			}, 1000);
		});
	},

	checkScrollForTransparentNavbar: debounce(function () {
		if ($(document).scrollTop() > 260) {
			if (transparent) {
				transparent = false;
				$('.navbar-color-on-scroll').removeClass('navbar-transparent');
			}
		} else {
			if (!transparent) {
				transparent = true;
				$('.navbar-color-on-scroll').addClass('navbar-transparent');
			}
		}
	}, 17),


	initRightMenu: debounce(function () {
		$sidebar_wrapper = $('.sidebar-wrapper');

		if (!mobile_menu_initialized) {
			$navbar = $('nav').find('.navbar-collapse').children('.navbar-nav');

			mobile_menu_content = '';

			nav_content = $navbar.html();

			nav_content = '<ul class="nav navbar-nav nav-mobile-menu">' + nav_content + '</ul>';

			navbar_form = $('nav').find('.navbar-form').get(0).outerHTML;

			$sidebar_nav = $sidebar_wrapper.find(' > .nav');

			// insert the navbar form before the sidebar list
			$nav_content = $(nav_content);
			$navbar_form = $(navbar_form);
			$nav_content.insertBefore($sidebar_nav);
			$navbar_form.insertBefore($nav_content);

			$(".sidebar-wrapper .dropdown .dropdown-menu > li > a").click(function (event) {
				event.stopPropagation();

			});

			// simulate resize so all the charts/maps will be redrawn
			window.dispatchEvent(new Event('resize'));

			mobile_menu_initialized = true;
		} else {
			if ($(window).width() > 991) {
				// reset all the additions that we made for the sidebar wrapper only if the screen is bigger than 991px
				$sidebar_wrapper.find('.navbar-form').remove();
				$sidebar_wrapper.find('.nav-mobile-menu').remove();

				mobile_menu_initialized = false;
			}
		}
	}, 200),

	startAnimationForLineChart: function (chart) {

		chart.on('draw', function (data) {
			if (data.type === 'line' || data.type === 'area') {
				data.element.animate({
					d: {
						begin: 600,
						dur: 700,
						from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
						to: data.path.clone().stringify(),
						easing: Chartist.Svg.Easing.easeOutQuint
					}
				});
			} else if (data.type === 'point') {
				seq++;
				data.element.animate({
					opacity: {
						begin: seq * delays,
						dur: durations,
						from: 0,
						to: 1,
						easing: 'ease'
					}
				});
			}
		});

		seq = 0;
	},
	startAnimationForBarChart: function (chart) {

		chart.on('draw', function (data) {
			if (data.type === 'bar') {
				seq2++;
				data.element.animate({
					opacity: {
						begin: seq2 * delays2,
						dur: durations2,
						from: 0,
						to: 1,
						easing: 'ease'
					}
				});
			}
		});

		seq2 = 0;
	},


	initFullCalendar: function () {
		$calendar = $('#fullCalendar');

		today = new Date();
		y = today.getFullYear();
		m = today.getMonth();
		d = today.getDate();

		$calendar.fullCalendar({
			viewRender: function (view, element) {
				// We make sure that we activate the perfect scrollbar when the view isn't on Month
				if (view.name != 'month') {
					$(element).find('.fc-scroller').perfectScrollbar();
				}
			},
			header: {
				left: 'title',
				center: '',
				right: 'prev,next,today'
			},
			defaultDate: today,
			selectable: true,
			selectHelper: true,
			views: {
				month: { // name of view
					titleFormat: 'MMMM YYYY'
					// other view-specific options here
				},
				week: {
					titleFormat: " MMMM D YYYY"
				},
				day: {
					titleFormat: 'D MMM, YYYY'
				}
			},


			editable: true,
			eventLimit: true, // allow "more" link when too many events


			// color classes: [ event-blue | event-azure | event-green | event-orange | event-red ]
			events: [<?php for($i=0; $i<sizeof($classes); $i++) { ?>
          {title: '<?php echo $classes[$i]['title'] ?>',
					  start: new Date(<?php echo substr($classes[$i]['class_date'],0,4) ?>, <?php echo ((int)substr($classes[$i]['class_date'],5,2)-1) ?>, <?php echo substr($classes[$i]['class_date'],8) ?>, <?php echo substr($classes[$i]['start_time'],0,2) ?>, <?php echo substr($classes[$i]['start_time'],3,2) ?>),
					  className: '<?php if($classes[$i]['class_date'] > date("Y-m-d")){echo 'event-green';}else if($classes[$i]['class_date'] < date("Y-m-d")){echo 'event-azure';}else{echo 'event-red';} ?>'},
        <?php } ?>
				

			]
		});
	},

	initVectorMap: function () {
		var mapData = {
			"AU": 760,
			"BR": 550,
			"CA": 120,
			"DE": 1300,
			"FR": 540,
			"GB": 690,
			"GE": 200,
			"IN": 200,
			"RO": 600,
			"RU": 300,
			"US": 2920,
		};

		$('#worldMap').vectorMap({
			map: 'world_mill_en',
			backgroundColor: "transparent",
			zoomOnScroll: false,
			regionStyle: {
				initial: {
					fill: '#e4e4e4',
					"fill-opacity": 0.9,
					stroke: 'none',
					"stroke-width": 0,
					"stroke-opacity": 0
				}
			},

			series: {
				regions: [{
					values: mapData,
					scale: ["#AAAAAA", "#444444"],
					normalizeFunction: 'polynomial'
				}]
			},
		});
	}
}

cd.initFullCalendar();

  });
</script>

<noscript>
  $(document).ready(function() {


    function initFullCalendar() {
		$calendar = $('#fullCalendar');

		today = new Date();
		y = today.getFullYear();
		m = today.getMonth();
		d = today.getDate();

		$calendar.fullCalendar({
			viewRender: function (view, element) {
				// We make sure that we activate the perfect scrollbar when the view isn't on Month
				if (view.name != 'month') {
					$(element).find('.fc-scroller').perfectScrollbar();
				}
			},
			header: {
				left: 'title',
				center: 'month,agendaWeek,agendaDay',
				right: 'prev,next,today'
			},
			defaultDate: today,
			selectable: true,
			selectHelper: true,
			views: {
				month: { // name of view
					titleFormat: 'MMMM YYYY'
					// other view-specific options here
				},
				week: {
					titleFormat: " MMMM D YYYY"
				},
				day: {
					titleFormat: 'D MMM, YYYY'
				}
			},


			editable: true,
			eventLimit: true, // allow "more" link when too many events


			// color classes: [ event-blue | event-azure | event-green | event-orange | event-red ]
			events: [
        
        <?php for($i=0; $i<sizeof($classes); $i++) { ?>
          {title: <?php echo $classes[$i]['title'] ?>,
					  start: <?php echo $classes[$i]['class_date'] ?>,
					  className: <?php if($classes[$i]['class_date'] > date("Y-m-d")){echo 'event-green';}else if($classes[$i]['class_date'] < date("Y-m-d")){echo 'event-blue';}else{echo 'event-red';} ?>},
        <?php } ?>

        {
					title: 'All Day Event',
					start: new Date(y, m, 1),
					className: 'event-default'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d - 4, 6, 0),
					allDay: false,
					className: 'event-rose'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d + 3, 6, 0),
					allDay: false,
					className: 'event-rose'
				},
        
        
        

			]
		});
	},
    



  initFullCalendar();

  });
</noscript>