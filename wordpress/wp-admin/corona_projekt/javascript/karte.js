var karte = document.getElementById("deutschland");
var diagramm = document.getElementById("chartContainer");

function klick(){
    bewegeElemente();
}

function bewegeElemente(){
    karte.style.transform = "translate(-34vw, 0)";
	diagramm.style.transform = "translate(-50vw,0)";
}

function showCustomer(str) {
	klick();
	var xhttp;  
	if (str == "") 
	{
		document.getElementById("txtHint").innerHTML = "";
		return;
	}
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200)
		{
			var data=this.responseText.split("|");
			dia(data);

		}
	};
	xhttp.open("GET", "../php/ordered_output.php?q="+str, true);
	xhttp.send();
}

function dia(daten){
	var chart = new CanvasJS.Chart("chartContainer", {
		animationEnabled: true,
		theme: "light1", // "light1", "light2", "dark1", "dark2"
		title:{
			text: "Coronadaten"
		},
		axisY: {
			title: "involved people"
		},
		data: [{        
			type: "column",  
			showInLegend: true, 
			legendMarkerColor: "grey",
			legendText: "Fallzahlen aus "+daten[0]+" am "+daten[1],
			dataPoints: [      
				{ y: parseInt(daten[3],10),  label: "Neuinfektion" },
				{ y: parseInt(daten[4],10),  label: "sevendays_incidence" },
				{ y: parseInt(daten[5],10),  label: "sevendays_cases" },
				{ y: parseInt(daten[6],10),  label: "Todesfälle" },
			]
		}]
	});
	chart.render();
}