jQuery((function(t){t(".list-office .parent").on("click",(function(){t(this).next().slideToggle(),t(this).toggleClass("active")})),t("input").on("change",(function(){var i=t(this).prop("files")[0];t("p").text(i.name)}))}));