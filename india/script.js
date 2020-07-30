$(document).ready(function(){
	var url = "https://api.covid19india.org/data.json"

	$.getJSON(url,function(data){
		// console.log(data)

		var total_active,total_recovered,total_deaths,total_confirmed,delta_confirmed,delta_deaths,delta_recovered
		var state = []
		var confirmed = []
		var recovered = []
		var deaths = []

		$.each(data.statewise,function(id,obj){
			state.push(obj.state)
			confirmed.push(obj.confirmed)
			recovered.push(obj.recovered)
			deaths.push(obj.deaths)

		})

		state.shift()
		confirmed.shift()
		recovered.shift()
		deaths.shift()
		// console.log(state)

		total_active = data.statewise[0].active
		total_recovered = data.statewise[0].recovered
		total_deaths = data.statewise[0].deaths
		total_confirmed = data.statewise[0].confirmed
		delta_confirmed = data.statewise[0].deltaconfirmed
		delta_recovered = data.statewise[0].deltarecovered
		delta_deaths = data.statewise[0].deltadeaths
		$("#active").append(total_active)
		$("#confirmed").append(total_confirmed)
		$("#delta_confirmed").append(delta_confirmed)
		$("#recovered").append(total_recovered)
		$("#delta_recovered").append(delta_recovered)
		$("#deaths").append(total_deaths)
		$("#delta_deaths").append(delta_deaths)

		var myChart = document.getElementById("myChart").getContext('2d')
		var chart = new Chart(myChart,{
			type: 'line',
			data: {
				labels: state,
				datasets:[
					{
						label: "Confirmed Cases",
						data: confirmed,
						backgroundColor: "#f1c40f",
						minBarLength: 100
					},
					{
						label: "Recovered Cases",
						data: recovered,
						backgroundColor: "#2ec771",
						minBarLength: 100
					},
					{
						label: "Deceased Cases",
						data: deaths,
						backgroundColor: "#e74c3c",
						minBarLength: 100
					}
				]
			},
			options: {}
		})
	})
})