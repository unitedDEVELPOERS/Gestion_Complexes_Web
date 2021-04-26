var tribe_events_bar_action;!function(e,t,a,r,i,s,n,b,l){a(t).ready(function(){l&&(a().bootstrapDatepicker||tec_debug.warn("TEC Debug: vendor bootstrapDatepicker was not loaded before its dependant file tribe-events-bar.js"),a().placeholder||tec_debug.warn("TEC Debug: vendor placeholder was not loaded before its dependant file tribe-events-bar.js"));var o=a(t.getElementById("tribe-bar-form")),d=a(t.getElementById("tribe-bar-date")),c=(a(t.getElementById("tribe-events")),a(t.getElementById("tribe-events-header"))),v=0,p=a("select[name=tribe-bar-view]");function m(e){if(!e.parents(".tribe-bar-disabled").length){var t=e.width();t>800?e.removeClass("tribe-bar-mini tribe-bar-collapse").addClass("tribe-bar-full"):e.removeClass("tribe-bar-full").addClass("tribe-bar-mini"),t<728?(e.removeClass("tribe-bar-mini").addClass("tribe-bar-collapse"),y(a("#tribe-bar-collapse-toggle"))):(e.removeClass("tribe-bar-collapse"),C(a("#tribe-bar-collapse-toggle")))}}if(c.length&&(v=c.data("startofweek")),m(o),o.on("resize",function(){m(o)}),!a(".tribe-events-week-grid").length&&"month"!==n.view){let e=n.datepicker_format.toString(),i=tribeDateFormat.masks[e]||"yyyy-mm-dd",s=tribeUtils.getInitialDateInfo(e,i);a(t.getElementById("tribe-bar-date-day")).val(tribeUtils.formatMoment(s.dateMoment,"tribeQuery")),d.val(s.formattedDate),l&&tec_debug.info('TEC Debug: bootstrapDatepicker was just initialized in "tribe-events-bar.js" on:',d),r.datepicker_opts={weekStart:v,format:i,autoclose:!0},tribe_ev.fn.ensure_datepicker_i18n(),d.bootstrapDatepicker(r.datepicker_opts)}d.on("blur",function(){""===d.val()&&a(".datepicker.dropdown-menu").is(":hidden")&&b.live_ajax()&&b.pushstate&&(n.date=r.cur_date,r.cur_url=r.base_url,a(i).trigger("tribe_ev_runAjax"),a(i).trigger("run-ajax.tribe"))}),a(".tribe-bar-settings").length&&a(t.getElementById("tribe-events-bar")).addClass("tribe-has-settings"),a("#tribe-events-bar .hasDatepicker").length&&a(t.getElementById("tribe-events-bar")).addClass("tribe-has-datepicker"),a('input[name*="tribe-bar-"]').placeholder(),a('<ul class="tribe-bar-views-list" tabindex="-1" role="listbox" aria-labelledby="tribe-bar-views-label" />').insertAfter(p);var u=a(".tribe-bar-views-list");function g(){return u.find("li[data-view="+p.find(":selected").data("view")+"]")}p.find("option").each(function(e){var t=a(this);displaying=t.data("view");var r="tribe-bar-views-option-"+t.data("view");a("<li></li>",{id:r,class:"tribe-bar-views-option",role:"option",tabindex:"-1","data-tribe-bar-order":e,"data-view":displaying,"aria-labelledby":"tribe-bar-views-label "+r}).html('<span class="tribe-icon-'+displaying+'" aria-hidden="true" role="none"></span>'+t.text()).appendTo(".tribe-bar-views-list")});var f=g();f.addClass("tribe-bar-active");var h=a("<button>",{id:"tribe-bar-views-toggle",class:"tribe-bar-views-toggle","data-view":f.data("view"),"aria-haspopup":"listbox","aria-labelledby":"tribe-bar-views-label tribe-bar-views-toggle"});function w(){var e=g();h.removeAttr("aria-expanded"),o.removeClass("tribe-bar-views-open"),u.slideUp("fast").removeAttr("aria-activedescendant").find(".tribe-bar-views-option").removeClass("tribe-bar-active"),e.addClass("tribe-bar-active")}function _(e,t){e.preventDefault();var r=a(t);if(r.data("view")===h.data("view"))return h.trigger("focus"),void w();h.html(r.html()).trigger("focus"),w(),n.cur_url=a("option[data-view="+r.data("view")+"]").val(),n.view_target=a('select[name=tribe-bar-view] option[value="'+n.cur_url+'"]').data("view"),tribe_events_bar_action="change_view",k()}function C(e){var t=e.attr("data-label-shown");e.attr("aria-expanded","true"),e.find(".tribe-bar-toggle-text").html(t),e.addClass("tribe-bar-filters-open"),a(".tribe-bar-filters").slideDown("fast").attr("aria-hidden","false")}function y(e){var t=e.attr("data-label-hidden");a(".tribe-bar-filters").slideUp("fast").attr("aria-hidden","true"),e.removeClass("tribe-bar-filters-open"),e.find(".tribe-bar-toggle-text").html(t),e.attr("aria-expanded","false")}function k(){tribe_events_bar_action="change_view",n.url_params={},a(i).trigger("tribe_ev_preCollectBarParams"),a(i).trigger("pre-collect-bar-params.tribe");var s=a(t.getElementById("tribe-bar-form")).add(t.getElementById("tribe_events_filters_wrapper")).find("input, select");let l=n.datepicker_format.toString();s.each(function(){var e=a(this);e.val()&&e.val().length&&!e.hasClass("tribe-no-param")&&("month"!==n.view&&"0"!==n.datepicker_format&&e.is(d)?n.url_params[e.attr("name")]=tribeUtils.formatDateWithMoment(e.bootstrapDatepicker("getDate"),"tribeQuery",l):e.is(":checkbox")?e.is(":checked")&&(void 0===n.url_params[e.attr("name")]&&(n.url_params[e.attr("name")]=[]),n.url_params[e.attr("name")].push(e.val())):"radio"===e.attr("type")?e.is(":checked")&&(n.url_params[e.attr("name")]=e.val()):void 0!==e.attr("name")&&(n.url_params[e.attr("name")]=e.val()))});var o=a("#tribe-bar-views-option-"+r.default_mobile_view).data("redirected");if((r.redirected_view||o)&&(n.url_params.tribe_redirected=!0),"month"===n.view&&d.length){const e="m"+n.datepicker_format.toString(),t=d.val()||d.bootstrapDatepicker("getDate"),a=tribeUtils.maybeAlterMonthViewDate(t,e);n.url_params["tribe-bar-date"]=tribeUtils.formatDateWithMoment(a,"tribeQuery")}n.url_params=a.param(n.url_params),a(i).trigger("tribe_ev_postCollectBarParams"),a(i).trigger("post-collect-bar-params.tribe"),n.url_params.length&&(n.cur_url+=b.starting_delim()+n.url_params),e.location.href=n.cur_url}h.html(f.html()).insertBefore(u),p.hide(),o.on("click","#tribe-bar-views-toggle",function(e){var t;e.preventDefault(),o.hasClass("tribe-bar-views-open")?w():(t=g(),u.slideDown("fast").attr("aria-activedescendant",t.attr("id")).trigger("focus"),o.addClass("tribe-bar-views-open"),h.attr("aria-expanded","true"))}),o.on("click",".tribe-bar-views-option",function(e){_(e,this)}),a(t).on("keydown",function(e){if((38===e.which||40===e.which)&&o.hasClass("tribe-bar-views-open")){e.preventDefault();var t=e.which,a=null,r=u.find("li.tribe-bar-active");38===t&&r.prev(".tribe-bar-views-option")&&(a=r.prev(".tribe-bar-views-option")),40===t&&r.next(".tribe-bar-views-option")&&(a=r.next(".tribe-bar-views-option")),a.length&&(u.attr("aria-activedescendant",a.attr("id")),r.removeClass("tribe-bar-active"),a.addClass("tribe-bar-active").trigger("focus"))}}),o.on("keyup",".tribe-bar-views-option",function(e){13===e.which&&o.hasClass("tribe-bar-views-open")&&_(e,this)}),o.on("change",".tribe-bar-views-select",function(e){e.preventDefault();var t=a("option:selected",this).data("view");n.cur_url=a("option[data-view="+t+"]").val(),n.view_target=a('select[name=tribe-bar-view] option[value="'+n.cur_url+'"]').data("view"),tribe_events_bar_action="change_view",k()}),s.maybe_default_view_change(),o.on("click","#tribe-bar-collapse-toggle",function(e){e.preventDefault();var t=a(this);t.hasClass("tribe-bar-filters-open")?y(t):C(t)}),a(t).on("keyup",function(e){if(9===e.which){var r=a("#tribe-bar-collapse-toggle");o.hasClass("tribe-bar-collapse")&&r.hasClass("tribe-bar-filters-open")&&!a.contains(t.getElementById("tribe-bar-filters-wrap"),e.target)&&y(r);var i=a("#tribe-bar-views-toggle");o.hasClass("tribe-bar-views-open")&&i.not(":focus")&&w()}}),a(t).on("keyup",function(e){if(27===e.which){var t=a("#tribe-bar-collapse-toggle");o.hasClass("tribe-bar-collapse")&&t.hasClass("tribe-bar-filters-open")&&(y(t),t.trigger("focus"));var r=a("#tribe-bar-views-toggle");o.hasClass("tribe-bar-views-open")&&(w(),r.trigger("focus"))}}),a(i).on("tribe_ev_serializeBar",function(){var e=a("#tribe-bar-collapse-toggle");o.hasClass("tribe-bar-collapse")&&e.hasClass("tribe-bar-filters-open")&&(y(e),e.trigger("focus")),a("form#tribe-bar-form input, form#tribe-bar-form select, #tribeHideRecurrence").each(function(){var e=a(this);if(e.is("#tribe-bar-date")){let t=e.val(),a=n.datepicker_format.toString();t.length?"month"===n.view?(a="m"+a,n.params[e.attr("name")]=tribeUtils.formatDateWithMoment(n.mdate,"tribeMonthQuery",a),n.url_params[e.attr("name")]=tribeUtils.formatDateWithMoment(n.mdate,"tribeMonthQuery",a)):t.match(/^[0-9]+[\-\.\/][0-9]+$/)?n.params[e.attr("name")]=n.url_params[e.attr("name")]=tribeUtils.formatDateWithMoment(t,"tribeQuery",a):(n.params[e.attr("name")]=tribeUtils.formatDateWithMoment(e.bootstrapDatepicker("getDate"),"tribeQuery",a),n.url_params[e.attr("name")]=tribeUtils.formatDateWithMoment(e.bootstrapDatepicker("getDate"),"tribeQuery",a)):e.is(".placeholder")&&e.is(".bd-updated")?n.url_params[e.attr("name")]=e.attr("data-oldDate"):n.date=r.cur_date}!e.val().length||e.hasClass("tribe-no-param")||e.is("#tribe-bar-date")||(e.is(":checkbox")?e.is(":checked")&&(n.params[e.attr("name")]=e.val(),"map"!==n.view&&(n.url_params[e.attr("name")]=e.val()),("month"===n.view||"day"===n.view||"week"===n.view||n.recurrence)&&n.pushcount++):(n.params[e.attr("name")]=e.val(),"map"!==n.view&&(n.url_params[e.attr("name")]=e.val()),"month"!==n.view&&"day"!==n.view&&"week"!==n.view||n.pushcount++))})});var D=a('#tribe-events-bar [class^="tribe-bar-button-"]'),x=D.next(".tribe-bar-drop-content");D.on("click",function(){var e=a(this);return e.toggleClass("open"),e.next(".tribe-bar-drop-content").toggle(),!1}),a(t).on("click",function(e){o.hasClass("tribe-bar-views-open")&&!a.contains(t.getElementById("tribe-bar-views"),e.target)&&(w(),h.trigger("focus"));var r=a("#tribe-bar-collapse-toggle");o.hasClass("tribe-bar-collapse")&&r.hasClass("tribe-bar-filters-open")&&!a.contains(t.getElementById("tribe-bar-filters-wrap"),e.target)&&(y(r),r.trigger("focus")),D.hasClass("open")&&(D.removeClass("open"),x.hide())}),x.on("click",function(e){e.stopPropagation()}),l&&tec_debug.info("TEC Debug: tribe-events-bar.js successfully loaded")})}(window,document,jQuery,tribe_ev.data,tribe_ev.events,tribe_ev.fn,tribe_ev.state,tribe_ev.tests,tribe_debug);