@extends('frontend.layouts.master')
@section('title', 'About')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
header #navbar ul li:nth-child(7) a.active {
    border: 1px solid #fff;
}

.footer-link:nth-child(7) a.active {
    border: 1px solid #000;
}
</style>
<style>
#order_product {
    margin-top: 70px;
    padding-top: 120px !important;
    padding-bottom: 60px;
    background: linear-gradient(rgb(14 29 52 / 59%), rgb(14 29 52 / 94%)),
    url('{{ asset("assets/frontend/images/counter-background.jpg") }}') center center;
    background-size: cover;
    padding-bottom: 60px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

@media (min-width: 1365px) {
    #order_product {
        background-attachment: fixed;
    }
}

.main-block {
    background: #f6f6f6;
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    border-radius: 5px;
}

@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
}

.form_container {
    display: flex;
    flex-direction: row;
    border-radius: 0 0 5px 5px;
    padding: 25px 4px;
}

.form_container .col-md-7 {
    padding-left: 23px;
}

form {
    flex: 4;
}

.Yorder {
    flex: 2;
}

.form_title {
    background-color: var(--color-primary);
    border-radius: 5px 5px 0 0;
    padding: 9px 20px;
    color: #f6f6f6;
}

.form_title h2 {
    margin: 0;
    padding-left: 15px;
    font-size: 30px;
}

.required {
    color: red;
}

label,
table {
    display: block;
    margin: 15px;
}

label>span {
    float: left;
    width: 25%;
    margin-top: 1px;
    padding-right: 10px;
}

input[type="text"],
input[type="tel"],
input[type="email"],
select {
    width: 70%;
    height: 30px;
    padding: 5px 10px;
    margin-bottom: 10px;
    border: 1px solid #dadada;
    color: #888;
}

select {
    width: 70%;
    height: 30px;
    padding: 5px 10px;
    margin-bottom: 10px;
    border: 1px solid #dadada;
    color: #888;
}

.Yorder {
    height: auto;
    padding: 13px 20px 0px 6px;
}

table {
    margin: 0;
    padding: 0;
}

th {
    border-bottom: 1px solid #dadada;
    padding: 10px 0;
}

td {
    border-bottom: 1px solid #dadada;
    padding: 25px 25px 25px 0;
}

button {
    width: 100%;
    margin-top: 10px;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background: var(--color-primary);
    color: #fff;
    font-size: 15px;
    font-weight: bold;
    border: 1px solid #ddd;
}

button:hover {
    cursor: pointer;
    color: #fff;
    background: #999;
}

.selected-products {
    background-color: #fff;
    width: 99%;
    margin-left: 0.5%;
    padding: 4px 0px !important;
    margin-top: 15px;
}

.selected-products p {
    padding: 0px;
}

.add-product {
    width: fit-content;
    padding: 10px 15px;
}

.list_form {
    /* border-bottom: 1px dashed #999; */
    padding-bottom: 10px;
}

.selected-product-img {
    margin-left: 10px;
}

.selected-product-img img {
    padding-left: 10px;
}
</style>
<style>
.first-form-btn {
    width: 100%;
    background-color: var(--color-primary) !important;
    color: #fff;
}

.first-form-btn:hover {
    background-color: #999 !important;
    color: #fff;
}

table.table tr th:nth-child(1) {
    width: 8%;
}

table.table tr th:nth-child(2) {
    width: 25%;
}

table.table tr th:nth-child(3) {
    width: 35%;
}

table.table tr th:nth-child(4) {
    width: 25%;
}

table.table tr th:nth-child(5) {
    width: 10%;
}

.manage-pro-title {
    font-size: 18px;
    background-color: #ddd;
    padding: 10px 10px;
    margin-bottom: 15px;
}

.d-btn {
    margin: 0px;
    padding: 3px 10px;
}

.product-data {
    padding: 0px 20px 50px 20px;
}

.detail-menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.add-more-btn {
    background-color: var(--color-primary);
    color: #fff;
}

.add-more-btn {
    background-color: var(--color-primary);
    color: #fff;
}

.add-more-btn:hover {
    background-color: #999;
    color: #fff;
}

input[type="text"],
input[type="tel"],
input[type="email"],
select {
    width: 75%;
    height: 30px;
    padding: 5px 10px;
    margin-bottom: 10px;
    border: 1px solid #dadada;
    color: #888;
}

