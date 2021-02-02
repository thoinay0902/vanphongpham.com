@extends('home.profile_user.layout_profile_user')
@section('profile_col_9')

<style>

    .wrapper {
        background-image: url("https://www.toptal.com/designers/subtlepatterns/patterns/qbkls.png")
    }
    
    .is-horizontal-center {
        justify-content: center;
        padding-top: 25px;
        text-align: center;
    }
    .field.has-addons{
        justify-content: center;
    }
    .section {
        padding: 1.5rem 1.5rem;
    }
    .card-image{
        margin: 0 auto;
        margin-bottom: -25px;
    }
    .info-area {
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
    }
    .info-output {
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
    }
    .data-conatiner{
        display: flex;
        font-size: 1em;
    }
    
    .red {
        color: hsl(348, 100%, 61%);
    }
    
    .bounce {
        -webkit-animation-name: bounce;
        animation-name: bounce;
        -webkit-transform-origin: center bottom;
        -ms-transform-origin: center bottom;
        transform-origin: center bottom;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        }
        @-webkit-keyframes bounce {
        0%, 20%, 53%, 80%, 100% {
        -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
        transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        }
        40%, 43% {
        -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
        transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
        -webkit-transform: translate3d(0, -30px, 0);
        transform: translate3d(0, -30px, 0);
        }
        70% {
        -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
        transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
        -webkit-transform: translate3d(0, -15px, 0);
        transform: translate3d(0, -15px, 0);
        }
        90% {
        -webkit-transform: translate3d(0,-4px,0);
        transform: translate3d(0,-4px,0);
        }
        }
        
        @keyframes bounce {
        0%, 20%, 53%, 80%, 100% {
        -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
        transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        }
        40%, 43% {
        -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
        transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
        -webkit-transform: translate3d(0, -30px, 0);
        transform: translate3d(0, -30px, 0);
        }
        70% {
        -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
        transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
        -webkit-transform: translate3d(0, -15px, 0);
        transform: translate3d(0, -15px, 0);
        }
        90% { -webkit-transform: translate3d(0,-4px,0); transform: translate3d(0,-4px,0);
        }
        } 
    
    @media only screen and (max-width: 400px) {
        .data-conatiner{
        font-size: 0.75em;
        }
    }


</style>


<div class="wrapper">
    <section class="section content columns is-centered">
        <div class="column is-three-fifths-tablet">
            <div class="card">
                <div class="card-image is-flex is-horizontal-center">
                    <figure class="image is-128x128">
                        <img class="icon-img" src="https://d1nhio0ox7pgb.cloudfront.net/_img/g_collection_png/standard/128x128/delivery_truck.png">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <h1 class="is-horizontal-center">Đã giao hàng</h1>
                        </div>
                    </div>
                    <div class="content">
                        <div class="is-horizontal-center">
                            <div class="field has-addons">
                                
                                <div class="control">
                                    
                                </div>
                            </div>
                            
                        </div>
                        <div class="checkboxes container is-fluid is-horizontal-center">
                            <label class="checkbox">
                                <input type="radio" value="5" name="shipping_radio" checked="checked" onclick="change_shipping_type(5)">
                                5 Ngày
                            </label>
                            <label class="checkbox">
                                <input type="radio" value="3" name="shipping_radio" onclick="change_shipping_type(3)">
                                3 Ngày
                            </label>
                            <label class="checkbox">
                                <input type="radio" value="2" name="shipping_radio" onclick="change_shipping_type(2)">
                                2 ngày
                            </label>
                        </div>
                        <div class="columns is-centered data-conatiner">
                            <div class="column is-two-fifths has-text-right">
                                <div class="info-area ">
                                    <p>Tên sản phẩm: </p>
                                </div>
                                <div class="info-area ">
                                    <p>Mã sản phẩm: </p>
                                </div>
                                <div class="info-area ">
                                    <p>Khối lượng: </p>
                                </div>
                                <div class="info-area">
                                    <p>Ngày đặt hàng: </p>
                                </div>
                                <div class="info-area">
                                    <p>Ngày giao hàng: </p>
                                </div>
                            </div>

                            <div class="column is-two-fifths">
                                <div class="info-output">
                                    <p><span id="totalOz">0</span> oz. (<span id="totalLbs">0</span> Lbs.)</p>
                                </div>
                                <div class="info-output">
                                    <p id="eta"></p>
                                </div>
                                <div class="info-output">
                                    <p><strong id=TotalCost></strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<script>

