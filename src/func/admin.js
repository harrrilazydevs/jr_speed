$(document).ready(function () {
  $("#btn_goto_adminpanel").click(function () {
    $("#pane_admin").hide();
    $("#pane_controlpanel").show();
    $("#div_cp_bm").show();

  });

  $("#btn_goto_admin").click(function () {
    $("#pane_admin").show();
    $("#pane_controlpanel").hide();

  });

  $("#btn_goto_bm").click(function () {
    $(".page").hide();
    $("#div_cp_bm").show();
    $(".clickable").trigger("click");
  });
  $("#btn_goto_sm").click(function () {
    $(".page").hide();
    $("#div_cp_sm").show();
    $(".clickable").trigger("click");
  });

  $("#btn_goto_slm").click(function () {
    $(".page").hide();
    $("#div_cp_slm").show();
    $(".clickable").trigger("click");

    write_chart(
      ["RB 1", "MTB 2", "RB 3", "RB 4", "MTB 5", "CB 6"],
      [12, 19, 3, 5, 2, 100]
    );
  });

  $("#btn_goto_am").click(function () {
    $(".page").hide();
    $("#div_cp_am").show();
    $(".clickable").trigger("click");
  });

  ctx = document.getElementById("slm_chart").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "line",
    data: {},
    options: {},
  });
  function write_chart(products, sales) {
    myChart.destroy();

    myChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: products, //['Borgir 1', 'Borgir 2', 'Borgir 3', 'Borgir 4', 'Borgir 5', 'Borgir 6'],
        datasets: [
          {
            label: "No of Sales",
            data: sales, //[12, 19, 3, 5, 2, 100],
            backgroundColor: ["rgba(255, 99, 132, 0.2)"],
            borderColor: ["rgba(255, 99, 132, 1)"],
            borderWidth: 1,
          },
        ],
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
    });
  }
});
