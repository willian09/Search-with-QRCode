<div> <br>
    <div class="input-group col-6" style="margin: auto; margin-top: 20px; width: 35%">
        <span class="input-group-text" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upc-scan"
                viewBox="0 0 16 16">
                <path
                    d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z" />
            </svg>
        </span>
        <input wire:model='search' type="text" id="barcode-input" class="form-control" placeholder="Scan Barcode"
            aria-label="search" aria-describedby="basic-addon1">
        <button wire:click="searchByBarcode" id="search-button" class="btn btn-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-search" style="vertical-align: -0.125em;" viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
        </button>
    </div>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <br>
    <div class="row">
        <div class="col-auto" style="margin: auto; margin-top: 20px; margin-bottom: 20px">
            <button wire:navigate href="/customers/create" class="btn btn-success btn-sm">Create customer</button>
        </div>
        <livewire:flash-message />
    </div><br>
    <table style="width: 90%; margin:auto;" class="table table-sm">
        <thead>
            <tr style="text-align: center">
                <th style=" color:yellow; background-color:black" scope="col">#</th>
                <th style=" color:yellow; background-color:black" scope="col">Name</th>
                <th style=" color:yellow; background-color:black" scope="col">Birth date</th>
                <th style=" color:yellow; background-color:black" scope="col">Email</th>
                <th style=" color:yellow; background-color:black" scope="col">Phone</th>
                <th style=" color:yellow; background-color:black" scope="col">City</th>
                <th style=" color:yellow; background-color:black" scope="col">Action</th>
            </tr>
        </thead>
        <tbody wire:ignore class="table-group-divider">
            @foreach ($customers as $customer)
                <tr style="text-align: center">
                    <th scope="row">{{ $customer->id }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->birthDate }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->city }}</td>
                    <td>
                        <button wire:navigate href="/customers/{{ $customer->id }}"
                            class="btn btn-success btn-sm"><ion-icon name="eye-outline"></ion-icon></button>
                        <button wire:navigate href="/customers/edit/{{ $customer->id }}"
                            class="btn btn-warning btn-sm"><ion-icon name="create-outline"></ion-icon></button>
                        <button wire:click="deleteCustomer({{ $customer->id }})" class="btn btn-danger btn-sm"><ion-icon
                                name="trash-outline"></ion-icon></button>
                    </td>
                </tr>
                <tr>
            @endforeach
        </tbody>
    </table>
</div>