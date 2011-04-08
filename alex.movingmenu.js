var HCDSlider = function()
{

	leftPos = null,
	topPos = null,
	firstClick = true;

	return {

		Init : function()
		{

			leftPos = $("#w").width() - $("#menu1").width();
			topPos = $("#menu1").position().top;

			if(window.location.hash)
			{

				pageName = window.location.hash.substring(1, window.location.hash.length);


			} else {

				pageName = "page1";

			}

			var refEl = $("a[href="+pageName+"]");

			HCDSlider.startSlider(pageName, refEl);

			$("#menu1 a").live("click", function()
			{

				HCDSlider.startSlider($(this).attr("href"), $(this));

				return false;

			});

		},

		startSlider : function(pageName, refEl)
		{

			if($("#"+pageName).length === 0)
			{

				HCDSlider.showLoading($("#content"));

				$.ajax({
					type:	"POST",
					url:	"ajax.php",
					data:	"page="+pageName,
					success: function(msg)
					{

						$("#pages").append('<div id="'+pageName+'" class="apage">'+msg+'</div>');

						$("#pages").animate({
							left: '-'+($("#"+pageName).position().left - 20)
						}, 500, "easeInOutExpo");

						$("#content").animate({
							height: $("#"+pageName).height()
						}, 500, "easeInOutExpo");

						HCDSlider.hideLoading($("#content"));

					}
				});

			} else {

				var scrollLeft = pageName === "page1" ? 20 : '-'+($("#"+pageName).position().left - 20);

				$("#pages").animate({
					left: scrollLeft
				}, 500, "easeInOutExpo");

				$("#content").animate({
					height: $("#"+pageName).height()
				}, 500, "easeInOutExpo");

			}

			var liEl = $(refEl).parent();

			if($("#clone").length > 0)
			{

				var newLeft = $("#clone").position().left;
				var newTop = $("#clone").position().top;

			}

			$("#menu1 li").each(function()
			{

				if($(this).css("position") === "absolute")
				{

					$(this).animate({
	//					left: newLeft,
						left: 2000,
						top: newTop
					}, 400, "easeInOutExpo", function()
					{

						$(this).css("left", "-999px").animate({
							left: newLeft,
						}, 400, "easeInOutExpo", function()
						{

							var linkText = $(this).html();

							$(this).css("position", "static").html('<a href="'+$(this).attr("rel")+'">'+linkText+'</a>');

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

			if(liEl.next().length > 0 && firstClick === false)
			{

				var cloneEl = liEl.clone().insertBefore(liEl.next()).attr("id", "clone1").css("visibility", "hidden");

			} else if(liEl.prev().length > 0 && firstClick === false)
			{

				cloneEl = liEl.clone().insertAfter(liEl.prev()).attr("id", "clone1").css("visibility", "hidden");

			}

			var anchorEl = liEl.children().first();

			liEl.css("position", "absolute").animate({
	//			left: leftPos,
				left: -999,
				top: topPos
			}, 400, "easeInOutExpo", function()
			{

				$(this).css("left", "2000px").animate({
					left: leftPos,
					top: topPos
				}, 400, "easeInOutExpo", function()
				{

					$("#clone1").remove();

				});

			}).attr("rel", anchorEl.attr("href")).html(anchorEl.html());

			firstClick = false;

		},

		showLoading : function(refEl)
		{

			refEl.append('<img id="ajax-loader" src="ajax-loader.gif" alt="Loading" \>');

		},

		hideLoading : function(refEl)
		{

			$(refEl).find("#ajax-loader").remove();

		}

	}

}();