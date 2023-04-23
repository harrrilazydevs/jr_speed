let products = {};


$(document).ready(function () {

  load_products();

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

    load_accounts()
  });

  $("#btn_pm_add").click(function () {
    $('#cp_md_add_product').modal('show')
  })



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

  function load_products() {

    $.getJSON("src/database/func/admin/read_products_list.php", (data) => {
      output = "";
      counter = 1;

      $.each(data, function (key, val) {
        output += ` 
        <tr>
          <td class="text-center ps-0">`+ counter + `</td>
          <td>`+ val.name + `</td>
          <td>`+ val.description + `</td>

          <td class="text-center">`+ val.type + `</td>

          <td>₱`+ val.price.toLocaleString("en-US") + `</td>
          <td class="text-end">
            <a class="btn_view_product hoverable-btn" prod_id="`+ val.id + `"> <i class="fa-solid fa-eye"></i><a/>
            <a class="btn_edit_product hoverable-btn" prod_id="`+ val.id + `"> <i class="fa-solid fa-pen-to-square"></i><a/>
            <a class="btn_archive_product hoverable-btn" prod_id="`+ val.id + `"> <i class="fa-solid fa-box-archive"></i><a/>
          </td>
        </tr>`;

        counter = counter + 1;

        products['P' + val.id] =
        {
          type: val.type,
          name: val.name,
          img: val.img,
          price: val.price,
          description: val.description
        }

      });

      $("#cp_tbl_productlist tbody").empty().append(output)

      $('.btn_view_product').click(function () {
        $('#cp_md_vw_product').modal('show')
        $('#vwp_img').attr('src', products['P' + $(this).attr('prod_id')].img)
        $('#vwp_type').val(products['P' + $(this).attr('prod_id')].type)
        $('#vwp_name').val(products['P' + $(this).attr('prod_id')].name)
        $('#vwp_price').val(products['P' + $(this).attr('prod_id')].price)
        $('#vwp_description').val(products['P' + $(this).attr('prod_id')].description)
      })

      $('.btn_edit_product').click(function () {
        $('#cp_md_ed_product').modal('show')
        $('#edp_img').attr('src', products['P' + $(this).attr('prod_id')].img)
        $('#edp_type').val(products['P' + $(this).attr('prod_id')].type)
        $('#edp_name').val(products['P' + $(this).attr('prod_id')].name)
        $('#edp_price').val(products['P' + $(this).attr('prod_id')].price)
        $('#edp_description').val(products['P' + $(this).attr('prod_id')].description)
      })

    });

  }

  function load_accounts() {

    $.getJSON("src/database/func/admin/read_accounts_list.php", (data) => {
      output = "";
      counter = 1;

      $.each(data, function (key, val) {
        output += ` 
        <tr>
          <td class="text-center ps-0">`+ counter + `</td>
          <td>`+ val.user + `</td>
          <td>`+ val.email + `</td>
          <td class="text-center">`+ val.contact + `</td>
          <td class="text-center">`+ val.position.toUpperCase() + `</td>
          <td class="text-end">
            <a class="btn_view_product hoverable-btn" prod_id="`+ val.id + `"> <i class="fa-solid fa-eye"></i><a/>
            <a class="btn_edit_product hoverable-btn" prod_id="`+ val.id + `"> <i class="fa-solid fa-pen-to-square"></i><a/>
            <a class="btn_archive_product hoverable-btn" prod_id="`+ val.id + `"> <i class="fa-solid fa-box-archive"></i><a/>
          </td>
        </tr>`;

        counter = counter + 1;

        // products['P' + val.id] =
        // {
        //   type: val.type,
        //   name: val.name,
        //   img: val.img,
        //   price: val.price,
        //   description: val.description
        // }

      });

      $("#cp_tbl_accountlist tbody").empty().append(output)

      // $('.btn_view_product').click(function () {
      //   $('#cp_md_vw_product').modal('show')
      //   $('#vwp_img').attr('src', products['P' + $(this).attr('prod_id')].img)
      //   $('#vwp_type').val(products['P' + $(this).attr('prod_id')].type)
      //   $('#vwp_name').val(products['P' + $(this).attr('prod_id')].name)
      //   $('#vwp_price').val(products['P' + $(this).attr('prod_id')].price)
      //   $('#vwp_description').val(products['P' + $(this).attr('prod_id')].description)
      // })

      // $('.btn_edit_product').click(function () {
      //   $('#cp_md_ed_product').modal('show')
      //   $('#edp_img').attr('src', products['P' + $(this).attr('prod_id')].img)
      //   $('#edp_type').val(products['P' + $(this).attr('prod_id')].type)
      //   $('#edp_name').val(products['P' + $(this).attr('prod_id')].name)
      //   $('#edp_price').val(products['P' + $(this).attr('prod_id')].price)
      //   $('#edp_description').val(products['P' + $(this).attr('prod_id')].description)
      // })

    });

  }

  function load_bike_stocks() {
    $.getJSON("src/database/func/admin/read_bike_list.php", (data) => {
      output = "";
      counter = 1;

      $.each(data, function (key, val) {
        output += ` 
        <tr>
            <td class="text-center">`+ counter + `</td>
            <td>`+ val.type + `</td>
            <td>`+ val.name + `</td>
            <td>`+ al.img + `</td>
            <td>₱`+ val.price.toLocaleString("en-US") + `</td>
            <td class="text-end">
                <i class="hoverable-btn fa-solid fa-eye"></i>
                <i class="hoverable-btn fa-solid fa-pen-to-square"></i>
                <i class="hoverable-btn fa-solid fa-box-archive"></i>
            </td>
        </tr>`;

        counter = counter + 1;

      });

      $("#cp_tbl_bikeslist tbody").empty().append(output);
    });
  }
});
