new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["IOS", "Web",  "Android"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#a3e1d4", "#dedede", "#b5b8cf"],
          data: [2478,5267,734]
        }
      ]
    },
    options: {
      title: {
        display: true,
      }
    }
});