textarea {
    width: 100%;
    height: 50px;
    box-sizing: border-box;
    padding: 10px;
    font-size: 16px;
    margin-left: 16px;
    border: 1px solid #ddd;
}
</style>
<main class="order_product" id="order_product">
    <section id="order_form_page">
        <div class="container ">
            <div class="main-block">
                <div class="form_title">
                    <h2 class=text-center>Order Placement Form</h2>
                </div>
                <form id="fstep-1" action="" method="" class="list_form">
                    <div class="form_container row g-3">
                        <div class="col-md-7 ">
                            <label>
                                <span>Category <span class="required">*</span>
                                </span>
                                <select name="category_id" onchange="getProducts(this.value);" required>
                                    <option value="">--Select Product Category--</option>
                                    @foreach($productCategory as $row)
                                    <option value="{{$row->id}}" @if($row->id == request()->category_id) selected
                                        @endif>{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </label>
                            <label>
                                <span>Product <span class="required">*</span>
                                </span>
                                <select name="product_id" onchange="getVariation(this.value);" required>
                                    <option value="">--Select Product--</option>
                                </select>
                            </label>
                            <label>
                                <span>Weight <span class="required">*</span>
                                </span>
                                <select name="variation" onchange="displayPrice(this)" required>
                                    <option value="">--Select Weight--</option>
                                </select>
                            </label>
                        </div>
                        <div class="col-md-5">
                            <div class="Yorder">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="selected-product-img">

                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="selected-product-price">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-2 col-sm-12">
                                <button type="submit" class="add-product first-form-btn">Add to List</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- <div class="container" style="border-top: 1px dashed #999; width:94%; margin-bottom:40px; margin-top:20px;"></div> -->
                <div class="container">
                    <div class="product-data section2">
                        <h2 class="manage-pro-title">Manage Product</h2>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--<tr>
                                    <th scope="row" class="text-center">1</th>
                                    <td>Masale</td>
                                    <td>Chaha Masala</td>
                                    <td>$69</td>
                                    <td>
                                        <button class="d-btn">Delete</button>
                                    </td>
                                </tr>-->
                            </tbody>
                        </table>
                        <div class="row detail-menu">
                            <div class="col-4">
                                <p class="fw-bold">Total Price : <span>$ 0</span>
                                </p>
                            </div>
                            <div class="col-2 text-end">
                                <button class="add-more-btn"> Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container"
                    style="border-top: 1px dashed #999; width:94%; margin-bottom:40px; margin-top:0px;"></div>
                <div class="container">
                    <div class="product-data section3">
                        <form id="fstep-2" action="{{route('order.submit')}}">
                            @csrf
                            <div class="row">
                                <div id="order-hidden-inputs"></div>
                                <div class="col-md-6 col-lg-4 col-sm-12">
                                    <label>
                                        <span class="fname">Name <span class="required">*</span> : </span>
                                        <input type="text" class="form-control" name="name" required>
                                    </label>
                                </div>
                                <div class="col-md-6 col-lg-4 col-sm-12">
                                    <label>
                                        <span>Phone <span class="required">*</span>
                                        </span>
                                        <input type="tel" class="form-control" name="phone" required>
                                    </label>
                                </div>
                                <div class="col-md-6 col-lg-4 col-sm-12">
                                    <label>
                                        <span>Email <span class="required">*</span>
                                        </span>
                                        <input type="email" class="form-control" name="email" required>
                                    </label>
                                </div>
                                <div class="row justify-content-center mt-3">
                                    <labe class="d-flex justify-content-center">
                                        <textarea name="message" placeholder="Your Address"></textarea>
                                        </label>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-md-2 col-am-12">
                                        <button type="submit"> SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog">
        <div class="modal-content">
          <!--<div class="modal-header">
            <h5 class="modal-title" id="successModalLabel">Success</h5>
          </div>-->
          <div class="modal-body text-center">
            <img style="width: 20%;" src="{{asset('assets/frontend/images/checked.png')}}">
            <h4 class="mt-2">Enquiry Submitted Successfully!</h4>
          </div>
          <div class="modal-footer">
            <button style="width: auto;text-align: center;margin: 0px auto;padding: 5px 15px;" type="button" class="btn btn-primary" id="reloadButton">OK</button>
          </div>
        </div>
      </div>
    </div>    
</main>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    getProducts('{{request()->category_id}}');
    $('.add-more-btn').css('opacity', 0.5).css('pointer-events', 'none');
    $('.section3').hide();
    $(window).on('beforeunload', function() {
        if (!isFormSubmitting) {
            return 'Are you sure you want to leave?';
        }
    });
    setTimeout(function() {
        $('select[name="product_id"]').val('{{request()->product_id}}').change();
    }, 1000)
});

