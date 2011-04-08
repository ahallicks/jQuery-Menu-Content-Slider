(function($)
{

	$.fn.PageSlider = function(options)
	{

		options = $.extend($.fn.PageSlider.defaults, options);

		/**
		 *
		 * @access public
		 * @return void
		 **/
		function startSlider(pageName, refEl, options)
		{

			if($("#"+pageName).length === 0)
			{

				showLoading($(options.container));

				$.ajax({
					type:	"POST",
					url:	"ajax.php",
					data:	"page="+pageName,
					success: function(msg)
					{

						$(options.outer).append('<div id="'+pageName+'" class="apage">'+msg+'</div>');

						$(options.outer).animate({
							left: '-'+($("#"+pageName).position().left - options.offset)
						}, options.duration, "easeInOutExpo");

						$(options.container).animate({
							height: $("#"+pageName).height()
						}, options.duration, "easeInOutExpo");

						hideLoading($(options.container));

					}
				});

			} else {

				var scrollLeft = pageName === options.defaultPage ? options.offset : '-'+($("#"+pageName).position().left - options.offset);

				$(options.outer).animate({
					left: scrollLeft
				}, options.duration, "easeInOutExpo");

				$(options.container).animate({
					height: $("#"+pageName).height()
				}, options.duration, "easeInOutExpo");

			}

			var liEl = $(refEl).parent();

			if($("#clone").length > 0)
			{

				var newLeft = $("#clone").position().left;
				var newTop = $("#clone").position().top;

			}

			$(options.menu1+" li").each(function()
			{

				if($(this).css("position") === "absolute")
				{

					$(this).animate({
	//					left: newLeft,
						left: 2000,
						top: newTop
					}, (options.duration/2), "easeInOutExpo", function()
					{

						$(this).css("left", "-999px").animate({
							left: newLeft,
						}, (options.duration/2), "easeInOutExpo", function()
						{

							var linkText = $(this).html();

							$(this).css("position", "static").html('<a href="'+$(this).data("old-link")+'" data="'+$(this).data("old-data")+'">'+linkText+'</a>');

							if(liEl.next().length > 0)
							{

								$("#clone").insertBefore(liEl.next());

							} else {

								$("#clone").insertAfter(liEl.prev());

							}

						});

					});

				}

			});

			if(liEl.next().length > 0 && $("#clone").length === 0)
			{

				var cloneEl = liEl.clone().insertBefore(liEl.next()).attr("id", "clone").css("visibility", "hidden");

			} else if(liEl.prev().length > 0 && $("#clone").length === 0)
			{

				cloneEl = liEl.clone().insertAfter(liEl.prev()).attr("id", "clone").css("visibility", "hidden");

			}

			if(liEl.next().length > 0 && options.firstClick === false)
			{

				var cloneEl = liEl.clone().insertBefore(liEl.next()).attr("id", "clone1").css("visibility", "hidden");

			} else if(liEl.prev().length > 0 && options.firstClick === false)
			{

				cloneEl = liEl.clone().insertAfter(liEl.prev()).attr("id", "clone1").css("visibility", "hidden");

			}

			var anchorEl = liEl.children().first();

			liEl.css("position", "absolute").animate({
	//			left: leftPos,
				left: -999,
				top: options.topPos
			}, (options.duration/2), "easeInOutExpo", function()
			{

				$(this).css("left", "2000px").animate({
					left: options.leftPos,
					top: options.topPos
				}, (options.duration/2), "easeInOutExpo", function()
				{

					$("#clone1").remove();

				});

			}).data({"old-link" : anchorEl.attr("href"), "old-data" : anchorEl.attr("data")}).html(anchorEl.html());

			options.firstClick = false;

		}

		function showLoading(refEl)
		{

			refEl.append('<img id="ajax-loader" src="ajax-loader.gif" alt="Loading" \>');

		}

		function hideLoading(refEl)
		{

			$(refEl).find("#ajax-loader").remove();

		}

		return this.each(function()
		{

			// Do something to each item

			options.leftPos = $(options.wrapper).width() - $(options.menu1).width();
			options.topPos = $(options.menu1).position().top;

			if(window.location.hash)
			{

				pageName = window.location.hash.substring(1, window.location.hash.length);


			} else {

				pageName = options.defaultPage;

			}

			var refEl = $("a[data="+pageName+"]");

			startSlider(pageName, refEl, options);

			$(options.menu1+" a").live("click", function()
			{

				startSlider($(this).attr("data"), $(this), options);

				return false;

			});

		});

	}

	$.fn.PageSlider.defaults = {
		wrapper		: "#w",
		container	: "#content",
		outer		: "#pages",
		menu1		: "#menu1",
		duration	: 800,
		offset		: 20,
		leftPos		: null,
		topPos		: null,
		firstClick	: true,
		defaultPage	: "page1"
	};

})(jQuery);