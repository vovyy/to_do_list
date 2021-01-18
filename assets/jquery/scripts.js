jQuery(document).ready(function() {
	$(document).on("change", ".checkbox-done", function() {
		if ($(this).is(":checked")) {
			var value = $(this).val();
			var id = parseInt($(this).attr("data-target"));
			$.ajax({
				type: "POST",
				url: window.location.href,
				data: {
					value: value,
					id: id
				},
				success: function(html) {
					console.log(html);
				}
			});
		}
	});

	$(document).ready(function() {
		var table = $(document).find("#records");
		table.find("tr").each(function() {
			if ($(this).hasClass("active"))
        $(this).css("backgroundColor","lightGreen");
		});

    $("#records").DataTable({
  			language: {
  				//"url": url + "assets/datatables/DataTables-1.10.21/Plugins/i18n/czech.lang"
  				sEmptyTable: "Tabulka neobsahuje žádná data",
  				sInfo: "Zobrazuji _START_ až _END_ z celkem _TOTAL_ záznamů",
  				sInfoEmpty: "Zobrazuji 0 až 0 z 0 záznamů",
  				sInfoFiltered: "(filtrováno z celkem _MAX_ záznamů)",
  				sInfoPostFix: "",
  				sInfoThousands: " ",
  				sLengthMenu: "Zobraz záznamů _MENU_",
  				sLoadingRecords: "Načítám...",
  				sProcessing: "Provádím...",
					sSearch: "Hledat:",
  				sZeroRecords: "Žádné záznamy nebyly nalezeny",
  				oPaginate: {
  					sFirst: "První",
  					sLast: "Poslední",
  					sNext: "Další",
  					sPrevious: "Předchozí",
  				},
  				oAria: {
  					sSortAscending: ": aktivujte pro řazení sloupce vzestupně",
  					sSortDescending: ": aktivujte pro řazení sloupce sestupně",
  				},
  			},
  		});
	});

});
