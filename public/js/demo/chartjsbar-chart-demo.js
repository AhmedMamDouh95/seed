new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["IOS", "Web", "Android", "Marketing", "Sales", "Social Media"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#a3e1d4", "#dedede", "#b5b8cf","#e8c3b9","#999", "#0ce0ce"],
        data: [2, 1, 3, 1, 2, 3]
      }]
    },
    options: {
      title: {
        display: true,
        text: ''
      }
    }
});