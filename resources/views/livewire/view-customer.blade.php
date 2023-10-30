<div class="card offset-3 col-6" style="margin-top: 80px">
    <h5 class="card-header" style="text-align: center; font-weight: bold; color:yellow; background-color:black;">View Customer</h5>
    <div class="card-body">
        <h4 class="card-title" style="text-align: center"><b>{{ $customer->name }}</b></h4>
        <div style="columns: 2;">
            <p class="card-text"><b>Date of birth: </b>{{ $customer->birthDate }}</p>
            <p class="card-text"><b>Email: </b>{{ $customer->email }}</p>
            <p class="card-text"><b>Phone number: </b>{{ $customer->phone }}</p>
            <p class="card-text"><b>Address: </b>{{ $customer->address }}</p>
            <p class="card-text"><b>City: </b>{{ $customer->city }}</p>
            <p class="card-text"><b>State: </b>{{ $customer->state }}</p>
            <p class="card-text"><b>Zip: </b>{{ $customer->zip }}</p>
            <p class="card-text"><b>Barcode: </b>{{ $customer->barcode }}</p>
        </div> <br>
        <div class="container text-center" style="border: 1px solid black">
            <div class="row align-items-center" style="border-bottom: 1px solid white">
                <div class="col align-items-center" style="color:yellow; background-color:black">
                    <h5 style="padding: 10px; margin-bottom: 0;"> Buy
                </div>
                <div wire:ignore class="col align-items-center" style="border-left: 1px solid white; color:yellow; background-color:black">
                    <h5 style="padding: 10px; margin-bottom: 0;">Beers <ion-icon name="beer-outline"></ion-icon></h5>
                </div>
                <div class="col align-items-center" style="border-left: 1px solid white; color:yellow; background-color:black">
                    <h5 style="padding: 10px; margin-bottom: 0;"> Drink
                </div>
            </div>
            <div class="row align-items-center">
                <div wire:ignore class="col" style="border-right: 1px solid black;">
                    <button wire:click='increment' class="btn btn-success" style="cursor: pointer;  margin: 5px;">
                        <h2 style="margin: auto"><ion-icon style="vertical-align: -0.105em" name="cash-outline"></ion-icon></h2>
                    </button>
                </div>
                <div class="col" style="font-size: 25px">
                    {{ $customer->amount }}
                </div>
                <div wire:ignore class="col" style="border-left: 1px solid black;">
                    <button wire:click="decrement" class="btn btn-danger" style="cursor: pointer;  margin: 5px">
                        <h2 style="margin: auto"><ion-icon style="vertical-align: -0.105em" name="beer-outline"></ion-icon></h2>
                    </button>
                </div>
            </div>
        </div><br>
        @if (session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <div style="text-align: center">
            <a href="/customers" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
