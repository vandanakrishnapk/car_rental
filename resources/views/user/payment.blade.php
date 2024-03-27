@extends('user.main')
@section('content')

<form action="{{ route('dopay') }}" method="POST">
    @csrf 
    <h4 class="text-light text-center">pay now</h4>
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" class="form-control mb-3">
    <input type="hidden" name="car_id" value="{{ $cars_id->car_id }}" class="form-control mb-3">

    <input type="text" name="booking_id" value="{{ $bookid }}" class="form-control mb-3">
    
    <img src="{{asset('storage/images/'.$cars_id->image)}}"  alt="" height="100px" width="100px" class="mx-5 mb-3 rounded-2"><br>
    <strong class="text-success mx-5">Model:{{ $cars_id->model }}</strong><br>
    <strong class="text-success mx-5">Category:{{ $cars_id->category }}</strong><br>
    <div class="form-group">
        <label for="">No of days</label>
        <input type="number" id="numday" min="1" value="1" class="form-control"><br>
    <label for="">Price per day</label>
    <input type="text"  id="perday" value="{{ $cars_id->price }}" class="form-control mb-2 ms-2"><br>
    <label for="">Total</label>
    <input type="text" name="price" id="price" readonly class="form-control mb-2 ms-2"><br>
    </div>
    <div class="form-group">
        <label for="">Payment method</label>
        <select name="payment_method" id="" class="form-select">
            <option value="gpay">gpay</option>
            <option value="credit card">credit card</option>
            <option value="debit card ">debit card</option>
        </select>
    </div>

    <input type="submit" class="btn btn-primary mt-4">
</form>
<script>
      const quantityInput = document.getElementById('numday');
    const priceInput = document.getElementById('perday');
    const totalInput = document.getElementById('price');
    
    // Function to calculate total price
    function calculateTotalPrice() {
      const quantity = parseFloat(quantityInput.value);
      const price = parseFloat(priceInput.value);
      
      const totalPrice = quantity * price;
      
      // Display the total price in the total input field
      totalInput.value = totalPrice.toFixed(2); // Displaying total price up to 2 decimal places
    }
    
    // Event listener for input change
    quantityInput.addEventListener('input', calculateTotalPrice);
    
    
    // Initial calculation
    calculateTotalPrice();
</script>
@endsection