let products = {};
var x = 0;

$('#btn_generate_report').click(function () {
  $('#cp_md_generate_report').modal('show')
})

$("#btn_goto_bm").click(function () {
  $(".page").hide();
  $("#div_cp_bm").show();
  setTimeout(() => {
    $('.btn_cp_close_sidebar').trigger('click');
  }, 200);
});

$("#btn_goto_sm").click(function () {
  $(".page").hide();
  $("#div_cp_sm").show();
  load_stocks()
  setTimeout(() => {
    $('.btn_cp_close_sidebar').trigger('click');
  }, 200);
});

$('#btn_goto_dm').click(function () {
  alert('...')
})

$("#btn_goto_slm").click(function () {
  $(".page").hide();
  $("#div_cp_slm").show();
  setTimeout(() => {
    $('.btn_cp_close_sidebar').trigger('click');
  }, 200);

});

// go to account maintenance
$("#btn_goto_am").click(function () {

  $(".page").hide();
  $("#div_cp_am").show();
  setTimeout(() => {
    $('.btn_cp_close_sidebar').trigger('click');
  }, 200);

  load_accounts()
});

$('.btn_cp_close_sidebar').click(function () {
  if (x == 0) {
    $('#cp_logo').css('opacity', 0);
    x = 1;
  } else {
    $('#cp_logo').css('opacity', 1);
    x = 0;
  }
})

$('#btn_stocks_add').click(function () {
  $('#cp_md_add_stock').modal('show')
})

$('#btn_aa_add_account').click(function () {
  $('#cp_md_add_account').modal('show')
})

$('#btn_aa_save').click(function () {
  data = {
    user: $('#cp_aa_user').val(),
    pass: $('#cp_aa_pass').val(),
    position: $('#cp_aa_position').val(),
    email: $('#cp_aa_email').val(),
    contact: $('#cp_aa_contact').val(),
    fname: $('#cp_aa_fname').val(),
    lname: $('#cp_aa_lname').val(),
  };
  $.post('src/database/func/admin/add_account.php', data, function (data) {
    $('#trigger_toast').trigger('click')
    load_accounts();
  })
})



$(document).ready(function () {

  load_products();

  $("#btn_goto_controlpanel").click(function () {
    $("#pane_admin").hide();
    $("#pane_control_panel").show();
    $("#div_cp_bm").show();
  });

  $("#btn_goto_admin").click(function () {
    $("#pane_admin").show();
    $("#pane_control_panel").hide();
    $('#header_home').click();
  });

  // product maintenance add btn
  $("#btn_pm_add").click(function () {
    $('#cp_md_add_product').modal('show')
  })


});


function load_products() {

  $.getJSON("src/database/func/admin/read_products_list.php", (data) => {
    output = "";
    sel_product = "";
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

      sel_product += `
      <option value="`+ val.id + `">` + val.name + `</option>
      `;

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
    $("#stock_product_id").empty().append(sel_product)

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

  let accounts = {};

  $.getJSON("src/database/func/admin/read_accounts_list.php", (data) => {
    output = "";
    counter = 1;

    $.each(data, function (key, val) {
      output += ` 
      <tr>
        <td class="text-center ps-0">`+ counter + `</td>
        <td class="text-center">`+ val.user + `</td>
        <td class="text-center">`+ val.email + `</td>
        <td class="text-center">`+ val.contact + `</td>
        <td class="text-center">`+ val.position.toUpperCase() + `</td>
        <td class="text-end">
          <a class="btn_view_account hoverable-btn" acc_id="`+ val.id + `"> <i class="fa-solid fa-eye"></i><a/>
          <a class="btn_edit_account hoverable-btn" acc_id="`+ val.id + `"> <i class="fa-solid fa-pen-to-square"></i><a/>
          <a class="btn_delete_account hoverable-btn" acc_id="`+ val.id + `"> <i class="fa-solid fa-box-archive"></i><a/>
        </td>
      </tr>`;

      counter = counter + 1;

      accounts[val.id] = {
        user: val.user,
        email: val.email,
        contact: val.contact,
        position: val.position,
        fname: val.fname,
        lname: val.lname,
        pass: val.pass,
      }

    });

    $("#cp_tbl_accountlist tbody").empty().append(output)

    $('.btn_edit_account').click(function () {
      $('#cp_md_update_account').modal('show');
      $('#cp_ua_user').val(accounts[$(this).attr('acc_id')].user)
      $('#cp_ua_email').val(accounts[$(this).attr('acc_id')].email)
      $('#cp_ua_contact').val(accounts[$(this).attr('acc_id')].contact)
      $('#cp_ua_position').val(accounts[$(this).attr('acc_id')].position)
      $('#cp_ua_fname').val(accounts[$(this).attr('acc_id')].fname)
      $('#cp_ua_lname').val(accounts[$(this).attr('acc_id')].lname)
      $('#cp_ua_pass').val(accounts[$(this).attr('acc_id')].pass)
      $('#btn_ua_save').attr('attr-id', $(this).attr('acc_id'))
    })

    $('.btn_delete_account').click(function () {
      data = {
        id: $(this).attr('acc_id')
      };

      $.post('src/database/func/admin/delete_account.php', data, function (data) {
        alert('Account Deleted...')
        load_accounts();
      })
    })



    $('#btn_ua_save').click(function () {
      data = {
        user: $('#cp_ua_user').val(),
        pass: $('#cp_ua_pass').val(),
        position: $('#cp_ua_position').val(),
        email: $('#cp_ua_email').val(),
        contact: $('#cp_ua_contact').val(),
        fname: $('#cp_ua_fname').val(),
        lname: $('#cp_ua_lname').val(),
        id: $(this).attr('attr-id')
      };

      $.post('src/database/func/admin/update_account.php', data, function (data) {
        alert('Account Updated...')
        load_accounts();
      })
    })

  });

}

function load_stocks() {
  $.getJSON("src/database/func/admin/read_stocks.php", (data) => {
    output = "";
    counter = 1;

    $.each(data, function (key, val) {
      output += ` 
      <tr>
          <td class="text-center">`+ counter + `</td>
          <td>`+ val.name + `</td>`

      if (val.stock_count > val.low_stock_indicator) {
        output += ` <td class="text-center"><span style="width:40px" class="badge text-bg-success">` + val.stock_count + `</span></td>`;
      } else {
        output += ` <td class="text-center"><span style="width:40px" class="badge text-bg-danger">` + val.stock_count + `</span></td>`;
      }

      output += `
      <td class="text-center">`+ val.low_stock_indicator + `</td>

      <td class="text-center">` + val.date_modified + `</td>
        <td class="text-end">

          <a class=" hoverable-btn" > <i class="fa-solid fa-pen-to-square"></i><a/>
          <a class=" hoverable-btn" > <i class="fa-solid fa-box-archive"></i><a/>

        </td>
      </tr>`;




      counter = counter + 1;

    });

    $("#cp_tbl_stocks tbody").empty().append(output);
  });
}