$(document).ready(AppLoaded)


function AppLoaded() {
    console.log('App is Loaded and Ready');
    apply_event_handlers();
}

let shipping_time = 5;
let shipping_cost = 0;
let arrival_date = '';
let weightOz = 0;

/********************
 * will add event handlers to all of the appropriate elements
 *@params: none
 *@return: none
 ********************/
function apply_event_handlers() {
    calculateButton(); //trigger calculations
}

/********************
 * function that triggers when calculate button is pressed
 *@params: none
 *@return: none
 ********************/
function calculateButton() {
    $("#calcBtn").click(function () {
        let inputValidation = $("#weightInput").val()
        if (inputValidation == '') {
            $('.btnValidation').addClass('red');
            return false;
        } else {
            console.log('calcBtn called.');
            $('btn-validation').val('');
            calculate_shipping(inputValidation, shipping_time)
            $("#weightInput").val('');
            $('.btnValidation').removeClass('red');
            calculateData()
            $('.icon-img').addClass('bounce');
            setTimeout(function () {
                $('.icon-img').removeClass('bounce');
            }, 1000);
        }
    });
}

/********************
 * checks the incoming values. If anything other than a number or period is pressed, it returns false.
 *@params: event {object} the object that holds the details of the event
 *@return: true if the key pressed is a number or the period key, false if it is not
 ********************/

function validate_keydown(evt, obj) {
    let charCode = (evt.which) ? evt.which : event.keyCode
    let value = obj.value;
    let dotcontains = value.indexOf(".") != -1;
    if (dotcontains)
        if (charCode == 46) return false;
    if (charCode == 46) return true;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

/********************
* update the stored value for the shipping based on the clicked radio button.
*@global: shipping_time
@params: none
*@return: none
********************/
function change_shipping_type(time) {
    shipping_time = time;

    let currentDate = new Date();
    let numberOfDaysToAdd = time;
    currentDate.setDate(currentDate.getDate() + numberOfDaysToAdd);

    let dd = currentDate.getDate();
    let mm = currentDate.getMonth() + 1;
    let y = currentDate.getFullYear();

    arrival_date = dd + '/' + mm + '/' + y;
}

/********************
 * process the shipping time and weight, and return an object with the shipping time and weight
 *@params: weight, shipping_time
 *@return: an object with the following properties and values: weight and cost.
 ********************/
function calculate_shipping(weight, shipping_time) {
    weightOz = weight * 16;

    if (weightOz <= 20) {
        shipping_cost = (weightOz * 0.02).toFixed(2);
    } else if (weightOz > 20 && weightOz < 32) {
        shipping_cost = (weightOz * 0.10).toFixed(2);
    } else if (weightOz >= 32) {
        shipping_cost = (weightOz * 0.20).toFixed(2);
    }

    if (shipping_time === 5) {
        shipping_cost = shipping_cost * 1;
    } else if (shipping_time === 3) {
        shipping_cost = shipping_cost * 1.5;
    } else if (shipping_time === 2) {
        shipping_cost = shipping_cost * 2;
    }
    change_shipping_type(shipping_time);
}

/********************
 * Populate Data on the DOM
 *@params: none
 *@return: an object with the following properties and values: arrival_date, weight and cost.
 ********************/
function calculateData() {
    $('#totalOz').text(weightOz);
    $('#totalLbs').text(weightOz / 16);
    $('#eta').text(arrival_date);
    $('#TotalCost').text("$" + shipping_cost.toFixed(2));
}

</script>



@endsection