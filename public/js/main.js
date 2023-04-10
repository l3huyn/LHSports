window.addEventListener("load", function () {
  $("#zoom").elevateZoom();
  // $(".add-to-cart").click(function (e) {
  //   const addToCart = $(".add-to-cart")[0].href;
  //   console.log(addToCart);
  //   e.preventDefault();
  //   $.ajax({
  //     type: "get",
  //     url: addToCart,
  //     success: function (response) {
  //       Swal.fire(
  //         'Good job!',
  //         'You clicked the button!',
  //         'success'
  //       )
  //       // const data = JSON.parse(response)
  //       var value = '@Request.RequestContext.HttpContext.Session["cart"]';
  //       console.log(value);
  //     },
  //   });
  // });
});

//Ajax cho gio hang
// $(document).ready(function () {
//   $("#qty-product").change(function () {
//       var price = $("#price-product").val();
//       var num_order = $("#num_order").val(); 
//       var data = {num_order: num_order, price: price};

//       $.ajax({
//           url: 'process.php', //Trang xử lý, mặc định trang hiện tại
//           method: 'POST', //POST hoặc GET, mặc định GET
//           data: data, //Dữ liệu truyền lên server
//           dataType: 'text', //HTML, text, script, json
//           success: function (data) {
//               //Xử lý dữ liệu trả về 

//               //--Xuất dữ liệu lên HTML 
//               $("#total").html("<strong>" + data + "</strong>");

//               //Cấu trúc data.FIELD để lấy giá trị 
// //                alert(data.total); //data.total: data gọi đến trường total 
//           },
          
//           //Hiển thị khi có lỗi
//           error: function (xhr, ajaxOptions, thrownError) {
//               alert(xhr.status);
//               alert(thrownError);
//           }


//       });
//   });
// });