function getProducts(category_id) {
    cleanSideData();
    if (category_id != '') {
        $.ajax({
            url: '/order/getProducts/' + category_id,
            type: 'GET',
            success: function(data) {
                $('select[name="product_id"]').html(data);
            }
        });
    }
}

function getVariation(product_id) {
    cleanSideData();
    if (product_id != '') {
        $.ajax({
            url: '/order/getVariation/' + product_id,
            type: 'GET',
            success: function(data) {
                $('select[name="variation"]').html(data.options);
                if (data.image == '') {
                    $('.selected-product-img').html('');
                } else {
                    $('.selected-product-img').html('<img src="' + data.image +
                        '" class="img-fluid">');
                }

            }
        });
    }
}

function displayPrice(selectElement) {
    const price = $(selectElement).find('option:selected').data('price');
    if (price == undefined) {
        $('.selected-product-price').html('');
    } else {
        $('.selected-product-price').html('<h2>Price : <span>$ ' + price + ' </span></h2>');
    }

}

function cleanSideData() {
    $('.selected-product-img').html('');
    $('.selected-product-price').html('');
}

var rowCount = 0;
var totalPrice = 0;
$("#fstep-1").on("submit", function(e) {
    e.preventDefault();

    const selectedElement = $('select[name="variation"] option:selected');
    rowCount++
    const price = selectedElement.data('price');
    const weight = selectedElement.data('weight');
    const category = selectedElement.data('category');
    const product = selectedElement.data('product');

    $(".product-data table tbody").append(`<tr data-row="${rowCount}">
            <th scope="row" class="text-center">${rowCount}</th>
            <td>${category}</td>
            <td>${product}</td>
            <td class="price">$${price}</td>
            <td>
                <button data-id="${rowCount}" class="d-btn">Delete</button>
            </td>
        </tr>`);

    $("#fstep-2 #order-hidden-inputs").append(`
            <div data-row="${rowCount}">
                <input type="hidden" name="id[]" value="${rowCount}">
                <input type="hidden" name="category[]" value="${category}">
                <input type="hidden" name="product[]" value="${product}">
                <input type="hidden" name="price[]" value="${price}">
                <input type="hidden" name="weight[]" value="${weight}">
            </div>
        `);

    //step 1 form
    cleanSideData();
    $(this).trigger('reset');

    //table section
    totalPrice += price;
    $('.add-more-btn').css('opacity', 1).css('pointer-events', 'inherit');
    $('.detail-menu span').html('$ ' + totalPrice);

    $('html, body').animate({
        scrollTop: $('.product-data').offset().top
    }, 100);
});

$('.add-more-btn').click(function() {
    $('.section3').show();
    $('html, body').animate({
        scrollTop: $('.section3').offset().top
    }, 100);
});

$(document).on('click', '.d-btn', function() {
    const rowId = $(this).data('id'); // Changed data('row') to data('id')
    //console.log(rowId);
    if (confirm('Are you sure you want to delete this item?')) {
        var currentPrice = parseInt($(`[data-row="${rowId}"]`).find('.price').text().trim().replace('$',
            '')); // Parse to integer
        var totalPrice = parseInt($('.detail-menu span').text().trim().replace('$', '')); // Parse to integer
        $('.detail-menu span').text('$ ' + (totalPrice - currentPrice));

        $(`[data-row="${rowId}"]`).remove();

        if ($('.product-data table tbody').children().length === 0) {
            $('.add-more-btn').css('opacity', 0.5).css('pointer-events', 'none');
            $('.section3').hide();
        }
    }
});

var isFormSubmitting = false;
$('#fstep-2').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            if (response.status === 'success') {
                // Show the modal with the success message
                //$('#successModal .modal-body').text(response.message);
                var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();

                // Handle the "OK" button click
                $('#reloadButton').on('click', function() {
                    isFormSubmitting = true;
                    location.reload();
                });
            }
        },
        error: function(xhr) {
            // Handle validation errors
            var errors = xhr.responseJSON.errors;
            var errorMessages = '';

            $.each(errors, function(key, messages) {
                errorMessages += messages.join(', ') + '\n'; // Combine error messages
            });

            alert('Validation errors:\n' + errorMessages); // Show error messages
        }
    });
});
</script>
@endsection